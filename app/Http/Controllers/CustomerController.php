<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;
use App\Customer;
use Session;
Session_start();
use Illuminate\Support\Facades\Redirect;
class CustomerController extends Controller
{
	public function login(Request $request)
	{
        $method = $request->method();
        // dd($method);
        if($method=="POST"){
            $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            
            // return redirect()->intended('dashboard');
            dd('matched');
        } else{
            dd('not matched');
        }
            // dd($request->all());
        } else{
            return view('user/account/login');
        }
		
	}
	public function store(Request $request)
	{
		$validatedData = $request->validate([
            'customer_name' => 'required|max:255|unique:customers,customer_name',
            'customer_email' => 'required|unique:customers,customer_email',
            'customer_password'=>'required|min:8',
            'customer_phone' => 'required|numeric',
        ]);
        $customer=new Customer();
        $customer->customer_name=$request->customer_name;
        $customer->customer_phone=$request->customer_phone;
        $customer->customer_email=$request->customer_email;
        $customer->password= md5($request->customer_password);
        $customer_id=$customer->save();
        Session::put('customer_id',$customer_id);
        Session::put('customer_name',$request->customer_name);
        Session::put('customer_email',$request->customer_email);
        Session::put('customer_phone',$request->customer_phone);
        return view('user/account/login');

	}
    public function logout()
    {
        Session::flush();
        return Redirect::to('/');
    }

    /*admin add customer*/
    public function add_customer()
    {
        return view('admin/customer/add-customer');
    }
    public function admin_customer(Request $request)
    {
        $customer=new Customer();
        $customer->customer_name=$request->customer_name;
        $customer->customer_phone=$request->customer_phone;
        $customer->customer_email=$request->customer_email;
        $customer->password= md5($request->customer_password);
        $customer->save();
          return response()->json([
              'success' => true,
                  'message' => 'customer Added successfully'
           ]);
    }
    public function show_customer()
    {
        $show_customer=Customer::get();
        return view('admin/customer/show-customer',compact('show_customer'));
    }
    public function edit_customer($customer_id)
    {

        $customer_info=Customer::find($customer_id);
        return view('admin/customer/update-customer',compact('customer_info'));
    }
    public function update_customer(Request $request,$customer_id)
    {
        $customer= Customer::find($customer_id);
        $customer->customer_name=$request->customer_name;
        $customer->customer_phone=$request->customer_phone;
        $customer->customer_email=$request->customer_email;
        $customer->password= md5($request->customer_password);
        $customer->save();
        return Redirect::to('show-customer');
    }
    public function customer_destroy($customer_id)
    {
        $news = Customer::findOrFail($customer_id);
        $news->delete();
        return response()->json([
            'success' => 'Recod has been deleted']);
    }

    /*user account front end */
    public function account()
    {
        return view('user/account/acount');
    }
    public function edit_user($customer_id)
    {
        $customer= Customer::find(Session::get('customer_id'));
        dd($customer);
        return view('user/account/user-update');
    }
    public function update_user(Request $request)
    {
        $customer_id=$request->customer_id;
        $customer= Customer::find($customer_id);
        $customer->customer_name=$request->customer_name;
        $customer->customer_phone=$request->customer_phone;
        $customer->customer_email=$request->customer_email;
        $customer->save();
        return Redirect::to('user-edit');
    }


}
