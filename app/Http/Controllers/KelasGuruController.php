<?php

namespace App\Http\Controllers;

use App\kelas_guru;
use App\kelas;
use App\mapel;
use Illuminate\Http\Request;

class KelasGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelasmapel = kelas::all();
        $mapelkelas = mapel::all();
        return view('kelas_guru.index',compact('kelasmapel','mapelkelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = kelas::all();
        $mapel = mapel::all();
        return view('kelas_guru.tambah',compact('kelas','mapel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, [
            'id_kelas' => 'required',
            'id_mapel' => 'required',
        ]);
         $kelasmapel = kelas_guru::create([
            'id_kelas' => $request->id_kelas,
            'id_mapel' => $request->id_mapel,
        ]);
        

        return redirect('kelas_mapel_guru')->with('flash_message', 'Mata Pelajaran Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\kelas_guru  $kelas_guru
     * @return \Illuminate\Http\Response
     */
    public function show(kelas_guru $kelas_guru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kelas_guru  $kelas_guru
     * @return \Illuminate\Http\Response
     */
    public function edit(kelas_guru $kelas_guru)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kelas_guru  $kelas_guru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kelas_guru $kelas_guru)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kelas_guru  $kelas_guru
     * @return \Illuminate\Http\Response
     */
    public function destroy(kelas_guru $kelas_guru)
    {
        //
    }
}
