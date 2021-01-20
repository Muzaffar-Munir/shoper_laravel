<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/','ShopController@index');
Route::get('shop','ShopController@all_shop');
Route::get('single-shop/{product_id}','ShopController@single_shop');
/*Cart Route*/

Route::post('add-cart/{product_id}','CartController@add_cart');

Route::GET('show-cart/','CartController@show_cart');
Route::GET('checkout/','CartController@checkout');
Route::post('place-order/','CartController@placeOrder');

Route::get('remove-cart/{id}','CartController@remove_cart');
Route::get('update-cart/','CartController@update_cart');

/*customer route*/
Route::get('login','CustomerController@login');
Route::post('login','CustomerController@login');
Route::post('signup','CustomerController@store');
Route::get('logout','CustomerController@logout');
Route::get('account','CustomerController@account');
Route::get('user-edit/{customer_id}','CustomerController@edit_user');
Route::post('user-update','CustomerController@update_user');
/*send mail*/
Route::get('contact','UserHomeContrller@contact');
Route::post('contactsend','UserHomeContrller@contactstore');
/*comment route*/
Route::post('/comment/store/{product}', 'CommentController@store');
/*search route*/
Route::get('/search/', 'UserHomeContrller@search')->name('search');
/*Shop route*/
Route::get('shoper','Keepercontroller@login_shop');
Route::post('shoper-store','Keepercontroller@login_store');
Route::get('shoplogout','Keepercontroller@shoplogout');



















/*product routes*/
Route::get('add-product','ProductController@show_product');
Route::POST('add-product','ProductController@store_product');
Route::get('show-product','ProductController@all_product');
Route::get('/unactive-product/{product_id}','ProductController@unactive_product');
Route::get('/active-product/{product_id}','ProductController@active_product');
Route::get('edit_product/{product_id}','ProductController@edit_product');
Route::post('update_product/{product_id}','ProductController@update_product');
Route::delete('/product/{product_id}', 'ProductController@destroy');
/*category route*/
Route::get('add-category','CategoryController@show_category');
Route::POST('add-category','CategoryController@store_category');
Route::get('show-category','CategoryController@all_category');
Route::get('/unactive-status/{category_id}','CategoryController@unactive_category');
Route::get('/active-status/{category_id}','CategoryController@active_category');
Route::get('edit_category/{category_id}','CategoryController@edit_category');
Route::post('update_category/{category_id}','CategoryController@update_category');
Route::delete('/category/{category_id}', 'CategoryController@destroy');
/*tab route*/
Route::get('add-tab','TabController@show_tab');
Route::POST('add-tab','TabController@store_tab');
Route::get('show-tab','TabController@all_tab');
Route::get('/unactive-tab/{tab_id}','TabController@unactive_tab');
Route::get('/active-tab/{tab_id}','TabController@active_tab');
Route::get('edit_tab/{tab_id}','TabController@edit_tab');
Route::post('update_tab/{tab_id}','TabController@update_tab');
Route::delete('/tab/{tab_id}','TabController@destroy');
/*Admin Add customer*/
Route::get('add-customer','CustomerController@add_customer');
Route::post('admin-customer','CustomerController@admin_customer');
Route::get('show-customer','CustomerController@show_customer');
Route::get('edit_customer/{customer_id}','CustomerController@edit_customer');
Route::post('update_customer/{customer_id}','CustomerController@update_customer');
Route::delete('/customer/{customer_id}','CustomerController@customer_destroy');
/*Admin Add Shop*/


Route::get('add-shop','Keepercontroller@add_shop');
Route::get('orders','Keepercontroller@orders');
Route::post('admin-shop','Keepercontroller@admin_shop');
Route::get('show-shop','Keepercontroller@show_shop');
Route::get('edit_shop/{id}','Keepercontroller@edit_shops');
Route::post('update_shop/{id}','Keepercontroller@update_shop');
Route::delete('/shop/{id}','Keepercontroller@shop_destroy');








