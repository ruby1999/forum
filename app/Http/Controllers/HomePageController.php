<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function getHomePage()
    {
        return view('frontend.home.home');
    }

    //測試用，借放一下看，看顯示productList的顯示
    public function getProductList()
    {
        return view('frontend.products.list');
    }
}
