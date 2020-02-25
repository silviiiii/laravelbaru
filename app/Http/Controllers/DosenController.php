<?php

namespace App\Http\Controllers;

use App\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dosen=dosen::all();
        return view('dosen.index',compact('dosen'));
    }
    public function create(){
        return view('dosen.create');
    }
    public function store(Request $request){
        $dosen = new dosen();
        $dosen->nama=$request->nama;
        $dosen->nipd=$request->nipd;
        $dosen->save();
        return redirect()->route('dosen.index')
            ->with(['message'=>'dosen berhasil dibuat']);
    }
    public function show(Dosen $dosen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dosen=dosen::findOrFail($id);
        return view('dosen.show',compact('dosen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dosen=dosen::findOrFail($id);
        $dosen->nama=$request->nama;
        $dosen->nipd=$request->nipd;
        $dosen->save();
        return redirect()->route('dosen.index')
            ->with(['message'=>'dosen berhasil di edit']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dosen=dosen::findOrFail($id)->delete();
        return redirect()->route('dosen.index')
            ->with(['message'=>'dosen berhasil di hapus']);
    }
}
