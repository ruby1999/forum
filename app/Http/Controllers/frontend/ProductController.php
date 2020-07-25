<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Query\Builder;

use App\Http\Requests;
use App\Product;
use App\Category; //引用Model
use App\Tag;
use Session; //引用會話(提示新建貼文成功)
use Image; //要存入照片
use Storage;

class ProductController extends Controller
{
    //顯示前端所有產品的頁面 
    public function showList()
    {
        $products = Product::all();
        $categories = Category::all();
        $tags = Tag::all();

        //return a view and pass in the above variable
        //自動分頁的方法
        $products = Product::orderBy('id', 'asc')->paginate(5);
        return view('frontend.products.list')->withProducts($products)->withCategories($categories)->withTags($tags);
    }

    public function drink()
    {
        $products = Product::all();
        $categories = Category::all();
        $tags = Tag::all();

        //return a view and pass in the above variable
        //自動分頁的方法
        $products = Product::orderBy('id', 'asc')->paginate(5);
        return view('frontend.products.list')->withProducts($products)->withCategories($categories)->withTags($tags);
    }

    public function tart()
    {
        $products = Product::all();
        $categories = Category::all();
        $tags = Tag::all();

        //return a view and pass in the above variable
        //自動分頁的方法
        $products = Product::orderBy('id', 'asc')->paginate(5);
        return view('frontend.products.list')->withProducts($products)->withCategories($categories)->withTags($tags);
    }

    public function cheeseCake()
    {
        $products = Product::all();
        $categories = Category::all();
        $tags = Tag::all();

        //return a view and pass in the above variable
        //自動分頁的方法
        $products = Product::orderBy('id', 'asc')->paginate(5);
        return view('frontend.products.list')->withProducts($products)->withCategories($categories)->withTags($tags);
    }

    public function chiffon()
    {
        $products = Product::all();
        $categories = Category::all();
        $tags = Tag::all();

        //return a view and pass in the above variable
        //自動分頁的方法
        $products = Product::orderBy('id', 'asc')->paginate(5);
        return view('frontend.products.list')->withProducts($products)->withCategories($categories)->withTags($tags);
    }
    public function mirrorMousse()
    {
        $products = Product::all();
        $categories = Category::all();
        $tags = Tag::all();

        //return a view and pass in the above variable
        //自動分頁的方法
        $products = Product::orderBy('id', 'asc')->paginate(5);
        return view('frontend.products.list')->withProducts($products)->withCategories($categories)->withTags($tags);
    }
}
