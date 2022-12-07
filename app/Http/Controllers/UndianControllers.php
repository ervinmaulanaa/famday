<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PesertaModel;

class UndianControllers extends Controller
{
    public function gp(Request $request)
    {
        $data = new PesertaModel();
        $dtnya = $data->getWinner();
        return view('grandprize', compact('dtnya'));
    }

    public function dp(Request $request, $no = null)
    {
        $data = new PesertaModel();
        if ($no == 1) {
            $jml = 4;
        } else if ($no == 2) {
            $jml = 12;
        } else if ($no == 3) {
            $jml = 8;
        } else if ($no == 4) {
            $jml = 2;
        }
        $oke = $data->getWinnerMulti(100);
        return view('doorprize', compact('oke', 'no', 'jml'));
    }

    public function dp100(Request $request, $no = null)
    {
        $data = new PesertaModel();
        if ($no == 1) {
            $jml = 13;
        } else if ($no == 1) {
            $jml = 12;
        }
        $dtnya = $data->getWinnerMulti($jml);
        return view('doorprize100', compact('dtnya', 'no'));
    }

    public function setWinner(Request $request)
    {
        $data = PesertaModel::find($request->id);
        if ($request->no == 1) {
            $l = "Earbuds";
        } else if ($request->no == 2) {
            $l = "Smartwatch";
        } else if ($request->no == 3) {
            $l = "Tablet";
        } else if ($request->no == 4) {
            $l = "Sepeda";
        } else if ($request->no == 5) {
            $l = "Motor";
        }

        $data->undian = $l;
        $data->save();
    }
}
