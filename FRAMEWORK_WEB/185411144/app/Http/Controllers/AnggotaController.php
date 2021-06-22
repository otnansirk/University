<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $anggota = Anggota::orderBy('id', 'DESC')->paginate(5);
    return view('anggota.index', compact('anggota'));
    }

    public function create()
    {
        return view('anggota.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $this->validate($request, [
            'nama'      => 'required',
            'user_id'   => 'required',
            'jenis_kel' => 'required',
            'e_mail'    => 'required|email',
            'telepon'   => 'required',
            'foto'      => 'required',
        ]);

        $foto = $request->file('foto');
        //membaca extensi file gambar
        $ext = $request->file('foto')->getClientOriginalExtension();
        //memberi file menggunakan no anggota
        $namaFile = $request->get('user_id').'.'.$ext;
        //menyimpan ke folder public/foto/...
        $request->file('foto')->move('foto', $namaFile);

        $anggota = new Anggota($request->all());

        $anggota->foto = $namaFile;
        $anggota->save();

        return redirect()->route('anggota.index')
        ->with('success',
        'Menambah Anggota telah berhasil disimpan');
    }

    public function show(string $id)
    {
        $data = Anggota::findOrFail($id);
        return view('anggota.show', compact('data'));
    }

    public function edit(string $id)
    {
        $data = Anggota::findOrFail($id);
        return view('anggota.edit', compact('data'));
    }
    
    public function update(Request $request, string $id)
    {
        $anggota = Anggota::findOrFail($id);


        $foto = $request->file('foto');
        //membaca extensi file gambar
        $ext = $request->file('foto')->getClientOriginalExtension();
        //memberi file menggunakan no anggota
        $namaFile = $request->get('user_id').'.'.$ext;
        //menyimpan ke folder public/foto/...
        $request->file('foto')->move('foto', $namaFile);

        $anggota->update($request->all());
        $anggota->foto = $namaFile;
        $anggota->save();

        return redirect()->route('anggota.index')
        ->with('success',
        'Menambah Anggota telah berhasil disimpan');


        return redirect()->route('anggota.index');
    }


}
