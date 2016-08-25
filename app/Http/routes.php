<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/server', 'HomeController@index');

Route::get('/view/{school}' , function($school){
	echo $school;
});

Route::get('/school/{school?}', 'HomeController@school');

Route::get('/detail/{school?}' , 'HomeController@detail');

