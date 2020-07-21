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
    Route::get('productList', 'ProductController@showList');

    //管理貼文(增刪改查)
    Route::resource('products','ProductController');

    //Category
    Route::resource('categories', 'CategoryController', ['except'=>['create']]); //不要建立create的方法，或是把except改成only，只建立哪幾種方法
});
