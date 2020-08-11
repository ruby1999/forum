<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function getHomePage()
    {
        $datas = DB::table('tests')->distinct()->where('categoryID', '=', 0)->get();
        foreach ($datas as $key => $row) {

            $datas[$key]->subCategories = DB::table('tests')->distinct()->where('categoryID', '=', $row->id)->get();
            foreach ($datas[$key]->subCategories as $k => $val) {
                $datas[$key]->subCategories[$k]->childCategories = DB::table('tests')->distinct()->where('categoryID', '=', $val->id)->get();
            }
        }
        // dd($datas);
        return view('frontend.home.home', ['datas' => $datas]);
    }

    //測試用，借放一下看，看顯示productList的顯示
    public function getProductList()
    {
        return view('frontend.products.list');
    }
}
