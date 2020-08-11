<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Query\Builder;

use App\Http\Requests;
use App\Post;
use App\Category; //引用Model
use App\Page;
use Session; //引用會話(提示新建貼文成功)
use Image; //要存入照片
use Storage;
use DB;

class PageController extends Controller
{
    // 抓NAVBAR
    public function menu(){
        $datas = [];

        // --NAV_BAR--
        $datas = DB::table('category')->distinct()->where('categoryID', '=', 0)->get();
        foreach ($datas as $key => $row) {
            $datas[$key]->subCategories = DB::table('category')->distinct()->where('categoryID', '=', $row->id)->get();
            foreach ($datas[$key]->subCategories as $k => $val) {
                $datas[$key]->subCategories[$k]->childCategories = DB::table('category')->distinct()->where('categoryID', '=', $val->id)->get();
            }
        }
        return $datas;
    }
    public function allPosts(){
        $data = $this->menu();
        

        // SELECT p.* FROM pages p WHERE categoryID IN (SELECT id FROM category WHERE categoryID = 1)
        $posts = DB::table('category')
                     ->select('id')
                     ->where('categoryID', '=', 1)
                     ->get();
                     
        // dd($posts);
        $select = DB::table('pages')
        ->select('*')
        ->whereIn('categoryID', array(4, 5))
        ->get();


        // foreach ($posts as $values) {
        //     $values->id = DB::table('category')->select('id')->where('categoryID', '=', 1)->get();   
        //     $select = DB::table('pages')
        //     ->select('*')
        //     ->whereIn('id', array(4, 5))
        //     ->where($values)
        //     ->get();
        // }
        dd($select);
        
        // $select = DB::table('pages')
        //     ->select('*')
        //     ->where($posts)
        //     ->get();
        
        // dd($select);

        // $users = DB::table('users')
        //             ->whereIn('id', array(1, 2, 3))->get();



        $categories = Category::all();
        $posts = $posts->get();
        
        //return a view and pass in the above variable
        return view('frontend.pages.posts', ['datas' => $data])->withPosts($posts)->withCategories($categories);
    }

    public function dailyPost(){
        $data = $this->menu();
        $posts = DB::table('pages')
                     ->select(DB::raw('*'))
                     ->where('categoryID', '=', 4);
        $categories = Category::all();
        $posts = $posts->get();
        
        //return a view and pass in the above variable
        return view('frontend.pages.posts', ['datas' => $data])->withPosts($posts)->withCategories($categories);
    }

    public function salePost(){
        $data = $this->menu();
        $posts = DB::table('pages')
                     ->select(DB::raw('*'))
                     ->where('categoryID', '=', 5);
        $categories = Category::all();
        $posts = $posts->get();
        
        // dd($posts);
        //return a view and pass in the above variable
        return view('frontend.pages.posts', ['datas' => $data])->withPosts($posts)->withCategories($categories);
    }

    // //顯示後端單一產品頁面
    // public function show($id)
    // {
    //     $post = Post::find($id);
    //     return view('frontend.posts.show')->withPost($post);
    // }
}
