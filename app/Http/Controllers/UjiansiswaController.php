<?php

namespace App\Http\Controllers;

use App\ujiansiswa;
use App\ujian;
use Illuminate\Http\Request;
use DB;

class UjiansiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $ujiansiswa;
    protected $ujian;

    public function __construct(ujiansiswa $ujiansiswa, ujian $ujian)
    {
        $this->ujiansiswa = $ujiansiswa;
        $this->ujian = $ujian;
    }

    public function index()
    {
        return view('ujiansiswa.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\ujiansiswa  $ujiansiswa
     * @return \Illuminate\Http\Response
     */
    public function show(ujiansiswa $ujiansiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ujiansiswa  $ujiansiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(ujiansiswa $ujiansiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ujiansiswa  $ujiansiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ujiansiswa $ujiansiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ujiansiswa  $ujiansiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(ujiansiswa $ujiansiswa)
    {
        //
    }
     public function do_ikut_ujian(Request $request)
    {
        $k =  $this->ujian
                  ->where('kodeujian', '=', $request->kodeujian)
                  ->where('is_open', '=', 1)
                  ->get();
         if(count($k)>0){
            $data_ujian_user = ['id_ujian' => $k->id];
            $this->ujiansiswa->create($data_ujian_user);
            return 1;
        }else{
            return 0;//kode ujian tdk ditemukan
        }
    }
}
