<?php

namespace App\Http\Controllers;

use App\jawaban_soal;
use App\banksoal;
use Illuminate\Http\Request;

class JawabanSoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $soal = banksoal::all();
        return view('banksoal.jawaban');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $soal = banksoal::all()
        return view('banksoal.jawaban');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\jawaban_soal  $jawaban_soal
     * @return \Illuminate\Http\Response
     */
    public function show(jawaban_soal $jawaban_soal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\jawaban_soal  $jawaban_soal
     * @return \Illuminate\Http\Response
     */
    public function edit(jawaban_soal $jawaban_soal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\jawaban_soal  $jawaban_soal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jawaban_soal $jawaban_soal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\jawaban_soal  $jawaban_soal
     * @return \Illuminate\Http\Response
     */
    public function destroy(jawaban_soal $jawaban_soal)
    {
        //
    }
}
