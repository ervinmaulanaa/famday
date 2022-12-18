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
        $person_id          = $session_id;
        $typesubscribe     = $request->input('typesubscribe');
        $durasi             = $request->input('durasi');
        $total_bayar        = $request->input('total_bayar');
        $status             = $request->input('status');
        $path               = $imageName;

        $save = new PayModel;

        $save->no_pembelian = $no_pembelian;
        $save->no_rekening = $no_rekening;
        $save->person_id = $person_id;
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

    public function listpembayaran()
    {
        return view('listpembayaran');
    } 
}


