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

//Route::get('/collegeapp/{data}', 'CollegeappController@getinfo');
Route::get('/receive', 'CollegeappController@getinfo');


Route::get('/',function(){
	return View::make('index');
});


Route::post('/auth/login', array('before' => 'csrf_json', 'uses' => 'AuthController@login'));
Route::get('/auth/logout', 'AuthController@logout');
