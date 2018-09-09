<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\mapel;
use Auth;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use DB;
use  Input;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mapel = mapel::all();
        return view('mapel.index',compact('mapel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mapel.tambah');
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
            'nm_mapel' => 'required',
        ]);
         $mapel = mapel::create([
            'nm_mapel' => $request->nm_mapel,
        ]);
        

        return redirect('mapel')->with('flash_message', 'Mata Pelajaran Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function show(mapel $mapel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $mapel = mapel::findOrFail($id);
        return view('mapel.edit',compact('mapel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request, [
           'nm_mapel' => 'required',
        ]);
        $requestData = $request->all();
        $mapel = mapel::findOrFail($id);
        $mapel->update($requestData);
 

        return redirect('mapel')->with('flash_message', 'Mata Pelajaran Berhasil Di Ubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function destroy(mapel $mapel)
    {
        //
    }
}
