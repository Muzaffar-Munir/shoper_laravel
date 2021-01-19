<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\contactmail;
use Mail;
use App\Product;
use App\Category;
class UserHomeContrller extends Controller
{
    public function contact()
    {
        return view('user/contactus');
    }
    /*send mail*/
    public function contactstore(Request $request)
    {
    	$data = $request->validate([
            'txt_name' => 'required|max:20',
            'txt_email' => 'required',
            'txt_message'=>'required|max:225',
        ]);
        Mail::to('mcsm-f18-045@superior.edu.pk')->send(new contactmail($data));

    }
    /*search frontend*/
    public function search(Request $request)
    {
        // Get the search value from the request
        $search = $request->search;
        $showproduct = Product::query()
            ->where('product_name', 'LIKE', "%{$search}%")
            ->orWhere('product_price', 'LIKE', "%{$search}%")
            ->get();
        $showcategory=Category::where('category_status',1)->get();
        return view('user/shop/shop', compact('showproduct','showcategory'));
    }
}
