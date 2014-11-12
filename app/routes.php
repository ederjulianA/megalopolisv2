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
Route::group(array('domain' => 'www.tumegalopolis.com'), function() {

//Aquí irán las llamadas a controllers para cuando escribamos delante del dominio www (Normalmente, el sitio principal) 
		Route::get('/', array(
		'as' => 'index',
		'uses' => 'HomeController@getIndex'
	));

});

	Route::group(array('domain' => '{account}.tumegalopolis.com'), function()
{
	Route::get(	'/', array(
		'as'=>'getIndexTienda', 
		'uses'=> 'SubdominesController@getIndex'
		));

	Route::get(	'/_/producto/{url}', array(
		'as'=>'getProductoDetalle', 
		'uses'=> 'SubdominesController@getProducto'
		));

	Route::get(	'/cart/', array(
		'as'=>'getCartTienda', 
		'uses'=> 'SubdominesController@getCart'
		));
	Route::get(	'/productos/', array(
		'as'=>'getProductosEmpresa', 
		'uses'=> 'SubdominesController@getProductos'
		));


	Route::post('/cantidadAjax', array(
		'as' => 'cantidadAjax2',
		'uses' => 'CartController@postCantidadAjax'
	));
   /* Route::get('/', function($account)
    {
    	$plantilla = 2;
 			$N_empresa = Empresa::where('nombre_publico','=',$account)->first();
	 			if(!$N_empresa)
	 			{
	 				return Redirect::to('http://www.tumegalopolis.com');
	 			}



	 				if($N_empresa->estado == 0)
	 				{
	 					return Redirect::to('http://www.tumegalopolis.com');
	 				}

		 			if($N_empresa->count())
		 			{
		 				$N_sede = Sede::where('empresa_id','=',$N_empresa->id)->first();

		 					if($N_sede->count())
		 					{
		 						
		 						$productos = Producto::where('sede','=',$N_sede->id)->join('almacen', 'producto.id', '=', 'almacen.producto')
		 								->join('categorias', 'producto.categoria', '=', 'categorias.id')
															->select('producto.nombre AS producto_nombre',
															'almacen.precio_detal',
															'producto.imagen',
															'producto.imgSmall',
															'producto.categoria',
															'producto.slug',
															'producto.id',
															'producto.descripcion AS producto_descripcion',
															'categorias.id AS id_categoria',
															'categorias.nombre AS categoria_nombre',
															'almacen.cantidad')->where('estado','=',1)->orderBy(DB::raw('RAND()'))->take(4)->get();

											$cat2 = DB::table('categorias as c')->join('producto as p','p.categoria','=','c.id')
											->join('almacen as a','a.producto','=','p.id')
											->join('sedes as s','a.sede','=','s.id')
											->select('c.id AS id_categoria_cat',
													'c.nombre AS nombre_categoria_cat',
													'c.slug AS slug_cat',
													's.id'
												)->where('s.id','=',$N_sede->id)->distinct()->get();


												$todasSedes = Sede::where('empresa_id','=', $N_empresa->id)->get();
												$totalSedes = $todasSedes->count();		

												$slides = Archivo::where('empresa_id','=',$N_empresa->id)->get();
												$numero_slides = count($slides);			

											if($plantilla == 2)
											{
												return View::make('tiendas.home')->with('account',$account)->with('slides',$slides)->with('numero_slides',$numero_slides)->with('sedes',$todasSedes)->with('num_sedes',$totalSedes)->with('empresa',$N_empresa)->with('sede',$N_sede)->with('categorias',$cat2)->with('productos',$productos);
											}
		 					}
		 			}
        
    });*/

	Route::post('/addCartT', array(
		'as' => 'addCartT',
		'uses' => 'SubdominesController@postCart'
	));

});





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
Route::get('/contacto-vendedor', array(
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
//RUTAS PARA PROBAR EL NUEVO CARRITO DE COMPRAS#####################################################

Route::post('/addtocart', array(
		'as' => 'addTocart',
		'uses' => 'CartController@postaddTocart'
	));

Route::post('/store/cantidadAjax', array(
		'as' => 'cantidadAjax',
		'uses' => 'CartController@postCantidadAjax'
	));




Route::get('/store/cart', array(
		'as' => 'storeCart',
		'uses' => 'CartController@getCart'
	));

Route::get('/remove/cart/{identifier}', array(
		'as' => 'removeItem',
		'uses' => 'CartController@getRemoveitem'
	));

Route::get('/checkout/cart/address', array(
		'as' => 'checkout1',
		'uses' => 'CartController@getCheckout1'
	));


Route::post('/checkout/cart/pagarItem', array(
		'as' => 'pagarItem',
		'uses' => 'CartController@postpagarItem'
	));

Route::get('/checkout/cart/{identifier}', array(
		'as' => 'checkout2',
		'uses' => 'CartController@getCheckout2'
	));

//RUTAS NUEVO CARRITO DE COMPRA########################################

/* RUTA PARA HACER FILTROS DE PRODUCTOS POR CATEGORIA*/
Route::get('/pago-suscripcion', array(
		'as' => 'pagarSuscripcion',
		'uses' => 'PagosController@getPagosMegalopolis'
	));

/* RUTA PARA HACER FILTROS DE PRODUCTOS POR CATEGORIA*/
Route::get('/suscripcion/cancel', array(
		'as' => 'suscripcionCancel',
		'uses' => 'PagosController@getSuscripcionCancel'
	));


/* RUTA PARA HACER FILTROS DE PRODUCTOS POR CATEGORIA*/
Route::get('/suscripcion/success', array(
		'as' => 'suscripcionSuccess',
		'uses' => 'PagosController@getSuscripcionSuccess'
	));


/* RUTA PARA HACER FILTROS DE PRODUCTOS POR SUBCATEGORIA*/
Route::get('/categorias/{id}/subcategoria/{id_sub}', array(
		'as' => 'subcategorias-producto',
		'uses' => 'CategoriasController@getSubCategorias'
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


Route::get('/mega/pagos', array(
		'as' => 'mega-pagos',
		'uses' => 'PagosController@getPagos'
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
Route::get('/producto/{id}-{sede}-{slug}', array(
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




//RUTA PARA  AGREGAR LAS CATEGORIAS A LA VISTA QUE SE INCLUIRA EN EL TEMPLATE MASTER
Route::get('/vista/template/cate', array(
		'as' => 'vistaTemplateCate',
		'uses' => 'HomeController@VistaCategorias'
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


Route::get('/catalogo/{empresa}-{nombre_publico}', array(
		'as' => 'catalogo-sede',
		'uses' => 'SedesController@getCatalogo'
	));
//RUTA PARA MOSTRAR LOS PRODUCTOS DE UN CATALOGO ORDENADOS POR PRECIO MAYOR
Route::get('/catalogo/{empresa}-{nombre_publico}/mayor_precio', array(
		'as' => 'catalogoPrecioMas',
		'uses' => 'SedesController@getCatalogoMayor'
	));


//RUTA PARA MOSTRAR LOS PRODUCTOS DE UN CATALOGO ORDENADOS POR PRECIO MENOR
Route::get('/catalogo/{empresa}-{nombre_publico}/menor_precio', array(
		'as' => 'catalogoPrecioMenos',
		'uses' => 'SedesController@getCatalogoMenor'
	));

Route::get('/catalogo/{empresa}-{nombre_publico}/{slug}', array(
		'as' => 'catalogo-sede-cat',
		'uses' => 'SedesController@getCatalogoCat'
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

Route::post('/mega/pagos-ajax', array(
		'as' => 'pagos-ajax',
		'uses' => 'PagosController@addPago'
	));

//funcion ajax para cancelar la suscripcion de un usuario a una empresa
Route::post('/empresa/cancelar-suscripcion-ajax', array(
		'as' => 'cancelar-suscripcion-ajax',
		'uses' => 'AjaxController@remSus'
	));




Route::post('/producto/pregunta', array(
		'as' => 'add-pregunta',
		'uses' => 'AjaxController@addPregunta'
	));

Route::post('/mega/get/promo', array(
		'as' => 'promos-lista',
		'uses' => 'AjaxController@postPromos'
	));


Route::post('/addcartAjax', array(
		'as' => 'addcartAjax',
		'uses' => 'PruebaController@addcartAjax'
	));

Route::post('/addcartAjax3', array(
		'as' => 'addcartAjax3',
		'uses' => 'PruebaController@addcartAjax3'
	));


Route::post('/changeColorAjax', array(
		'as' => 'changeColorAjax',
		'uses' => 'AjaxController@changeColorAjax'
	));

Route::post('/addcartAjax2', array(
		'as' => 'addcartAjax2',
		'uses' => 'PruebaController@addcartAjax2'
	));


Route::post('/catalogo/get-products', array(
		'as' => 'get-products',
		'uses' => 'AjaxController@postProducts'
	));


Route::post('/cambiar-nombre-ajax', array(
		'as' => 'cambiar-nombre-ajax',
		'uses' => 'AjaxController@cambiarNombreAjax'
	));

Route::post('/perfil/notiEstado', array(
		'as' => 'notiEstado',
		'uses' => 'AjaxController@cambiarEstadoAjax'
	));


Route::post('/get/empresas-ciudad', array(
		'as' => 'get-empresas-ciudad',
		'uses' => 'AjaxController@postEmpresasCiudad'
	));

Route::post('/get/nombre-empresa', array(
		'as' => 'get/nombre-empresa',
		'uses' => 'AjaxController@postNombreEmpresaValido'
	));

Route::post('mega/get-nombre-sede', array(
		'as' => 'get-nombre-sede',
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
/*REGISTRAR DATOS DE ENVIO DE USUARIO DESDE LA VISTA PRODUCTO*/
Route::post('/producto/info-shipping-ajax', array(
		'as' => 'info-shipping-ajax',
		'uses' => 'AjaxController@postInfoShipping'
	));

/* RUTA HOME O NAVEGACION DONDE SE VISUALIZARAN LAS EMPRESAS*/
Route::get('/tiendas', array(
		'as' => 'tiendas',
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

Route::post('/borrarslide', array(
		'as' => 'borrarslide',
		'uses' => 'DropzoneController@postBorrarslide'
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

//AGREGAR IMAGENES PARA EL SLIDER CON DROPZONE

	
	Route::post('/dropzoneFiles', array(
		'as' => 'dropzoneFiles',
		'uses'=> 'DropzoneController@PostFiles'
	));



/* Vista de las preguntas de usuario*/
Route::get('/perfil/preguntas', array(
		'as' => 'perfil-preguntas',
		'uses'=> 'UsersController@getPreguntas'
	));

/* LISTA DE ORDENES*/
Route::get('/lista-ordenes', array(
		'as' => 'listOrders',
		'uses'=> 'UsersController@getListaOrders'
	));


/* DIRECCION DE ENVIO*/
Route::get('/perfil/direccion', array(
		'as' => 'direccion-envio',
		'uses'=> 'UsersController@getDireccionUser'
	));

/* POST NUEVA DIRECCIÓN DE ENVIÓ*/
Route::post('/perfil/nueva-direccion-post', array(
		'as' => 'nueva-direccion-envio-post',
		'uses'=> 'UsersController@PostNuevaDireccionUser'
	));

/* POST DIRECCIÓN DE ENVIÓ*/
Route::post('/perfil/direccion-post', array(
		'as' => 'direccion-envio-post',
		'uses'=> 'UsersController@PostDireccionUser'
	));

/* LISTA DE ORDENESn EN ENTREGA*/
Route::get('/lista-ordenes/en-entrega', array(
		'as' => 'listOrdersShiped',
		'uses'=> 'UsersController@getListaOrdersentrega'
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

Route::get('/perfil/suscripciones', array(
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

//PASSWORD REMINDERS#########################################################

Route::get('password/reset', array(
  'uses' => 'PasswordController@remind',
  'as' => 'password.remind'
));


Route::post('password/reset', array(
  'uses' => 'PasswordController@request',
  'as' => 'password.request'
));


Route::get('password/reset/{token}', array(
  'uses' => 'PasswordController@reset',
  'as' => 'password.reset'
));

Route::post('password/reset/{token}', array(
  'uses' => 'PasswordController@update',
  'as' => 'password.update'
));

//##############################################################################

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


/*############################### ROUTES FOR ADMIN######################################3*/

Route::get('/admin', array(
		'as' => 'admin',
		'uses' => 'AdminController@getAdminIndex'
	));

Route::get('/admin/productos', array(
		'as' => 'admin-productos',
		'uses' => 'AdminController@getAdminProductos'
	));

Route::get('/admin/categoriaSlug', array(
		'as' => 'admin-cate',
		'uses' => 'AdminController@getCategoriaSlug'
	));

Route::get('/admin/producto/{id}', array(
		'as' => 'admin-productos-editar',
		'uses' => 'AdminController@getAdminProductosEditar'
	));

Route::get('/admin/cate/{id}', array(
		'as' => 'admin-cate-editar',
		'uses' => 'AdminController@getAdminCatesEditar'
	));
Route::post('/admin/producto/post', array(
		'as' => 'add-seo-slug',
		'uses' => 'AdminController@postAdminProductosEditar'
	));

Route::post('/admin/cate/post', array(
		'as' => 'add-seo-slug-cat',
		'uses' => 'AdminController@postAdminCateEditar'
	));

Route::get('/admin/categorias', array(
		'as' => 'admin-categorias',
		'uses' => 'AdminController@getAdminCategorias'
	));

Route::get('/admin/usuarios', array(
		'as' => 'admin-usuarios',
		'uses' => 'AdminController@getUsers'
	));

Route::get('/admin/usuarios/editar_{id}', array(
		'as' => 'editar-user',
		'uses' => 'AdminController@getEditarUser'
	));


Route::post('/editar-cat-post', array(
		'as' => 'editar-categorias',
		'uses' => 'AdminController@editarCategorias'
	));

Route::post('/editar-user-post', array(
		'as' => 'editar-user-post',
		'uses' => 'AdminController@editarUserPost'
	));

Route::post('/admin/emailFiltro', array(
		'as' => 'emailFiltroAjax',
		'uses' => 'AdminController@emailFiltroAjaxCall'
	));
Route::post('/editar-subcat-post', array(
		'as' => 'editar-subcategorias',
		'uses' => 'AdminController@editarSubCategorias'
	));
Route::post('/admin/nueva-subcat', array(
		'as' => 'nueva-subcat',
		'uses' => 'AdminController@postNuevaSubCat'
));

Route::post('/admin/nueva-categoria', array(
		'as' => 'nueva-categoria-admin',
		'uses' => 'AdminController@postNuevaCat'
));

Route::get('/about', array(
		'as' => 'aboutUs',
		'uses' => 'HomeController@aboutUs'
	));

Route::get('/terminos-condiciones', array(
		'as' => 'terminos',
		'uses' => 'HomeController@terminos'
	));




Route::get('/{empresa}', array(
		'as' => 'nuevaEmpresaView',
		'uses' => 'PruebaController@getHome'
	));

Route::get('/{empresa}/productos/', array(
		'as' => 'nuevaProductos',
		'uses' => 'PruebaController@getProductos'
	));

Route::get('/{empresa}/productos/{opc}', array(
		'as' => 'nuevaProductos',
		'uses' => 'PruebaController@getProductosOrden'
	));





//CARGAR DATOS DESDE CSV$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$

Route::get('/mega/sync', array(
		'as' => 'sync',
		'uses' => 'CsvController@getSync'
	));

Route::get('/distribuidor/{empresa}', array(
		'as' => 'distribuidor',
		'uses' => 'CsvController@getDistribuidor'
	));


Route::get('/distribuidor/{empresa}/{id}', array(
		'as' => 'distribuidorProducto',
		'uses' => 'CsvController@getDistribuidorProducto'
	));

Route::post('/svc-post', array(
		'as' => 'svcPost',
		'uses' => 'CsvController@postUpload'
	));









