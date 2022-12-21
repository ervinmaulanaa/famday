<?php

namespace App\Http\Controllers;

use App\Models\PayModel;
use Illuminate\Http\Request;

class PembayaranControllers extends Controller
{

    
    public function listpembayaran(request $request)
    {
        $session_id = $request->session()->get('sesi')[0]->person_id;
        $data = PayModel::where('id_person', $session_id)->first();
        $data ['data'] = PayModel::join("tbl_fd_user", function ($join) {
            $join->on("tbl_fd_user.person_id", "=", "tbl_fd_pays.id_person");
        })->get();
        return view('listpembayaran', $data);
    } 
}
