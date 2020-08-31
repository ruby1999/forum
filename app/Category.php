<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    public $table = 'category';  
    // 自定義資料表名稱，不然預設一直存入categories的tables
    public $timestamps = false;
    // 默認情況下，laravel期望表中的created_at和Updated_at列。通過將其設置為false，它將覆蓋默認設置。

    
    //-----下面之前的------------
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
