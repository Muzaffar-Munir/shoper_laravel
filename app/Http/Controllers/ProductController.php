<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;
use App\Category;
use App\Tabs;
use Session;
Session_start();
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function show_product()
    {
        $info_tabs=Tabs::get();
        $info_category=Category::get();
        return view('admin.product.add-product',compact('info_tabs','info_category'));
    }
    public function store_product(Request $request)
    {
        $product=new Product();
        $product->product_name=$request->product_name;
        $product->category_id=$request->product_category;
        $product->tab_id=$request->product_tabs;
        $product->shop_id=Session::get('id');
        $product->product_price=$request->product_price;
        $product->product_ram=$request->product_ram;
        $product->product_rom=$request->product_rom;
        $product->product_fcam=$request->product_fcam;
        $product->product_bcam=$request->product_bcam;
        $product->product_slug=$request->product_slug;
        $product->product_short_description=$request->product_short_description;
        $product->product_long_description=$request->product_long_description;
        $product->product_status=$request->product_status;
        if($file =$request->hasFile('product_image')) {
            $photo = $request->file('product_image')->getClientOriginalName();
            $destination = base_path() . '/public/uploads/product/';
            $request->file('product_image')->move($destination, $photo);
           $product['product_image'] = $photo;
        }
        else
        {
            $product['product_image']='noimage.png';
        }
        if($request->product_status==1)
        {
           $product['product_status']=$request->product_status;
        }
        else
        {
           $product['product_status']=0;
        }
        $product->save();
          return response()->json([
              'success' => true,
                  'message' => 'Product Added successfully'
           ]);
    }
    public function all_product()
    {
        $all_products=Product::join('categories','products.category_id','=','categories.category_id')->join('tabs','products.tab_id','=','tabs.tab_id')->join('shops','products.shop_id','=','shops.id')->where('shop_id',Session::get('id'))->get();
    	return view('admin/product/show-product',compact('all_products'));
    }
    public function unactive_product($product_id)
    {
        Product::where('product_id',$product_id)->update(['product_status' => 0]);
        return Redirect::to('show-product');
    }
    public function active_product($product_id)
    {
        Product::where('product_id',$product_id)->update(['product_status' => 1]);
        return Redirect::to('show-product');
    }
    public function edit_product($product_id)
    {
        $info_tabs=Tabs::get();
        $info_category=Category::get();
        $product_info=Product::find($product_id);
        return view('admin.product.update-product',compact('product_info','info_tabs','info_category'));
    }
    public function update_product(Request $request,$product_id)
    {
        $product= Product::find($product_id);
        $product->product_name=$request->product_name;
        $product->category_id=$request->product_category;
        $product->tab_id=$request->product_tabs;
        $product->product_price=$request->product_price;
        $product->product_ram=$request->product_ram;
        $product->product_rom=$request->product_rom;
        $product->product_fcam=$request->product_fcam;
        $product->product_bcam=$request->product_bcam;
        $product->product_slug=$request->product_slug;
        $product->product_short_description=$request->product_short_description;
        $product->product_long_description=$request->product_long_description;
        $product->product_status=$request->product_status;
        $product->save();
        return Redirect::to('show-product');
    }
    public function destroy($product_id)
    {
        $news = Product::findOrFail($product_id);
        $image_path = public_path().'/public/uploads/product/'.$news->product_image;
        if(file_exists($image_path)) // check if the image indeed exists
        unlink($image_path);
        $news->delete();
        return response()->json([
            'success' => 'Recod has been deleted']);
    }
}
