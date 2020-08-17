<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Session; //引用會話(提示新建貼文成功)
use Image; //要存入照片
use Storage;

class PageController extends Controller
{
    public function index()
    {
        $datas = DB::table('category')->distinct()->where('categoryID', '=', 0)->get();
        dd($datas);
        // $data = json_decode($datas);
        // $id = array_column($data, 'name');
        // dd($id);
        // foreach($data as $key => $value){
        //     if(is_array($value)){
        //     getValue($value);    
        //     }else{
        //     echo $value."<br>";
        //     }
        // }
        // foreach ($datas as $key => $row) {
        //     $b = DB::table('category')->distinct()->where('categoryID', '=', $row->id)->get();
        //     if($b != []) {
        //         $datas[$key]->subCategories = $b;
        //     }
            
        //     foreach ($datas[$key]->subCategories as $k => $val) {
        //         $c = DB::table('category')->distinct()->where('categoryID', '=', $val->id)->get();
        //         if (count($c) != 0) {
        //             $datas[$key]->subCategories[$k]->childCategories = $c;
        //         }
        //     }
        // }

        // var_dump($datas);
        // return $datas;
        return view('backend.page.index', compact('datas'));
    }
}
