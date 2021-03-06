<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Illuminate\Support\Facades\DB;
use Session; //引用會話(提示新建貼文成功)

class CategoryController extends Controller
{

    public function create()
    {
        return view('backend.category.create');
    }

    public function store(Request $request)
    {
        $category = new Category;
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->categoryID = 0 ;
        $category->save();
        

        Session::flash('success', '類別建立成功');

        $datas = DB::table('category')->distinct()->where('categoryID', '=', 0)->get();
        // dd($datas);

        foreach ($datas as $key => $row) {
            $datas[$key]->subCategories = DB::table('category')->distinct()->where('categoryID', '=', $row->id)->get();
            foreach ($datas[$key]->subCategories as $k => $val) {
                $datas[$key]->subCategories[$k]->childCategories = DB::table('category')->distinct()->where('categoryID', '=', $val->id)->get();
            }
        }

        return redirect()->route('page.index', compact('datas', 'cats'));
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
        return redirect()->route('categories.index', $category->id);

    }

    public function destroy($id)
    {

        $category = Category::find($id);
        $category->delete();

        Session::flash('success', '商品刪除成功');
        return redirect()->route('categories.index');
    }
}
