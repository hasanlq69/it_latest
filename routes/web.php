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

Route::get('/home', 'HomeController@index')->name('home');

Route::group([
  'middleware'=>['auth']] ,function(){
  	Route::get('/', 'HomeController@home')->name('index');

	Route::resource('maintenance', 'MaintenanceController' );
	Route::resource('group', 'GroupController', ['except' => 'index', 'create']);
	Route::get('group/index/{id}', 'GroupController@index')->name('group.index');
	Route::get('group/create/{id}', 'GroupController@create')->name('group.create');
	Route::resource('activity', 'ActivityController', ['except' => 'index', 'create']);
	Route::get('activity/index/{id}', 'ActivityController@index')->name('activity.index');
	Route::get('activity/create/{id}', 'ActivityController@create')->name('activity.create');
	Route::resource('daily', 'DailyController', ['except' => 'create']);
	Route::get('daily/create/{id}', 'DailyController@create')->name('daily.create');
	Route::resource('project', 'ProjectController');
	Route::resource('task', 'TaskController', ['except' => 'create']);
	Route::get('task/create/{id}', 'TaskController@create')->name('task.create');

	Route::resource('problem', 'TroubleController');

	Route::resource('user', 'UserController');
	Route::get('user/akun/{id}', 'UserController@akun')->name('user.akun');
});
