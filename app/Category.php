<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // public function Products()
    // {
    // 	return $this->hasMany('App\Product');
    // }
    
    // public function posts()
    // {
    // 	return $this->hasMany('App\Post');
    // }

    //-----上面之前的------------

    public function pages()
    {
    	return $this->hasMany('App\Page',  'categoryID');
    }

}
