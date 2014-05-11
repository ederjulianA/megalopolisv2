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


/* RUTA RECUPERAR CONTRASEÑA */
Route::get('/recuperar-cuenta', array(
		'as' => 'recuperar-cuenta',
		'uses' => 'UsersController@getOlvidoPass'
	));


/* RUTA nueva sede */
Route::get('/nueva-sede', array(
		'as' => 'nueva-sede',
		'uses' => 'EmpresasController@getNuevaSede'
	));

/* PROCESAR NUEVA SEDE*/

Route::post('/nueva-sede', array(
		'as' => 'nueva-sede-post',
		'uses' => 'EmpresasController@postNuevaSede'
	));
/* ACTUALIZAR SEDE EXISTENTE*/

Route::post('/nueva-promo-post', array(
		'as' => 'nueva-promo-post',
		'uses' => 'PromocionesController@postNuevaPromo'
	));


Route::post('/actualizar-sede', array(
		'as' => 'actualizar-sede-post',
		'uses' => 'EmpresasController@postActualizarSede'
	));

/* PROCESAR RECUPERACION DE CONTRASEÑA*/
Route::post('/recuperar-cuenta-post', array(
		'as' => 'recuperar-cuenta-post',
		'uses' => 'UsersController@postOlvidoPass'
	));

Route::get('/recuperar-cuenta/{code}', array(
		'as' => 'recuperar-cuenta-code',
		'uses' => 'UsersController@getRecuperar'
	));


Route::get('/catalogo/{nombre_publico}', array(
		'as' => 'catalogo-sede',
		'uses' => 'SedesController@getCatalogo'
	));


/*METODO POST QUE DEVUELVE LA LISTA DE BARRIOS EN FORMATO JSON */
Route::post('/get/barrios', array(
		'as' => 'barrios-lista',
		'uses' => 'AjaxController@postBarrios'
	));


Route::post('/empresa/add/pregunta', array(
		'as' => 'add-pregunta',
		'uses' => 'AjaxController@addPregunta'
	));

Route::post('/get/promo', array(
		'as' => 'promos-lista',
		'uses' => 'AjaxController@postPromos'
	));


Route::post('/cambiar-nombre-ajax', array(
		'as' => 'cambiar-nombre-ajax',
		'uses' => 'AjaxController@cambiarNombreAjax'
	));


Route::post('/get/empresas-ciudad', array(
		'as' => 'get-empresas-ciudad',
		'uses' => 'AjaxController@postEmpresasCiudad'
	));

Route::post('/get/nombre-empresa', array(
		'as' => 'get/nombre-empresa',
		'uses' => 'AjaxController@postNombreEmpresaValido'
	));

Route::post('/get/nombre-sede', array(
		'as' => 'get/nombre-sede',
		'uses' => 'AjaxController@postNombreSedeValido'
	));

Route::post('/catalogo/quitar-favoritos-ajax', array(
		'as' => 'quitar-favoritos-ajax',
		'uses' => 'AjaxController@remFav'
	));

Route::post('/remo/lista/favs', array(
		'as' => 'remo-lista-favs',
		'uses' => 'AjaxController@remFav'
	));

Route::post('/catalogo/favoritos-ajax', array(
		'as' => 'add-fav-ajax',
		'uses' => 'AjaxController@addFav'
	));

Route::post('/get/cat', array(
		'as' => 'categorias-lista',
		'uses' => 'AjaxController@postCategorias'
	));

/* RUTA HOME O NAVEGACION DONDE SE VISUALIZARAN LAS EMPRESAS*/
Route::get('/navegar', array(
		'as' => 'navegar',
		'uses' => 'NavegarController@getNavegar'
	));
//VISUALIZAR LA INFORMACION DE UNA EMPRESA SEGUN EL ID 
Route::get('/empresa/{nombre_publico}', array(
		'as' => 'empresa-info',
		'uses' => 'NavegarController@getInfo'
	));

//SE MUESTRAN LAS EMPRESAS SEGUN EL FILTRO DE LA CATEGORIA 
Route::get('/navegar/categoria/{id}', array(
		'as' => 'categoria-empresa',
		'uses' => 'NavegarController@getCategoria'
	));

Route::get('/mega/cambiar/imagen', array(
		'as' => 'cambiar-imagen',
		'uses' => 'EmpresasController@getCambiarImagen'
	));


Route::post('/mega/cambiar/imagen', array(
		'as' => 'cambiar-imagen-post',
		'uses' => 'EmpresasController@postCambiarImagen'
	));


Route::post('/mega/cambiar-pass', array(
		'as' => 'post-cambiar-pass',
		'uses' => 'UsersController@postCambiarPassword'

	));

Route::post('/perfil-cambiar-pass', array(
		'as' => 'perfil-cambiar-pass',
		'uses' => 'UsersController@postCambiarPasswordUser'

	));

Route::get('/mega/perfil', array(
		'as' => 'mega-perfil',
		'uses'=> 'UsersController@perfil'
	));

/* EDITAR PERFIL DE USUARIO TIPO 1*/
Route::get('/perfil', array(
		'as' => 'perfil',
		'uses'=> 'UsersController@perfilUser1'
	));

Route::get('/favoritos', array(
		'as' => 'favoritos',
		'uses'=> 'UsersController@favoritosUser'
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


Route::get('/login', array(
		'as' => 'login',
		'uses' => 'HomeController@getLogin'
	));

Route::get('/registro', array(
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
		
Route::post('nuevo-producto', array(
		'as' => 'crear-producto',
		'uses' => 'SedesController@postCrearproducto'
));

Route::post('mapa', array(
		'as' => 'mapa',
		'uses' => 'EmpresasController@postMapa'
));
