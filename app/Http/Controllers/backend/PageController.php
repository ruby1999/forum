<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\Page;
use App\Category; //引用Model
use Session; //引用會話(提示新建貼文成功)
use Image; //要存入照片
use Storage;

class PageController extends Controller
{
    public function index()
    {
        $datas = DB::table('category')->distinct()->where('categoryID', '=', 0)->get();
        // dd($datas);

        $cats = DB::table('category')
                     ->select(DB::raw('*'))->get();

        foreach ($datas as $key => $row) {
            $datas[$key]->subCategories = DB::table('category')->distinct()->where('categoryID', '=', $row->id)->get();
            foreach ($datas[$key]->subCategories as $k => $val) {
                $datas[$key]->subCategories[$k]->childCategories = DB::table('category')->distinct()->where('categoryID', '=', $val->id)->get();
            }
        }
        // dd(isset($datas));
        // dd($datas);
        return view('backend.page.index', compact('datas', 'cats'));
    }

    public function subIndex(Request $request)
    {
        // 整理出對的資料傳過去就好了在那邊撞
        // 先傳入會要傳入的參數 $request ->id
        $datas = DB::table('category')->distinct()->where('categoryID', '=', $request ->id)->get();
        // var_dump($datas);
        // dd($datas);

        $cats = DB::table('category')
                     ->select(DB::raw('*'))->get();

        foreach ($datas as $key => $row) {
            $datas[$key]->subCategories = DB::table('category')->distinct()->where('categoryID', '=', $row->id)->get();
            foreach ($datas[$key]->subCategories as $k => $val) {
                $datas[$key]->subCategories[$k]->childCategories = DB::table('category')->distinct()->where('categoryID', '=', $val->id)->get();
            }
        }
        // dd(isset($datas));
        // dd($datas);
        return view('backend.page.index', compact('datas', 'cats'));

    }

    public function showPages()
    {
        $pages = Page::all();
        $categories = Category::all();
        $pages = Page::orderBy('id', 'asc')->paginate(5);
        // dd("123");
        return view('backend.page.page', compact('pages', 'categories'));
        // return view('backend.page.page')->withPage($pages)->withCategories($categories);
    }


}
