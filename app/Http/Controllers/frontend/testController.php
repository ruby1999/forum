<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Test;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\This;
use Session; //引用會話(提示新建貼文成功)

class testController extends Controller
{

    public function menu(){
        $datas = DB::table('category')->distinct()->where('categoryID', '=', 0)->get();
        foreach ($datas as $key => $row) {
            $datas[$key]->subCategories = DB::table('category')->distinct()->where('categoryID', '=', $row->id)->get();
            foreach ($datas[$key]->subCategories as $k => $val) {
                $datas[$key]->subCategories[$k]->childCategories = DB::table('category')->distinct()->where('categoryID', '=', $val->id)->get();
            }
        }
        return $datas;
    }
    
    public function index()
    {     

        $datas = $this->menu();
        return view('frontend.partials._nav', ['datas' => $datas]);

        // dd($datas);
        // return view('frontend.partials._nav', ['datas' => $datas]);
        // return view('frontend.partials._nav')->withData($datas);
    }

    public function test()
    {
       
        $datas = $this->menu();   
        return view('frontend.home.home', ['datas' => $datas]);
    }


}
