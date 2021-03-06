<?php

namespace App\Http\Controllers;

use App\Models\Propinsi;
use Illuminate\Http\Request;

class PropinsiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $propinsi = Propinsi::orderBy('id', 'DESC')->paginate(5);
        return view('propinsi.index', compact('propinsi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('propinsi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $propinsi = new Propinsi;
        $propinsi->nama_propinsi = $request->nama_propinsi;
        $propinsi->save();

        return redirect()->route('propinsi.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $propinsi = Propinsi::find($id);
        return view('propinsi.edit', compact('propinsi'));
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
        $propinsi = Propinsi::find($id);
        $propinsi->nama_propinsi = $request->nama_propinsi;
        $propinsi->save();

        return redirect()->route('propinsi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Propinsi::destroy($id);
        return redirect()->route('propinsi.index');
    }
}
