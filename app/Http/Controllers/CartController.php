<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Orders;
use App\OrderedProducts;
use Cart;
use Illuminate\Support\Facades\Redirect;
class CartController extends Controller
{
    public function show_cart()
    {

        return view('user/shop/cart');
    }
    public function checkout(){
        return view('user/shop/checkout');
    }
    public function placeOrder(Request $request){
        if(Cart::total()>0){
            $order = new  Orders();
            $order->first_name = $request->first_name;
            $order->last_name = $request->last_name;
            $order->email = $request->email;
            $order->phone = $request->phone;
            $order->city = $request->city;
            $order->total = Cart::total();
            $order->address = $request->address;
            if($order->save()){
                foreach (Cart::content() as $key => $value) {
                    $orderProducts = new OrderedProducts();
                    $orderProducts->product_id = $value->id;
                    $orderProducts->quantity = $value->qty;
                    $orderProducts->price = $value->price;
                    $orderProducts->product_name = $value->name;
                    $orderProducts->order_id= $order->id;
                    $orderProducts->save();
                }
                Cart::destroy();
                // Session::flash('order-message', 'Thanks for your message we will ping back'); 
              return  Redirect::to('checkout')->with('order-message', 'Thanks for your message we will ping back.');
            }
        }
        
       return Redirect::to('checkout')->with('error', 'No product in cart.');;
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

