<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class banksoal extends Model
{
    protected $fillable = ['soal','id_lvsoal','image'];

    public function lvsoal()
    {
        return $this->belongsTo('App\lvsoal','id_lvsoal','id');
    }
    public function jawaban()
    {
        return $this->hasMany('App\jawaban_soal','id_soal','id');
    }

    public function ujian()
    {
        return $this->belongsToMany(ujian::class);
    }
}
