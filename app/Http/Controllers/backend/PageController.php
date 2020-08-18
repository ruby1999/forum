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

        $cats = DB::table('category')
                     ->select(DB::raw('*'))->get();
        // dd($cats);

        return view('backend.page.index', compact('datas', 'cats'));
    }
}
