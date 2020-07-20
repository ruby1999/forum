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
    
    Route::get('/', 'HomePageController@getHomePage');
    Route::get('home', 'HomePageController@getHomePage');
    Route::get('productList', 'HomePageController@getProductList');

    //管理貼文(增刪改查)
    Route::resource('products','ProductController');
});
