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


/* RUTA HOME  */
Route::get('/megaStore', array(
		'as' => 'tienda',
		'uses' => 'TiendaController@getIndex'
	));


/* RUTA HOME  */
Route::get('/landingProd', array(
		'as' => 'landingProd',
		'uses' => 'ProductosController@landingPro2'
	));

/* LANDING  */
Route::get('/landing', array(
		'as' => 'landing',
		'uses' => 'HomeController@getLanding'
	));

/* LANDING 2 */
Route::get('/landing2', array(
		'as' => 'landing2',
		'uses' => 'HomeController@getLanding2'
	));

/* LANDING 2 */
Route::get('/home2', array(
		'as' => 'home2',
		'uses' => 'HomeController@home2'
	));

/* VISTA VISUALIZAR ARTICULO A COMPRAR */
Route::post('/contacto-vendedor', array(
		'as' => 'form-carrito-previo',
		'uses' => 'ProductosController@carritoPrevio'
	));

/* REGISTRO DE USUARIOS EN LA LISTA DE CORREOS */
Route::post('/lista-mails-post', array(
		'as' => 'lista-email',
		'uses' => 'HomeController@postListaMail'
	));

/* RUTA PARA HACER FILTROS DE PRODUCTOS POR CATEGORIA*/
Route::get('/categorias/{id}', array(
		'as' => 'categorias-producto',
		'uses' => 'CategoriasController@getCategorias'
	));


/* BUSCADOR */
Route::get('/buscador', array(
		'as' => 'buscador',
		'uses' => 'BuscadorController@getBuscar'
	));



/* RUTA MAPA DE PRUEBA  */
Route::get('/mapa', array(
		'as' => 'mapa',
		'uses' => 'MapaController@getMapa'
	));


/* RUTA RECUPERAR CONTRASEÑA */
Route::get('/recuperar-cuenta', array(
		'as' => 'recuperar-cuenta',
		'uses' => 'UsersController@getOlvidoPass'
	));

		
/* PROCESAR EDICIÓN DE PRODUCTOS*/

Route::get('/mega/editar-productos', array(
		'as' => 'editar-productos',
		'uses' => 'EmpresasController@postEditarProductos'
	));

Route::get('/mega/editar-producto-{id}', array(
		'as' => 'editar-productos-post',
		'uses' => 'EmpresasController@postEditarProductoId'
	));

Route::get('/eliminar-producto', array(
		'as' => 'eliminar-producto',
		'uses' => 'EmpresasController@eliminarProducto'
	));
	
Route::post('/edit-product', array(
		'as' => 'edit-product',
		'uses' => 'EmpresasController@postEditarProductoAction'
	));

/* RUTA nueva sede */
Route::get('/mega/nueva-sede', array(
		'as' => 'nueva-sede',
		'uses' => 'EmpresasController@getNuevaSede'
	));


/* RUTA nueva sede */
Route::get('/editar-promo/{idPromo}', array(
		'as' => 'editar-promo',
		'uses' => 'PromocionesController@getEditarPromo'
	));


/* RUTA nueva sede */
Route::post('/editar-promo-post', array(
		'as' => 'editar-promo-post',
		'uses' => 'PromocionesController@postEditarPromo'
	));



/* RUTA PROMOSIONES  */
Route::get('/promos/{id}', array(
		'as' => 'promos',
		'uses' => 'PromocionesController@getPromos'
	));


