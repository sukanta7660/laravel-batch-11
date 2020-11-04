<?php


Route::group(['prefix' => 'example'],function(){
Route::get('ad','AdController@index');
Route::get('ad-2','Ad\AdController@anika');
});

Route::get('/','User\IndexController@index');

Route::group(['prefix' => 'user'],function(){

	Route::get('/about','User\IndexController@about');
	Route::get('/contact','User\IndexController@contact');

});


Route::group(['prefix' => 'admin'],function(){

	Route::get('dashboard','Admin\DashboardController@index');

	/*----------------- Category ------------------*/
	Route::get('all-category','Admin\CategoryController@index');
	/*----------------- Category ------------------*/

});


