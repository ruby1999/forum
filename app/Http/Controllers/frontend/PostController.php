<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Query\Builder;

use App\Http\Requests;
use App\Post;
use App\Category; //引用Model
use Session; //引用會話(提示新建貼文成功)
use Image; //要存入照片
use Storage;
use DB;

class PostController extends Controller
{

    // public $datas = [];

    // public function AllPost()
    // {


    //     $posts = Post::all();
    //     $categories = Category::all();

    //     //return a view and pass in the above variable
    //     $posts = Post::orderBy('id', 'asc')->paginate(5);
    //     return view('frontend.posts.list', ['datas' => $datas])->withPosts($posts)->withCategories($categories);
    // }

    // public function DailyPost()
    // {
    //     $datas = DB::table('category')->distinct()->where('categoryID', '=', 0)->get();
    //     foreach ($datas as $key => $row) {
    //         $datas[$key]->subCategories = DB::table('category')->distinct()->where('categoryID', '=', $row->id)->get();
    //         foreach ($datas[$key]->subCategories as $k => $val) {
    //             $datas[$key]->subCategories[$k]->childCategories = DB::table('category')->distinct()->where('categoryID', '=', $val->id)->get();
    //         }
    //     }
        
    //     $posts = DB::table('posts')
    //                  ->select(DB::raw('*'))
    //                  ->where('category_id', '=', 1);
        
    //     $categories = Category::all();
    //     $posts = $posts->get();

    //     //return a view and pass in the above variable
    //     return view('frontend.posts.list', ['datas' => $datas])->withPosts($posts)->withCategories($categories);
    // }

    // public function SalePost()
    // {
    //     $datas = DB::table('category')->distinct()->where('categoryID', '=', 0)->get();
    //     foreach ($datas as $key => $row) {
    //         $datas[$key]->subCategories = DB::table('category')->distinct()->where('categoryID', '=', $row->id)->get();
    //         foreach ($datas[$key]->subCategories as $k => $val) {
    //             $datas[$key]->subCategories[$k]->childCategories = DB::table('category')->distinct()->where('categoryID', '=', $val->id)->get();
    //         }
    //     }
        
    //     $posts = DB::table('posts')
    //                  ->select(DB::raw('*'))
    //                  ->where('category_id', '=', 2);
        
    //     $categories = Category::all();
    //     $posts = $posts->get();

    //     //return a view and pass in the above variable
    //     return view('frontend.posts.list', ['datas' => $datas])->withPosts($posts)->withCategories($categories);
    // }

    //顯示後端單一產品頁面
    // public function show($id)
    // {
    //     $post = Post::find($id);
    //     return view('frontend.posts.show')->withPost($post);
    // }
}
