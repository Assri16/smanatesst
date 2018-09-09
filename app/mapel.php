<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mapel extends Model
{
    protected $fillable = ['nm_mapel'];

    public function kelasmapel()
    {
        return $this->belongsToMany('App\kelas');
    }
}
