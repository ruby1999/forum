<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['middleware' => 'web'], function () {
    
    //後端產品管理 Route::resource('products','ProductController');
    Route::get('products/', ['uses' => 'backend\ProductController@index', 'as' => 'products.index']);
    Route::get('products/create', ['uses' => 'backend\ProductController@create', 'as' => 'products.create']);
    Route::get('products/{product}', ['uses' => 'backend\ProductController@show', 'as' => 'products.show']);
    Route::post('products', ['uses' => 'backend\ProductController@store', 'as' => 'products.store']);
	Route::get('products/{product}/edit', ['uses' => 'backend\ProductController@edit', 'as' => 'products.edit']);
	Route::put('products/{product}', ['uses' => 'backend\ProductController@update', 'as' => 'products.update']);
	Route::delete('products/{product}', ['uses' => 'backend\ProductController@destroy', 'as' => 'products.destroy']);
    
    //後端類別管理
    Route::resource('categories', 'CategoryController', ['except'=>['create']]); //不要建立create的方法，或是把except改成only，只建立哪幾種方法
    
    
    Route::get('/', 'frontend\HomePageController@getHomePage');
    Route::get('home', 'frontend\HomePageController@getHomePage');
    Route::get('productList', 'frontend\ProductController@showList');


});
