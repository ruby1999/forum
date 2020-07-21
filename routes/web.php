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
    Route::get('products/', ['uses' => 'ProductController@index', 'as' => 'products.index']);
    Route::get('products/create', ['uses' => 'ProductController@create', 'as' => 'products.create']);
    Route::get('products/{product}', ['uses' => 'ProductController@show', 'as' => 'products.show']);
    Route::post('products', ['uses' => 'ProductController@store', 'as' => 'products.store']);
	Route::get('products/{product}/edit', ['uses' => 'ProductController@edit', 'as' => 'products.edit']);
	Route::put('products/{product}', ['uses' => 'ProductController@update', 'as' => 'products.update']);
	Route::delete('products/{product}', ['uses' => 'ProductController@destroy', 'as' => 'products.destroy']);
    
    //後端類別管理
    Route::resource('categories', 'CategoryController', ['except'=>['create']]); //不要建立create的方法，或是把except改成only，只建立哪幾種方法
    
    
    Route::get('/', 'HomePageController@getHomePage');
    Route::get('home', 'HomePageController@getHomePage');
    Route::get('productList', 'ProductController@showList');


});
