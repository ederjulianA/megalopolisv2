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
/* RUTA HOME  */
Route::get('/', array(
		'as' => 'index',
		'uses' => 'HomeController@getIndex'
	));

Route::get('/mega/cambiar/imagen', array(
		'as' => 'cambiar-imagen',
		'uses' => 'EmpresasController@getCambiarImagen'
	));


Route::post('/mega/cambiar/imagen', array(
		'as' => 'cambiar-imagen-post',
		'uses' => 'EmpresasController@postCambiarImagen'
	));

Route::get('/mega/perfil', array(
		'as' => 'mega-perfil',
		'uses'=> 'UsersController@perfil'
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


Route::post('/empresa/actualizar/info', array(
		'as' => 'empresa-actualizar-info-post',
		'uses' => 'EmpresasController@postActualizarInfo'
	));
Route::post('/crear-cuenta', array(
		'as' => 'crear-cuenta-post',
		'uses' => 'UsersController@postCreate'
	));

Route::post('/empresa/crear', array(
		'as' => 'empresa-crear-post',
		'uses' => 'EmpresasController@postCrear'
	));


Route::get('/get-login', array(
		'as' => 'login',
		'uses' => 'HomeController@getLogin'
	));

Route::get('/get-registro', array(
		'as' => 'registro',
		'uses' => 'HomeController@getRegistro'
	));

Route::post('/post-login', array(
		'as' => 'login-post',
		'uses' => 'UsersController@postLogin'

	));



Route::get('/cerrar-sesion', array(
		'as' => 'cerrar-sesion',
		'uses' => 'UsersController@cerrarSesion'

	));

//activar cuenta via email

Route::get('/activar/cuenta/{codigo_activacion}', array(

			'as' => 'activar-cuenta',
			'uses' => 'UsersController@getActivate'
		));
