<?php

namespace App\Http\Controllers;

use App\kelas_guru;
use App\kelas;
use App\mapel;
use DB;
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
        $kelasmapels = DB::table('kelas_gurus')->join('kelas','kelas_gurus.id_kelas','=','kelas.id')
        ->join('mapels','kelas_gurus.id_mapel','=','mapels.id')
        ->select('kelas.*','mapels.*')->get();
        $mapelkelas = mapel::all();
        $kelasguru = kelas_guru::all();
        return view('kelas_guru.index',compact('kelasmapels','mapelkelas','kelasguru'));
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
