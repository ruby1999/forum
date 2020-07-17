<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public function Category()
    {
    	return $this->belongsTo('App\Category');
    }

    public function Tags()
    {
    	return $this->belongsToMany('App\Tags');
    }
    
}
