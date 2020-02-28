<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;
use App\Dosen;
class MahasiswaController extends Controller
{
    public function index()
    {
        $mhs=mahasiswa::with('dosen')->get();
        return view('mahasiswa.index',compact('mhs'));
    }


    public function create()
    {
        $dosen= Dosen::all();
        return view('mahasiswa.create',compact('dosen'));
    }
    public function store(Request $request)
    {
        $mhs=new mahasiswa();
        $mhs->nama= $request->nama;
        $mhs->nim= $request->nim;
        $mhs->id_dosen= $request->id_dosen;
        $mhs->save();
        return redirect()->route('mahasiswa.index')
        ->with(['message'=>'mahasiswa berhasil dibuat']);
    }


    public function show($id)
    {
        $mhs= Mahasiswa::findOrFail($id);
        return view('mahasiswa.show',compact('mhs'));
    }

    public function edit($id)
    {
        $dosen= Dosen::all();
        $mhs= Mahasiswa::findOrFail($id);
        return view('mahasiswa.edit',compact('mhs','dosen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mhs=mahasiswa::findOrFail($id);
        $mhs->nama= $request->nama;
        $mhs->nim= $request->nim;
        $mhs->id_dosen= $request->id_dosen;
        $mhs->save();
        return redirect()->route('mahasiswa.index')
                        ->with(['message'=>'Data berhasil dibuat']);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $mhs=mahasiswa::findOrFail($id)->delete();
        return redirect()->route('mahasiswa.index')
                        ->with(['message'=>'Data berhasil dihapus']);
    }
}

