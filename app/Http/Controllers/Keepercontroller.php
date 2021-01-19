<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use Session;
Session_start();
use Illuminate\Support\Facades\Redirect;
class Keepercontroller extends Controller
{
    public function add_shop()
    {
        return view('admin/shop/add-shop');
    }
    public function admin_shop(Request $request)
    {
        $shop=new Shop();
        $shop->shop_name=$request->shop_name;
        $shop->shop_email=$request->shop_email;
		$shop->shop_password= md5($request->shop_password);
        $shop->shop_phone=$request->shop_phone;
        $shop->shop_no=$request->shop_no;
        $shop->addresss=$request->addresss;
        $shop->shop_city=$request->shop_city;
        $shop->save();
          return response()->json([
              'success' => true,
                  'message' => 'Shop Added successfully'
           ]);
    }
    public function show_shop()
    {
        $show_shop=Shop::get();
        return view('admin/shop/show-shop',compact('show_shop'));
    }
    public function edit_shops($id)
    {
        $shop_info=Shop::find($id);
        return view('admin/shop/update-shop',compact('shop_info'));
    }
    public function update_shop(Request $request,$id)
    {
        $shop= Shop::find($id);
        $shop->shop_name=$request->shop_name;
        $shop->shop_email=$request->shop_email;
		$shop->shop_password= md5($request->shop_password);
        $shop->shop_phone=$request->shop_phone;
        $shop->shop_no=$request->shop_no;
        $shop->addresss=$request->addresss;
        $shop->shop_city=$request->shop_city;
        $shop->save();
        return Redirect::to('show-shop');
    }
    public function shop_destroy($id)
    {
        $news = Shop::findOrFail($id);
        $news->delete();
        return response()->json([
            'success' => 'Recod has been deleted']);
    }

    /*shoper login*/
    public function login_shop()
    {
        return view('admin/login/shop-login');
    }
    public function login_store(Request $request)
    {
        $shop_email=$request->shop_email;
        $shop_password=md5($request->shop_password);
        $result=Shop::where('shop_email',$shop_email)->where('shop_password',$shop_password)->first();

        if($result)
        {
            Session::put('id',$result->id);
            Session::put('shop_name',$result->shop_name);
            return Redirect::to('add-shop');
        }
        else
        {
            Session::put('message','email and password invalide');
            return Redirect::to('shoper');
        }
    }
    public function shoplogout()
    {
        Session::flush();
        return Redirect::to('shoper');
    }
}
