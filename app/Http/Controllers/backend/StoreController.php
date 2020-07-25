<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Query\Builder;

use App\Http\Requests;
use App\Store;
use App\Category; //引用Model
use App\Tag;
use Session; //引用會話(提示新建貼文成功)
use Image; //要存入照片
use Storage;

class StoreController extends Controller
{
    //Store的Controller不用新增也才三間店而已，到時候都先Seed進去
    public function index()
    {
        //Create a variable and store all the blog stores in it from the database
        $stores = Store::all();
    }
    
    //顯示後端單一產品頁面
    public function show($id)
    {
        $store = Store::find($id);
        return view('backend.stores.show')->withStore($store);
    }

    public function edit($id)
    {
        //find the store in the database and save as a var
        $store = Store::find($id);

        //-----tags-----
        $tags = Tag::all();
        $tags2 = array();
        foreach ($tags as $tag) {
            $tags2[$tag->id] = $tag->name;
        }
        // return the view and pass in the var we previously created
        return view('backend.stores.edit')->withstore($store)->withTags($tags2);
    }

    public function update(Request $request, $id)
    {
        $store = Store::find($id);
        //validate in the data
        
        $this->validate($request, array(
            'name'          => 'required|max:255',
            'slug'   => 'required|integer', //保護傳入非整數的數值
            'tag'          => 'required|alpha_dash|min:5|max:255|unique:stores,slug',
            'introduction'  => 'required|min:20|max:1000',
            'description'   => 'required|min:20|max:1000',
            'address'         => 'required|max:200',
            'featured_img'  => 'image',
            

        ));

        
        //save the data to the database
        //獲取新的數據($request ->title)存入資料庫中
        //$request ->title 要存入 $store->title 資料庫中的欄位
        //調用方法input取出叫做title的內容吋入資料庫
        $store = store::find($id);

        $store->name = $request ->name;
        $store->category_id = $request ->category_id;
        $store->slug = $request->slug;
        $store->introduction = $request->introduction;
        $store->description = $request->description;
        $store->price = $request->price;

        if ($request->hasFile('featured_img')) {

            //add the new photo
            $image = $request->file('featured_img');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('asset/images/' . $filename);
            Image::make($image)->resize(500, 500, function ($constraint){
                // 等比例縮放：若兩個寬高比例與原圖不符的話，會以最短邊去做等比例縮放
                $constraint->aspectRatio();
            })->save($location);
            $oldFileName = $store->image;

            //update the database
            $store->image = $filename;

            //delete the old photo
            Storage::delete($oldFileName);

          }

        $store->save();

        //-----tags-----
        //---同步處理
        if (isset($request->tags)) {
            $store->tags()->sync($request->tags);
        } else {
            $store->tags()->sync(array());
        }

        // set flash data with success message
        Session::flash('success', '商品建立成功');

        // redirect with flash data to stores.show
        return redirect()->route('stores.show', $store->id);

    }

    public function destroy($id)
    {

        $store = store::find($id);
        $store->tags()->detach();
        Storage::delete($store->image);

        $store->delete();

        Session::flash('success', '商品刪除成功');
        return redirect()->route('stores.index');
    }
}
