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

Route::get( '/', 'HomeController@index' );

Route::get( '/{cSlug}', 'CategoryController@detailBySlug' );
Route::get( '/{cSlug}/{aSlug}', 'ArticlesController@detailBySlug' );

Route::group(['prefix' => config( 'backpack.base.route_prefix' ), 'middleware' => ['web', 'admin'], 'namespace' => 'Admin'], function () {
	CRUD::resource('member', 'MemberCrudController');
});
