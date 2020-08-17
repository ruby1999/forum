<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\Category; //引用Model
use Session; //引用會話(提示新建貼文成功)
use Image; //要存入照片
use Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $categories = Category::all();
        $posts = Post::orderBy('id', 'asc')->paginate(5);

        return view('backend.posts.index')->withPosts($posts)->withCategories($categories); // ->withPage($pages);
    }

    public function create()
    {
        $cateList = Category::all()->pluck('name', 'id');
        $pages = DB::table('posts')->simplePaginate(15);

        return view('backend.posts.create')->withCategories($cateList)->withPage($pages);
    }

    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request ->title;
        $post->category_id = $request ->category_id;
        $post->introduction = $request->introduction;
        $post->description = $request->description;
        
        if ($request->hasFile('featured_img')) {
            $image = $request->file('featured_img');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('asset/images/' . $filename);
            Image::make($image)->resize(500, 500, function ($constraint){
                $constraint->aspectRatio();
            })->save($location);
  
            $post->image = $filename;
        }
        
        $categories = Category::all();
        $post->save();
        $posts = Post::all();

        Session::flash('success', '貼文新增成功！');

        return view('backend.posts.index')->withPosts($posts)->withCategories($categories);
    }

    public function edit($id)  // 進到 backend/edit.blade 的 view
    {
        $post = Post::find($id);
        $categories = Category::all();
        $cats = array();
        
        foreach ($categories as $category) {
            $cats[$category->id] = $category->name;
        }

        return view('backend.posts.edit')->withPost($post)->withCategories($cats);
    }

    public function update(Request $request, $id)
    {

        $post = Post::find($id);

        $post->title = $request ->title;
        $post->category_id = $request ->category_id;
        $post->introduction = $request->introduction;
        $post->description = $request->description;

        $str_introuction=strip_tags($post->introduction);

        if ($request->hasFile('featured_img')) {

            $image = $request->file('featured_img');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('asset/images/' . $filename);
            Image::make($image)->resize(500, 500, function ($constraint){
                $constraint->aspectRatio();
            })->save($location);
            $oldFileName = $post->image;

            $post->image = $filename;

            Storage::delete($oldFileName);
          }

        $post->save();

        Session::flash('success', '貼文更新成功');

        $categories = Category::all();
        $posts = Post::all();

        return view('backend.posts.index')->withPosts($posts)->withCategories($categories);
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        Storage::delete($post->image);

        $post->delete();

        Session::flash('success', '   貼文刪除成功');
        return redirect()->route('posts.index');
    }
}
