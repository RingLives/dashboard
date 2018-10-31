<?php

namespace App\Http\Controllers\Dashboard\Developer_tools\Menu;

use App\Http\Controllers\Dashboard\Inter\CommonMethods;
use App\Http\Controllers\Source\Message\Status;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Menu\Menu;
use Carbon\Carbon;
use Validator;
use Auth;

class MenuController extends Controller implements CommonMethods
{
	public function view(){
		$listedValue = Menu::paginate(20);
		return view('dashboard.developer_tools.menu.menu_list',compact('listedValue'));
	}

	public function createView(){
		return view('dashboard.developer_tools.menu.create_menu');
	}

	public function create(Request $request){
		$validMessages = [
            'id_child_menu.required' => 'Child Name field is required.',
            'route_name.required' => 'Route Name field is required.',
            'order_by.required' => 'Route Name field is required.',
            ];

		$validator = Validator::make($request->all(), [
            'id_child_menu'   => 'required',
            'route_name'   => 'required',
            'order_by'   => 'required',
        	],$validMessages
    	);
        if ($validator->fails()) {
            return redirect()->back()->withInput($request->input())->withErrors($validator->messages());
        }

		$validationError = $validator->messages();
		$storeMenu = new Menu();
		$storeMenu->user_id = Auth::user()->user_id;
		$storeMenu->route_name = $request->route_name;
		$storeMenu->id_parent_menu = $request->prent_route_id;
		$storeMenu->id_child_menu = $request->id_child_menu;
		$storeMenu->description = $request->menu_description;
		$storeMenu->icon = $request->icon;
		$storeMenu->order_by = $request->order_by;
		$storeMenu->is_active = $request->is_active;
		$storeMenu->last_action = Status::CREATE;
		$storeMenu->save();

		return \Redirect()->route('devt_menu_list_view');
	}

	public function editView(Request $request){}
	public function update(Request $request){}
	public function delete(Request $request){}
}