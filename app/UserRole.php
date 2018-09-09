<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    public function getUserObject()
    	{
    		return $this->belongsToMany(User::class)->using(UserRole::class);
    	}
}
