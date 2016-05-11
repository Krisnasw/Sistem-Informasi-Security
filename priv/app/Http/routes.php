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

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', [
  	'uses' => 'AdminController@postSignIn',
  	'as' => 'login'
  ]);

Route::get('logout', [
	'uses' => 'AdminController@Logout',
    'as' => 'welcome'
  ]);
  
  Route::group(['middleware' => 'auth'], function() {

  Route::get('/usr', function() {
  	return view('index');
  });

});