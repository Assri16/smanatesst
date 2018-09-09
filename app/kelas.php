<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    protected $fillable = ['nm_kelas'];

    public function mapelkelas()
    {
        return $this->belongsToMany(mapel::class);
    }

}
