<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoreMedia extends Model
{
    public function Stores()
    {
    	return $this->belongsToMany('App\Store', 'store_id');
    }

}
