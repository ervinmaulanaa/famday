<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Failed;
use Illuminate\Http\Request;
use App\Models\UsersModel;
use App\Models\EventsModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PhpOffice\PhpSpreadsheet\Calculation\LookupRef\Unique;
use TheSeer\Tokenizer\Exception;
use Validator;
use Session;
use Carbon\Carbon;

class AuthControllers extends Controller
{
    
    public function index(Request $request)
    {
        
        if ($request->session()->has('sesi')) {
            //$data = EventsModel::whereDate('acara_mulai', '<=', Carbon::today()->toDateString())->whereDate('acara_selesai', '>=', Carbon::today()->toDateString())->get();
            $data = EventsModel::where('acara_status', 'aktif')->get();
            return view('dashboard', compact('data'));
        } else {
            return view('login');
        }
    }

    public function login(Request $request)
    {
        
        $validator = Validator::make(
            $request->all(),
            [
                'email' => 'required|min:5|email|max:100',
                'password' => 'required|string|min:4',
            ],
            [
                'required'  => ':attribute harus diisi',
                'min'       => ':attribute minimal :min karakter',
            ]
        );

        if ($validator->fails()) {
            return redirect('/')->withFail($validator->errors()->first());
        }

        $user = UsersModel::where('person_email', $request->email)->first();
        
        if ($user) {
            if (Hash::check($request->password, $user->person_password)) {
                $time = date('Y-m-d H:i:s');
                $request->session()->push("sesi", $user);
                return redirect('/')->with('success', "Login Berhasil");
            } else {
                return redirect('/')->withFail("Password tidak sesuai!");
            }
        } else {
            return redirect('/')->withFail("Akun email tidak ditemukan!");
        }
    }

    public function actionlogout(Request $request)
    {
        $this->middleware('akses.admin');
        $request->session()->flush();
        return redirect('/');
    }

    public function register()
    {
        return view('register');
    }

    public function registerStore(Request $request)
    {
        
        $validator = Validator::make($request->all(),[
            'name' => 'required|min:5|max:100',
            'phone' => 'required|min:11|unique:tbl_fd_user,person_phone',
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);
    
        if ($validator->fails()){
            return redirect('/register')->with('status',$validator->errors()->first());
        }

        $user = UsersModel::where('person_email', $request->email)->where('person_role', 'admin',)->first();

        if ($user) {
            return redirect('/register')->with('status',"Akun email sudah terdaftar!");
        }

        try{
            $pwd = Hash::make($request->password);
            $data = array(
                'person_name'            => $request->name,
                'person_password'        => $pwd,
                'person_email'           => $request->email,
                'person_phone'           => $request->phone,
                'person_register_by'     => 1,
                'person_role'            => 'admin',
                'subscribed'             => 'free',
                'person_status'          => "aktif",
            );
            UsersModel::create($data);
            return redirect()->route('login')->with('success', "Registrasi Sukses! Silahkan Login");
        }catch(Exception $e){
            //dd($e);
            return redirect('/register')->with('status',"Proses registrasi gagal!");
        }
        
        

    }
}
