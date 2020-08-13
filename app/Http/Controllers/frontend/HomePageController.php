<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function menu(){
        $datas = DB::table('category')->distinct()->where('categoryID', '=', 0)->get();
        foreach ($datas as $key => $row) {
            $datas[$key]->subCategories = DB::table('category')->distinct()->where('categoryID', '=', $row->id)->get();
            foreach ($datas[$key]->subCategories as $k => $val) {
                // $datas[$key]->subCategories[$k]->childCategories = DB::table('pages')->distinct()->where('categoryID', '=', $val->id)->get();
                $datas[$key]->subCategories[$k]->childCategories = DB::table('category')->distinct()->where('categoryID', '=', $val->id)->get();
            }
        }

        return $datas;
    }
    
    public function getHomePage()
    {
        $datas = $this->menu();
        // dd($datas);
        return view('frontend.home.home', ['datas' => $datas]);
    }

    //測試用，借放一下看，看顯示productList的顯示
    public function getProductList()
    {
        $datas = $this->menu();
        return view('frontend.products.list');
    }
}
