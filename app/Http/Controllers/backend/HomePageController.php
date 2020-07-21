<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function getHomePage()
    {
        return view('backend.home.home');
    }
}
