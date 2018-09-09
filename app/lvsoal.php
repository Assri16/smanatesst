<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lvsoal extends Model
{
    protected $fillable = ['lvsoal'];

    public function banksoal()
    {
        return $this->hasOne('App\banksoal');
    }
}
