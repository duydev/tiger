<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@index' );

Route::group(['prefix' => config( 'admin.prefix' ), 'middleware' => [ 'setTheme:'.config( 'admin.theme' ) ], 'namespace' => 'Admin' ], function() {
	Route::get('/', 'HomeController@index' );

	Route::get( 'setting' , 'SettingsController@index');
	Route::post( 'setting' , 'SettingsController@update');
});