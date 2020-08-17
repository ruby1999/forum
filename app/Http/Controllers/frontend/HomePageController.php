<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function menu(){
        $datas = DB::table('category')->distinct()->where('categoryID', '=', 0)->get();
        // $a = DB::table('category')->distinct()->where('categoryID', '=', 0)->get();
        // dd($datas);
        // if($datas->subCategories != []) {
        //     dd($datas->subCategories);
        //     $datas->subCategories = $datas;
        // }

        // dd($datas);
        foreach ($datas as $key => $row) {
            // $datas[$key]->subCategories = DB::table('category')->distinct()->where('categoryID', '=', $row->id)->get();
            $b = DB::table('category')->distinct()->where('categoryID', '=', $row->id)->get();
            if($b != []) {
                $datas[$key]->subCategories = $b;
            }
            
            foreach ($datas[$key]->subCategories as $k => $val) {
                // $datas[$key]->subCategories[$k]->childCategories = DB::table('pages')->distinct()->where('categoryID', '=', $val->id)->get();
                // $datas[$key]->subCategories[$k]->childCategories = DB::table('category')->distinct()->where('categoryID', '=', $val->id)->get();
                $c = DB::table('category')->distinct()->where('categoryID', '=', $val->id)->get();
                if (count($c) != 0) {
                    $datas[$key]->subCategories[$k]->childCategories = $c;
                }
                
            }
        }

        return $datas;
    }
    
    public function getHomePage()
    {
        $datas = $this->menu();
        return view('frontend.home.home', ['datas' => $datas]);
    }

    //測試用，借放一下看，看顯示productList的顯示
    public function getProductList()
    {
        $datas = $this->menu();
        return view('frontend.products.list');
    }
}
