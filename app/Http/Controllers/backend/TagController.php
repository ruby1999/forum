<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Product; //引用Model
use App\Tag;
use App\Post;
use Session; //引用會話(提示新建貼文成功)

class TagController extends Controller
{
    
    public function index()
    {
        //display a view of all of our Tag
        //it will also have a form to create a new tag

        $tags = Tag::all();
        return view('backend.tags.index')->withTags($tags);
    }

    public function store(Request $request)
    {
        //save a new tag and than redirect back to index
        $this->validate($request, array(
            'name' => 'required|max:255|unique:tags'
            ));

        $tag = new Tag;
        $tag->name = $request->name;
        $tag->save();

        Session::flash('success', '類別建立成功');

        return redirect()->route('tags.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //find the product in the database and save as a var
        $tag = Tag::find($id);

        // return the view and pass in the var we previously created
        return view('backend.tags.index');
    }

    public function update(Request $request, $id)
    {
        $tag = Tag::find($id);
        //validate in the data
            $this->validate($request, array(
                'name' => 'required|max:255|unique:tags'
            ));

        //save the data to the database
        $tag = Tag::find($id);

        $tag->name = $request ->name;

        $tag->save();

        // set flash data with success message
        Session::flash('success', '商品修改成功');

        // redirect with flash data to products.show
        return redirect()->route('tags.index', $tag->id);

    }

    public function destroy($id)
    {

        $tag = Tag::find($id);
        $tag->delete();

        Session::flash('success', '商品刪除成功');
        return redirect()->route('tags.index');
    }
}
