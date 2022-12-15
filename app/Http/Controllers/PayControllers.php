<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


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

        

        return redirect('congratulation')->with('status', 'Bukti Pembayaran Sukses');
    }
}


