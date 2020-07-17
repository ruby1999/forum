<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function Products()
    {
    	return $this->belongsToMany('App\Product');
    }

    public function Stores()
    {
    	return $this->belongsToMany('App\Stores');
    }
}
