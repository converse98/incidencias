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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/reportar', 'HomeController@getreport');
Route::post('/reportar', 'HomeController@postreport');

Route::group(['middleware' => 'admin', 'namespace' => 'Admin'], function(){
	//Usuarios
	Route::get('/usuarios', 'UserController@index');
	Route::post('/usuarios', 'UserController@store');
	
	Route::get('/usuario/{id}', 'UserController@edit');
	Route::post('/usuario/{id}', 'UserController@update');

	Route::get('/usuario/{id}/eliminar', 'UserController@delete');

	//solicitudes
	Route::get('/solicitudes', 'ProjectController@index');
	Route::post('/solicitudes', 'ProjectController@store');

	Route::get('/solicitud/{id}', 'ProjectController@edit');
	Route::post('/solicitud/{id}', 'ProjectController@update');

	Route::get('/solicitud/{id}/eliminar', 'ProjectController@delete');
	Route::get('/solicitud/{id}/restaurar', 'ProjectController@restore');
	
	Route::get('/config', 'ConfigController@index');
});