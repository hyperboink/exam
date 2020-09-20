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



Auth::routes();



Route::group(['middleware' => 'auth'], function(){

	Route::get('/', [
		'uses' => 'HomeController@index',
		'as' => 'home'
	]);

	Route::group(['prefix' => 'item'], function(){
		Route::get('/create', [
			'uses' => 'ItemController@create',
			'as' => 'createItem'
		]);

		Route::get('/{id}', [
			'uses' => 'ItemController@edit',
			'as' => 'editItem'
		]);

		Route::post('/', [
			'uses' => 'ItemController@save',
			'as' => 'save'
		]);

		Route::get('/delete/{id}', [
			'uses' => 'ItemController@delete',
			'as' => 'deleteItem'
		]);
	});

	

});
