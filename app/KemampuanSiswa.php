<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KemampuanSiswa extends Model
{
    protected $fillable = [
		'kemampuan_siswa'
	];
    public function user()
    {
        return $this->hasOne('App\User');
    }
}
