<?php

Route::group(['prefix' => 'tools','namespace' => 'Dashboard\Developer_tools'],function(){
	Route::group(['namespace' => 'Menu'],function(){		
		Route::get('menu','MenuController@view')->name('devt_menu_list_view');
		Route::get('menu/create','MenuController@createView')->name('devt_menu_create_view');
		Route::post('menu/store','MenuController@create')->name('devt_menu_create_action');
	});
});
