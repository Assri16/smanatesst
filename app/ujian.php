<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ujian extends Model
{
    protected $fillable = ['id','id_namaujian','ujian','kodeujian','waktupengerjaan'];

    public function soal()
{
    return $this->belongsToMany('App\banksoal','ujian_soal','id_ujian','id_soal');
}

    public function namaujian()
    {
        return $this->belongsTo('App\namaujian','id_namaujian','id');
    }

}
