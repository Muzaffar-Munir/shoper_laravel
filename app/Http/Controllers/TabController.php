<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use Illuminate\Support\Facades\Redirect;
use App\Tabs;
class TabController extends Controller
{
    public function show_tab()
    {
    	return view('admin.tab.add-tab');
    }
    public function store_tab(Request $request)
    {
    	$tabs=new Tabs();
        $tabs->tab_name=$request->tab_name;
        $tabs->tab_slug=$request->tab_slug;
        if($tabs->status==1)
        {
            $tabs->tab_status=1;
        }
        else
        {
            $tabs->tab_status=0;
        }
        $tab=$tabs->save();
           if($tab){return response()->json([
                'success' => true,
                'message' => 'Tab Added successfully'
            ]);
       }
    }
    public function all_tab()
    {
    	$all_tabs=Tabs::get();
    	return view('admin.tab.show-tab',compact('all_tabs'));
    }

    public function unactive_tab($tab_id)
    {
    	Tabs::where('tab_id',$tab_id)->update(['tab_status' => 0]);
        return Redirect::to('show-tab');
    }
    public function active_tab($tab_id)
    {
    	Tabs::where('tab_id',$tab_id)->update(['tab_status' => 1]);
        return Redirect::to('show-tab');
    }
    public function edit_tab($tab_id)
    {
        $tab_info=Tabs::find($tab_id);
        return view('admin.tab.update-tab',compact('tab_info'));
    }
    public function update_tab(Request $request, $tab_id)
    {
        $tabs= Tabs::find($tab_id);
        $tabs->tab_name=$request->tab_name;
        $tabs->tab_slug=$request->tab_slug;
        $tabs->tab_status=$request->tab_status;
        $tabs->save();
    	return Redirect::to('show-tab');
    }
    public function destroy($tab_id)
    {
        Tabs::where('tab_id',$tab_id)->delete();
        return response()->json([
                'success' => 'Recod has been deleted']);
    }
}
