<?php

namespace App\Http\Controllers;

use App\Models\PayModel;
use App\Models\UsersModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PayControllers extends Controller
{
    public function pay()
    {
        return view('pay');
    }

    public function payGold()
    {
        return view('payGold');
    }

    public function congratulation()
    {
        return view('congratulation');
    }

    public function addpay(request $request)
    {
        $karakter = '123456789ABCDEFGHI';
        $shuffle  = str_shuffle($karakter);

        $request->validate([
            'payimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . $request->file('payimage')->getClientOriginalExtension();

        $request->file('payimage')->move(public_path('pembayaran'), $imageName);

        $session_id = $request->session()->get('sesi')[0]->person_id;
        
        //dd($user);
        $no_pembelian       = "P00-" . $shuffle;
        $no_rekening       = $request->input('no_rekening');
        $id_person          = $session_id;
        $typesubscribe     = $request->input('typesubscribe');
        $durasi             = $request->input('durasi');
        $total_bayar        = $request->input('total_bayar');
        $status             = $request->input('status');
        $path               = $imageName;

        $save = new PayModel;

        $save->no_pembelian = $no_pembelian;
        $save->no_rekening = $no_rekening;
        $save->id_person = $id_person;
        $save->typesubscribe = $typesubscribe;
        $save->durasi = $durasi;
        $save->total_bayar = $total_bayar;
        $save->status = $status;
        $save->path = $path;

        $save->save();
        
        $datanya = UsersModel::where('person_id', $session_id)->update([
                'subscribed' => 'waiting',
            ]);
        return redirect('congratulation')->with('status', 'Bukti Pembayaran Sukses');
    }

    public function unsubscribe(Request $request)
    {
        $session_id = $request->session()->get('sesi')[0]->person_id;
        $data = PayModel::where('id_person', $session_id)->update([
                'status' => 'free',
            ]);

            $datanya = UsersModel::where('person_id', $session_id)->update([
                'subscribed' => 'free',
            ]);
            $this->middleware('akses.admin');
            $request->session()->flush();
            return redirect('/')->with('success', 'Berhasil Unsubscribe');
    }

    public function verifikasi($id)
    {
        $data['datapay'] = PayModel::join("tbl_fd_user", function ($join) {
            $join->on("tbl_fd_user.person_id", "=", "tbl_fd_pays.id_person");
        })->where('tbl_fd_pays.no_pembelian', $id)->get();
        return view('verifikasi', $data);
    }

    public function verifikasipay(request $request, )
    {

        $data = PayModel::where('no_pembelian', $request->input('no_pembelian'))
            ->update([
                'status' => $request->input('status'),
            ]);

        //dd($request->input('person_id'));
        
        $datanya = UsersModel::where('person_id', $request->input('id_person'))
            ->update([
                'subscribed' => $request->input('typesubscribe'),
            ]);

        return redirect('listpembayaran')->with('success', 'Bukti Pembayaran Sukses');
    }
    
}


