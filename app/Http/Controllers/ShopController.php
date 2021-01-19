<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Customer;
use App\Comment;
class ShopController extends Controller
{
    public function all_shop()
    {
    	$showcategory=Category::where('category_status',1)->get();
    	$showproduct=Product::where('product_status',1)->get();
    	return view('user/shop/shop',compact('showcategory','showproduct'));
    }
    public function single_shop($product_id)
    {
    	$product_single=Product::join('categories','products.category_id','=','categories.category_id')
    	->join('tabs','products.tab_id','=','tabs.tab_id')
    	->select('products.*','categories.category_name','tabs.tab_name')
    	->where('products.product_id',$product_id)
    	->where('products.product_status',1)->first();
        $showcategory=Category::where('category_status',1)->get();
    	return view('user/shop/single-shop',compact('product_single','showcategory'));
    }
    public function index()
    {
        $latproduct=Product::paginate(8);
        return view('user/home',compact('latproduct'));
    }
}
