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

Route::get('/', array(
		'as' => 'index',
		'uses' => 'HomeController@getIndex'
	));

Route::get('/empresa/nueva', array(
		'as' => 'nueva-empresa',
		'uses' => 'EmpresasController@getNuevaEmpresa'
	));

Route::get('/empresa', array(
		'as' => 'empresaAdmin',
		'uses' => 'EmpresasController@getEmpresa'
	));

Route::get('/empresa/admin', array(
		'as' => 'empresa-admin',
		'uses' => 'EmpresasController@empresa'
	));



Route::post('/crear-cuenta', array(
		'as' => 'crear-cuenta-post',
		'uses' => 'UsersController@postCreate'
	));


Route::get('/get-login', array(
		'as' => 'login',
		'uses' => 'HomeController@getLogin'
	));

Route::post('/post-login', array(
		'as' => 'login-post',
		'uses' => 'UsersController@postLogin'

	));



Route::get('/cerrar-sesion', array(
		'as' => 'cerrar-sesion',
		'uses' => 'UsersController@cerrarSesion'

	));

