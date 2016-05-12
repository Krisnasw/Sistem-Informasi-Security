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
  
Route::post('/register', [
    'uses' => 'AdminController@Register',
    'as' => 'register'
]);

Route::post('/bugs', [
    'uses' => 'AdminController@Bugs',
    'as' => 'bugs'
]);

Route::get('logout', [
	'uses' => 'AdminController@Logout',
    'as' => 'welcome'
  ]);
  
  Route::group(['middleware' => ['web', 'auth']], function() {

  Route::get('/usr', function() {
      if (Auth::user()->admin == 1) {
          return view('admin.index');
      } else {
  	    return view('index');
      }
  });
  
  Route::get('/usr/faq', function() {
      return view('faq');
  });
  
  Route::get('/usr/addlap', function() {
      return view('laporan.tambah');
  });
  
  Route::get('/usr/lap', array(
		'uses' => 'LaporanController@index',
		'as' => 'laporan.laporan'
	));
  
  Route::resource('lapor', 'LaporanController');

});