<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Session; //引用會話(提示新建貼文成功)

class CategoryController extends Controller
{
    
    public function index()
    {
        //display a view of all of our categrocy
        //it will also have a form to create a new categrocy

        $categories = Category::all();
        return view('backend.categories.index')->withCategories($categories);
    }

    public function store(Request $request)
    {
        //save a new category and than redirect back to index
        $this->validate($request, array(
            'name' => 'required|max:255|unique:categories'
            ));

        $category = new Category;
        $category->name = $request->name;
        $category->save();

        Session::flash('success', '類別建立成功');

        return redirect()->route('backend.categories.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //find the product in the database and save as a var
        $category = Category::find($id);

        // return the view and pass in the var we previously created
        return view('backend.categories.index');
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        //validate in the data
            $this->validate($request, array(
                'name'          => 'required|max:255|unique:categories'
            ));

        //save the data to the database
        //獲取新的數據($request ->title)存入資料庫中
        //$request ->title 要存入 $product->title 資料庫中的欄位
        //調用方法input取出叫做title的內容吋入資料庫
        $category = Category::find($id);

        $category->name = $request ->name;

        $category->save();

        // set flash data with success message
        Session::flash('success', '商品修改成功');

        // redirect with flash data to products.show
        return redirect()->route('backend.categories.index', $category->id);

    }

    public function destroy($id)
    {

        $category = Category::find($id);
        $category->delete();

        Session::flash('success', '商品刪除成功');
        return redirect()->route('backend.categories.index');
    }
}
