<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ujian extends Model
{
    protected $fillable = ['id','id_namaujian','ujian','kodeujian','waktupengerjaan'];

    public function roles()
    {
        return $this->belongsToMany('App\banksoal');
    }

    public function namaujian()
    {
        return $this->belongsTo('App\namaujian','id_namaujian','id');
    }

}
