<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Test;
use Illuminate\Support\Facades\DB;
use Session; //引用會話(提示新建貼文成功)

class testController extends Controller
{
    
    public function index()
    {
        return view('backend.basic-table');
    }

    public function test()
    {
        $datas = DB::table('tests')->distinct()->where('categoryID', '=', 0)->get();
        foreach ($datas as $key => $row) {
            $datas[$key]->subCategories = DB::table('tests')->distinct()->where('categoryID', '=', $row->id)->get();
            foreach ($datas[$key]->subCategories as $k => $val) {
                $datas[$key]->subCategories[$k]->childCategories = DB::table('tests')->distinct()->where('categoryID', '=', $val->id)->get();
            }
        }

        return view('frontend.home.home', ['datas' => $datas]);
    }


}
