<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('editor', function(){
	return View::make('editor-file');
});

Route::get('editor2', function(){
	return View::make('editor-file2');
});

Route::get('editor3', function(){
	return View::make('hello');
});

/*Route::get('users', function(){
	return 'Users';
});*/

Route::get('form', function(){
	print_r($_REQUEST);
});

//Route::get('/', 'HomeController@getIndex');




Route::get('/', 'CkeditorController@getIndex');
Route::post('ckeditor/config', 'CkeditorController@configuracion');