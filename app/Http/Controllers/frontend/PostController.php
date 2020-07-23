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

class PostController extends Controller
{
    
    public function AllPost()
    {
        $posts = Post::all();
        $categories = Category::all();

        //return a view and pass in the above variable
        $posts = Post::orderBy('id', 'asc')->paginate(5);
        return view('frontend.posts.list')->withPosts($posts)->withCategories($categories);
    }

    public function SalesPost()
    {
        $posts = Post::all();
        $categories = Category::all();

        //return a view and pass in the above variable
        $posts = Post::orderBy('id', 'asc')->paginate(5);
        return view('frontend.posts.list')->withPosts($posts)->withCategories($categories);
    }

    public function DailyPost()
    {
        $posts = Post::all();
        $categories = Category::all();

        //return a view and pass in the above variable
        $posts = Post::orderBy('id', 'asc')->paginate(5);
        return view('frontend.posts.list')->withPosts($posts)->withCategories($categories);
    }

    //顯示後端單一產品頁面
    public function show($id)
    {
        $post = Post::find($id);
        return view('frontend.posts.show')->withPost($post);
    }
}
