<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;
class Cartcontroller extends Controller
{
    public function show_cart()
    {

        return view('user/shop/cart');
    }

    public function add_cart($product_id)
    {

        $pro=Product::find($product_id);
         Cart::add(['id'=>$pro->product_id,'name'=>$pro->product_name,'qty'=>1,'price'=>$pro->product_price,'weight'=>0,'options' => ['image' => $pro->product_image]]);
         //Cart::destroy();
    	return view('user/shop/cart');
    }
    public function remove_cart($id)
    {
        Cart::remove($id);
        return view('user/shop/cart');
    }
   public function update_cart(Request $request)
    {
        $qty=$request->rowId;
        $rowId=$request->rowId;
        Cart::update($rowId,$qty);
        return back()->with("update succefully");
    }

}

