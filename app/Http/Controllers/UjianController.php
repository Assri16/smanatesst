<?php

namespace App\Http\Controllers;

use App\ujian;
use App\namaujian;
use Illuminate\Http\Request;

class UjianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ujian = ujian::all();
        return view('ujian.index',compact('ujian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $namaujian = namaujian::all();
        return view('ujian.tambah',compact('namaujian'));

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
            'id_namaujian' => 'required',
            'ujian' => 'required',
            'kodeujian' => 'required',
            'waktu_pengerjaan' => 'required',
        ]);
        $ujian = new ujian;
        $ujian->id_namaujian = $request->id_namaujian;
        $ujian->ujian = $request->ujian;
        $ujian->kodeujian = $request->kodeujian;
        $ujian->waktu_pengerjaan = $request->waktu_pengerjaan;
        $ujian->is_open = $request->is_open;
        $ujian->save();

        return redirect('ujian')->with('flash_message', 'ujian Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ujian  $ujian
     * @return \Illuminate\Http\Response
     */
    public function show(ujian $ujian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ujian  $ujian
     * @return \Illuminate\Http\Response
     */
    public function edit(ujian $ujian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ujian  $ujian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ujian $ujian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ujian  $ujian
     * @return \Illuminate\Http\Response
     */
    public function destroy(ujian $ujian)
    {
        //
    }
}