/* RUTA descripcion de productos  */
Route::get('/producto/{id}-{sede}', array(
		'as' => 'productos',
		'uses' => 'ProductosController@getProducto'
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

//RUTA PARA  CONFIRMAR COMPRA
Route::get('/confirmar-compra', array(
		'as' => 'confirmar-compra',
		'uses' => 'ProductosController@CompraPost'
	));


Route::post('/preguntas', array(
		'as' => 'preguntas-empresa',
		'uses' => 'PreguntasController@postResponderPregunta'
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

/*FUNCION PARA CANCELAR LA SUSCRIPCION DE UN USUARIO A UNA EMPRESA*/
Route::post('/cancelar-suscripcion', array(
		'as' => 'cancelar-suscripcion-user',
		'uses' => 'UsersController@postCancelarSuscripcion'
	));


/*METODO POST QUE DEVUELVE LA LISTA DE BARRIOS EN FORMATO JSON */
Route::post('/get/barrios', array(
		'as' => 'barrios-lista',
		'uses' => 'AjaxController@postBarrios'
	));

Route::post('/mega/subcats', array(
		'as' => 'get-subcats',
		'uses' => 'AjaxController@postSubcat'
	));

Route::post('/mega/loadPreguntas', array(
		'as' => 'get-preguntas-empresa',
		'uses' => 'AjaxController@postGetPreguntas'
	));

/*FUNCION AJAX PARA NOTIFICAR AL USUARIO QUE SU ARTICULO HA SIDO ENVIADO*/
Route::post('/mega/noti-envio-ajax', array(
		'as' => 'noti-envio-ajax',
		'uses' => 'AjaxController@NotiEnvioAjax'
	));

Route::post('/empresa/suscripcion-ajax', array(
		'as' => 'suscripcion-ajax',
		'uses' => 'AjaxController@addSus'
	));

//funcion ajax para cancelar la suscripcion de un usuario a una empresa
Route::post('/empresa/cancelar-suscripcion-ajax', array(
		'as' => 'cancelar-suscripcion-ajax',
		'uses' => 'AjaxController@remSus'
	));




Route::post('/add/pregunta', array(
		'as' => 'add-pregunta',
		'uses' => 'AjaxController@addPregunta'
	));

Route::post('/mega/get/promo', array(
		'as' => 'promos-lista',
		'uses' => 'AjaxController@postPromos'
	));


Route::post('/catalogo/get-products', array(
		'as' => 'get-products',
		'uses' => 'AjaxController@postProducts'
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

Route::post('/producto/quitar-favoritos-ajax', array(
		'as' => 'quitar-favoritos-ajax',
		'uses' => 'AjaxController@remFav'
	));
/* FUNCION AJAX QUE REMUEVE LOS FAVORITOS DE LA LISTA DEL USUARIO*/
Route::post('/remo/lista/favs', array(
		'as' => 'remo-lista-favs',
		'uses' => 'AjaxController@remFav'
	));
/*FUNCION AJAX QUE AGREGA UN FAVORITO A LA LISTA DEL USUARIO*/
Route::post('/producto/favoritos-ajax', array(
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

Route::get('/mega/cambiar-imagen', array(
		'as' => 'cambiar-imagen',
		'uses' => 'EmpresasController@getCambiarImagen'
	));

//RUTA PARA ADMINISTRAR LAS VENTAS HECHAS
Route::get('/mega/ventas', array(
		'as' => 'mega-ventas',
		'uses' => 'EmpresasController@getVentasEmpresa'
	));


Route::post('/mega/cambiar/imagen', array(
		'as' => 'cambiar-imagen-post',
		'uses' => 'EmpresasController@postCambiarImagen'
	));
Route::post('/mega/cambiar/banner', array(
		'as' => 'cambiar-banner',
		'uses' => 'EmpresasController@postCambiarBanner'
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

/* EDITAR PERFIL DE USUARIO TIPO 1*/
Route::get('/lista-ordenes', array(
		'as' => 'listOrders',
		'uses'=> 'UsersController@getListaOrders'
	));

Route::get('/favoritos', array(
		'as' => 'favoritos-user',
		'uses'=> 'UsersController@favoritosUser'
	));
//RUTA PARA EDITAR LA INFORMACION DEL USUARIO: NOMBRE DE USUARIO, CONTRASEÑA
Route::get('/personalInfo', array(
		'as' => 'personal-info',
		'uses'=> 'UsersController@getPersonalInfo'
	));

Route::get('/suscripciones', array(
		'as' => 'suscripciones-user',
		'uses'=> 'UsersController@suscripcionesUser'
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

//Ruta de prueba
Route::get('/prueba-carlos', array(
		'as' => 'pruCarlos',
		'uses' => 'HomeController@getCarlos'
	));
Route::get('/nav2', array(
		'as' => 'nav',
		'uses' => 'NavegarController@getNav'
	));
Route::get('/product-detail', array(
		'as' => 'proDetail',
		'uses' => 'ProductosController@getProduct'
	));




