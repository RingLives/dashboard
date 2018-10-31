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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('base_admin_home');

// Route::get('home',function(){
// 	return view('dashboard.home.index');
// })->name('base_admin_home');

Route::group(['prefix' => 'admin'], function () {

	Route::get('/loginsss', [
	    'as' => 'login_view',
	    'uses' => 'Dashboard\Source\LoginController@view',
	]);

});

include('developer_tools.php');