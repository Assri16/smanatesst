<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ujian_soal extends Model
{
    protected $fillable = ['id_ujian','id_soal'];

    public function soal()
{
    return $this->belongsToMany('App\banksoal','ujian_soal','id_ujian','id_soal');
}
}
