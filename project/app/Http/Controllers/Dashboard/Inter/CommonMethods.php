<?php
namespace App\Http\Controllers\Dashboard\Inter;

use Illuminate\Http\Request;

interface CommonMethods
{
	public function view();
	public function createView();
	public function create(Request $request);
	public function editView(Request $request);
	public function update(Request $request);
	public function delete(Request $request);
}