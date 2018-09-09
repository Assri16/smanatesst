<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class namaujian extends Model
{
    protected $fillable = ['namaujian'];

    public function ujians()
    {
        return $this->hasOne('App\ujian');
    }
}
