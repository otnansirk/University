<?php

namespace App\Http\Controllers;

use App\Models\SegiEmpat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;

class SegiEmpatController extends Controller
{
    public function inputSegiEmpat()
    {
        return View::make('segi-empat.inputSegiEmpat');
    }

    public function hasil(Request $request)
    {
        $segiEmpat = new SegiEmpat;
        //aturan validasi
        $rules=[
            'panjang'=>'required|numeric',
            'lebar'=>'required|numeric'
        ];

        $validator = Validator::make( $request->all(), $rules);
    //cek validasi
        if ($validator->fails())
        {
            //jika salah kembalikan ke form untuk diperbaiki
            return View::make('segi-empat.inputSegiEmpat',
            compact('segiEmpat'))->withErrors($validator);
        }else{ 
            $segiEmpat->panjang=$request->panjang;
            $segiEmpat->lebar = $request->lebar;

            return View::make('segi-empat.hasil',compact('segiEmpat'));
        }
    }
}
