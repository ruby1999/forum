<?php

namespace App\Http\Controllers;

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
    
    public function index()
    {
        //Create a variable and store all the blog products in it from the database
        $products = Product::all();

        //return a view and pass in the above variable
        //自動分頁的方法
        $products = Product::orderBy('id', 'asc')->paginate(5);
        return view('products.index')->withProducts($products);
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('products.create')->withProducts($categories)->withCategories($categories)->withTags($tags);
    }

    public function store(Request $request)
    {
        //dd($request); //檢視存入的$request
        //validate in the data(驗證要存入的資料，避免惡意攻擊)
        $this->validate($request, array(
            'name'          => 'required|max:255',
            'category_id'   => 'required|integer', //保護傳入非整數的數值
            'slug'          => 'required|alpha_dash|min:5|max:255|unique:products,slug',
            'introduction'  => 'required|max:1000',
            'description'   => 'required|max:1000',
            'price'         => 'required|integer'
        ));

        //store in the database(存入資料庫)
        $product = new Product; //要引用App\Product;

        $product->name = $request ->name;
        $product->category_id = $request ->category_id;
        $product->slug = $request->slug;
        $product->introduction = $request->introduction;
        $product->description = $request->description;
        $product->price = $request->price;
        //$product->body = Purifier::clean($request->body);
        //如果有用驗證html標籤的話
        
        //加入圖片(如果有要存入圖片的話)
        //$filename設定檔案名稱
        //要儲存的位置，在最外面的那個public資料夾/images資料夾
        //featured_img是controller裡面form設定的名稱
        if ($request->hasFile('featured_img')) {
            $image = $request->file('featured_img');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(800, 400)->save($location);
  
            $product->image = $filename;
          }

        $product->save();

        //同步處理
        $product->tags()->sync($request->tags, false);

        Session::flash('success', '貼文新增成功！');

        //redirect to another page(導向其他頁面)
        return redirect()->route('products.show', $product->id);

    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show')->withProduct($product);
    }

    public function edit($id)
    {
        //find the product in the database and save as a var
        $product = Product::find($id);
        //-----------
        //建立一個array，用迴圈將資料表category中的name存入陣列cats中資料表category中的id
        //把陣列cats傳給products.edit的view
        //-----------
        $categories = Category::all();
        $cats = array();
        foreach ($categories as $category) {
            $cats[$category->id] = $category->name;
        }

        //-----tags-----
        $tags = Tag::all();
        $tags2 = array();
        foreach ($tags as $tag) {
            $tags2[$tag->id] = $tag->name;
        }
        // return the view and pass in the var we previously created
        return view('products.edit')->withProduct($product)->withCategories($cats)->withTags($tags2);
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        //validate in the data
        if ($request->input('slug') == $product->slug){
            //如果input框中的資料和原本的資料一樣，不用驗證資料
            $this->validate($request, array(
                'name'          => 'required|max:255',
                'category_id'   => 'required|integer', //保護傳入非整數的數值
                'introduction'  => 'required|max:500',
                'description'   => 'required|max:500',
                'price'         => 'required|integer',
                'featured_img'  => 'image'
                //驗證是否為照片
            ));
        }else{
            $this->validate($request, array(
                'name'          => 'required|max:255',
                'category_id'   => 'required|integer', //保護傳入非整數的數值
                'slug'          => 'required|alpha_dash|min:5|max:255|unique:products,slug',
                'introduction'  => 'required|min:20|max:500',
                'description'   => 'required|min:20|max:500',
                'price'         => 'required|integer',
                'featured_img'  => 'image'
            ));

        }
        //save the data to the database
        //獲取新的數據($request ->title)存入資料庫中
        //$request ->title 要存入 $product->title 資料庫中的欄位
        //調用方法input取出叫做title的內容吋入資料庫
        $product = Product::find($id);

        $product->name = $request ->name;
        $product->category_id = $request ->category_id;
        $product->slug = $request->slug;
        $product->introduction = $request->introduction;
        $product->description = $request->description;
        $product->price = $request->price;

        if ($request->hasFile('featured_img')) {

            //add the new photo
            $image = $request->file('featured_img');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(800, 400)->save($location);
            $oldFileName = $product->image;

            //update the database
            $product->image = $filename;

            //delete the old photo
            Storage::delete($oldFileName);

          }

        $product->save();

        //-----tags-----
        //---同步處理
        if (isset($request->tags)) {
            $product->tags()->sync($request->tags);
        } else {
            $product->tags()->sync(array());
        }

        // set flash data with success message
        Session::flash('success', '商品建立成功');

        // redirect with flash data to products.show
        return redirect()->route('products.show', $product->id);

    }

    public function destroy($id)
    {

        $product = Product::find($id);
        $product->tags()->detach();
        Storage::delete($product->image);

        $product->delete();

        Session::flash('success', '商品刪除成功');
        return redirect()->route('products.index');
    }
}
