<?php

namespace App\Http\Controllers\Dashboard\Developer_tools\Menu;

use App\Http\Controllers\Source\Message\Status;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Menu\Child;
use Carbon\Carbon;
use Auth;

class ChildController extends Controller
{
	protected function store(Request $request){
		Child::create([
			'user_id' => Auth::user()->user_id,
			'child_menu_name' => $request['menu_name'],
			'is_active' => Status::ACTIVE.
			'last_action' => Status::CREATE
		]);
	}
}