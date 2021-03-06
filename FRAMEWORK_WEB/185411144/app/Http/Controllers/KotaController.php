<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\Propinsi;
use Illuminate\Http\Request;

class KotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kota = Kota::orderBy('id', 'DESC')->paginate(5);
        return view('kota.index', compact('kota'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $propinsi = Propinsi::all();
        return view('kota.create', compact('propinsi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kota = new Kota;
        $kota->nama_kota   = $request->nama_kota;
        $kota->id_propinsi = $request->id_propinsi;
        $kota->save();

        return redirect()->route('kota.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kota = Kota::find($id);
        $propinsi = Propinsi::all();
        return view('kota.edit', compact('kota', 'propinsi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kota = Kota::find($id);
        $kota->nama_kota   = $request->nama_kota;
        $kota->id_propinsi = $request->id_propinsi;
        $kota->save();

        return redirect()->route('kota.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kota::destroy($id);
        return redirect()->route('kota.index');
    }
}
