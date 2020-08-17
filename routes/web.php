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

    /*
    *  使用 Route::group 將位於同一名稱底下的網址群組化。
    *  ['prefix'=>'post'] 的 prefix 是關鍵字，用來指定前置字 post，
    *  因此，原本 route 中的 post 就可以移除或改成斜線。如此在管理上就能很清楚的看到，它們是一夥的。
    */

    //  前台   是抓pageController的那一頁
    Route::get('/dailyPost', 'frontend\PageController@dailyPost');
    Route::get('/salePost', 'frontend\PageController@salePost');
    Route::get('/allPost', 'frontend\PageController@allPosts');

    // 貼文管理
    Route::get('/posts', ['uses' => 'backend\PostController@index', 'as' => 'posts.index']);    //後台貼文管理
    Route::get('posts/create', ['uses' => 'backend\PostController@create', 'as' => 'posts.create']);
    // Route::get('posts/{post}', ['uses' => 'backend\PostController@show', 'as' => 'posts.show']);
    Route::post('posts', ['uses' => 'backend\PostController@store', 'as' => 'posts.store']);

    // index的button按下去走這支，對吧
    Route::get('posts/{post}/edit', ['uses' => 'backend\PostController@edit', 'as' => 'posts.edit']);
    Route::put('posts/{post}', ['uses' => 'backend\PostController@update', 'as' => 'posts.update']);

    // index的button按下去走這支，對吧
    Route::get('posts/{post}/destroy', ['uses' => 'backend\PostController@destroy', 'as' => 'posts.destroy']);
    // 因為沒有用form所以只能用get


    //後端產品管理
    Route::group(['prefix'=>'products'], function(){
        Route::get('/', ['uses' => 'backend\ProductController@index', 'as' => 'products.index']);
        Route::get('/create', ['uses' => 'backend\ProductController@create', 'as' => 'products.create']);
        Route::get('/{product}', ['uses' => 'backend\ProductController@show', 'as' => 'products.show']);
        Route::post('', ['uses' => 'backend\ProductController@store', 'as' => 'products.store']);
        Route::get('/{product}/edit', ['uses' => 'backend\ProductController@edit', 'as' => 'products.edit']);
        Route::put('/{product}', ['uses' => 'backend\ProductController@update', 'as' => 'products.update']);
        Route::delete('/{product}/destroy', ['uses' => 'backend\ProductController@destroy', 'as' => 'products.destroy']);
    });

    // Route::group(['prefix'=>'posts'], function(){
    //     // Route::get('/', ['uses' => 'backend\PostController@index', 'as' => 'posts.index']);
    //     Route::get('posts/create', ['uses' => 'backend\PostController@create', 'as' => 'posts.create']);
    //     Route::get('posts/{post}', ['uses' => 'backend\PostController@show', 'as' => 'posts.show']);
    //     Route::post('posts', ['uses' => 'backend\PostController@store', 'as' => 'posts.store']);
    //     Route::get('posts/{post}/edit', ['uses' => 'backend\PostController@edit', 'as' => 'posts.edit']);
    //     Route::put('posts/{post}', ['uses' => 'backend\PostController@update', 'as' => 'posts.update']);
    //     Route::delete('posts/{post}', ['uses' => 'backend\PostController@destroy', 'as' => 'posts.destroy']);
    // });


    Route::group(['middleware' => 'web'], function () {
        
        //後端類別管理
        Route::get('backend', 'backend\HomePageController@getHomePage');
        Route::resource('categories', 'backend\CategoryController', ['except'=>['create']]); //不要建立create的方法，或是把except改成only，只建立哪幾種方法
        Route::resource('tags', 'backend\TagController', ['except'=>['create']]);
        
        Route::get('/', 'frontend\HomePageController@getHomePage');
        Route::get('home', 'frontend\HomePageController@getHomePage');
        // :::::::   test show post category
        // Route::get('/allPost/{product}', ['uses' => 'frontend\PostController@show', 'as' => 'posts.show']);     //檢視詳細貼文(應該會拿掉)
        
    });


    Route::get('admin/blade', 'backend\testController@test'); //顯示後台模板
    Route::get('test', 'frontend\testController@test');       //改爆前台menu
    Route::resource('photo', 'PhotoController');


    // Route::get('test', function () {
    //     return App\Product::paginate(5);
    // });

    //後端產品管理 Route::resource('products','ProductController');
    /*Route::get('products/', ['uses' => 'backend\ProductController@index', 'as' => 'products.index']);
    Route::get('products/create', ['uses' => 'backend\ProductController@create', 'as' => 'products.create']);
    Route::get('products/{product}', ['uses' => 'backend\ProductController@show', 'as' => 'products.show']);
    Route::post('products', ['uses' => 'backend\ProductController@store', 'as' => 'products.store']);
    Route::get('products/{product}/edit', ['uses' => 'backend\ProductController@edit', 'as' => 'products.edit']);
    Route::put('products/{product}', ['uses' => 'backend\ProductController@update', 'as' => 'products.update']);
    Route::delete('products/{product}', ['uses' => 'backend\ProductController@destroy', 'as' => 'products.destroy']);*/
