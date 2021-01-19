<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\Redirect;
use DB;
class CategoryController extends Controller
{
    public function show_category()
    {
    	return view('admin.category.add-category');
    }
    public function store_category(Request $request)
    {
    	$category=new Category();
        $category->category_name=$request->category_name;
        $category->category_slug=$request->category_slug;
        $category->category_description=$request->category_description;
        $category->category_status=$request->category_status;
        $category->save();
        return response()->json([
                'success' => true,
                'message' => 'category Added successfully'
            ]);
    }
    public function all_category()
    {
    	$all_category=Category::get();
    	return view('admin.category.show-category',compact('all_category'));
    }
    public function unactive_category($category_id)
    {
    	Category::where('category_id',$category_id)->update(['category_status' => 0]);
        return Redirect::to('show-category');

    }
    public function active_category($category_id)
    {
    	Category::where('category_id',$category_id)->update(['category_status' => 1]);
        return Redirect::to('show-category');

    }
    public function edit_category($category_id)
    {
        $category_info=Category::find($category_id);
        return view('admin.category.update-category',compact('category_info'));
    }
    public function update_category(Request $request,$category_id)
    {
    	$category= Category::find($category_id);
        $category->category_name=$request->category_name;
        $category->category_slug=$request->category_slug;
        $category->category_description=$request->category_description;
        $category->category_status=$request->category_status;
        $category->save();
    	return Redirect::to('show-category');
    }
    public function destroy($category_id)
    {
        Category::where('category_id',$category_id)->delete();
        return response()->json([
                'success' => 'Recod has been deleted']);
    }
}
