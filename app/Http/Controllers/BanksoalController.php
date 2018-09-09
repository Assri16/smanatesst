<?php

namespace App\Http\Controllers;

use App\banksoal;
use App\lvsoal;
use App\jawaban_soal;
use DB;
use Illuminate\Http\Request;
use App\Helpers\Fungsi;

class BanksoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $soal = banksoal::all();
        $lvsoal = lvsoal::all();
        return view('banksoal.index',compact('soal','lvsoal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $soal = banksoal::all();
        $lvsoal = lvsoal::all();
        return view('banksoal.tambah',compact('soal','lvsoal'));
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
            'soal' => 'required',
            'id_lvsoal' => 'required',
        ]);
        $soal = new banksoal;
        $soal->soal = $request->soal;
        $soal->id_lvsoal = $request->id_lvsoal;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = time().'.'.$file->getClientOrginalExtension();
            $destinationPath = public_path('/images');
            $file->move($destinationPath, $fileName);
            $soal->image = $fileName;
        }
        $soal->save();

        return redirect('soal')->with('flash_message', 'Soal Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\banksoal  $banksoal
     * @return \Illuminate\Http\Response
     */
    public function show(banksoal $banksoal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\banksoal  $banksoal
     * @return \Illuminate\Http\Response
     */
    public function edit(banksoal $banksoal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\banksoal  $banksoal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, banksoal $banksoal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\banksoal  $banksoal
     * @return \Illuminate\Http\Response
     */
    public function destroy(banksoal $banksoal)
    {
        //
    }

    public function addjawaban($soalid,Fungsi $fungsi)
    {
        $banksoal = banksoal::findOrFail($soalid);
        return view('jawaban.jawaban', compact('banksoal','fungsi'));
    }

    public function createjawaban(Request $request)
    {
        $this->validate($request, [
            'jawaban' => 'required',
            'is_benar' => 'required',
        ]);
        $jawaban = new jawaban_soal;
        $jawaban->id_soal = $request->id_soal;
        $jawaban->jawaban = $request->jawaban;
        $jawaban->is_benar = $request->is_benar;
        $jawaban->save();
        return redirect()->back();

    }

}
