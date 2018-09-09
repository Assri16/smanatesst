<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jawaban_soal extends Model
{
    protected $fillable = ['id_soal','jawaban','is_benar'];

    public function banksoal()
    {
        return $this->belongsTo('App\banksoal');
    }
}
