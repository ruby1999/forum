<?php

namespace App\Http\Controllers\backend;

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
    // public function index()
    // {
    //     //Create a variable and store all the blog posts in it from the database
    //     $posts = Post::all();
    //     $categories = Category::all();
    //     $introduction =$posts->introduction;
    //     $str_introuction=strip_tags($posts->$introduction);

    //     //return a view and pass in the above variable
    //     //自動分頁的方法
    //     $posts = Post::orderBy('id', 'asc')->paginate(5);
    //     return view('backend.posts.index')->withPosts($posts)->withCategories($categories)->withData($str_introuction);
    // }


    public function index()
    {
        //Create a variable and store all the blog posts in it from the database
        $posts = Post::all();
        $categories = Category::all();
        //return a view and pass in the above variable
        //自動分頁的方法
        $posts = Post::orderBy('id', 'asc')->paginate(5);
        return view('backend.posts.index')->withPosts($posts)->withCategories($categories);
    }

    public function create()
    {
        $categories = Category::all();
        return view('backend.posts.create')->withCategories($categories);
    }

    public function store(Request $request)
    {
        //dd($request); //檢視存入的$request
        //validate in the data(驗證要存入的資料，避免惡意攻擊)
        $this->validate($request, array(
            'title'          => 'required|max:255',
            'category_id'   => 'required|integer', //保護傳入非整數的數值
            'introduction'  => 'required|max:1000',
            'description'   => 'required|max:1000'
        ));

        //store in the database(存入資料庫)
        $post = new Post; //要引用App\Post;

        $post->title = $request ->title;
        $post->category_id = $request ->category_id;
        $post->introduction = $request->introduction;
        $post->description = $request->description;
        
        //加入圖片(如果有要存入圖片的話)
        //$filename設定檔案名稱
        //要儲存的位置，在最外面的那個public資料夾asset/images資料夾
        //featured_img是controller裡面form設定的名稱
        if ($request->hasFile('featured_img')) {
            $image = $request->file('featured_img');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('asset/images/' . $filename);
            Image::make($image)->resize(500, 500, function ($constraint){
                // 等比例縮放：若兩個寬高比例與原圖不符的話，會以最短邊去做等比例縮放
                $constraint->aspectRatio();
            })->save($location);
  
            $post->image = $filename;
          }

        $post->save();

        Session::flash('success', '貼文新增成功！');

        //redirect to another page(導向其他頁面)
        return redirect()->route('posts.show', $post->id);

    }


    //顯示後端單一產品頁面
    public function show($id)
    {
        $post = Post::find($id);
        return view('backend.posts.show')->withPost($post);
    }

    public function edit($id)
    {
        //find the post in the database and save as a var
        $post = Post::find($id);
        //-----------
        //建立一個array，用迴圈將資料表category中的name存入陣列cats中資料表category中的id
        //把陣列cats傳給posts.edit的view
        //-----------
        $categories = Category::all();
        $cats = array();
        foreach ($categories as $category) {
            $cats[$category->id] = $category->name;
        }

        // return the view and pass in the var we previously created
        return view('backend.posts.edit')->withPost($post)->withCategories($cats);
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        //validate in the data
        $this->validate($request, array(
            'title'          => 'required|max:255',
            'category_id'   => 'required|integer', //保護傳入非整數的數值
            'introduction'  => 'required|max:1000',
            'description'   => 'required|max:1000'
        ));
        //save the data to the database
        //獲取新的數據($request ->title)存入資料庫中
        //$request ->title 要存入 $post->title 資料庫中的欄位
        //調用方法input取出叫做title的內容吋入資料庫
        $post = Post::find($id);

        $post->title = $request ->title;
        $post->category_id = $request ->category_id;
        $post->introduction = $request->introduction;
        $post->description = $request->description;

        $str_introuction=strip_tags($post->introduction);

        if ($request->hasFile('featured_img')) {

            //add the new photo
            $image = $request->file('featured_img');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('asset/images/' . $filename);
            Image::make($image)->resize(500, 500, function ($constraint){
                // 等比例縮放：若兩個寬高比例與原圖不符的話，會以最短邊去做等比例縮放
                $constraint->aspectRatio();
            })->save($location);

            $oldFileName = $post->image;

            //update the database
            $post->image = $filename;

            //delete the old photo
            Storage::delete($oldFileName);

          }

        $post->save();

        // set flash data with success message
        Session::flash('success', '商品建立成功');

        // redirect with flash data to posts.show
        return redirect()->route('posts.show', $post->id)->withData($str_introuction);

    }

    public function destroy($id)
    {

        $post = Post::find($id);
        Storage::delete($post->image);

        $post->delete();

        Session::flash('success', '商品刪除成功');
        return redirect()->route('posts.index');
    }
}
