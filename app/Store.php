<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    public function Tags()
    {
    	return $this->belongsToMany('App\Tags');
    }
}
