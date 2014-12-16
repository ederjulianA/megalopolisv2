<?php

	Route::get('adminpanel', array('as' => 'adminpanel', 'uses' => 'Admin2Controller@getIndex'));
	Route::get('adminpanel/productos', array('as' => 'adminpanel-todos', 'uses' => 'Admin2Controller@getAllProducts'));
	Route::get('adminpanel/productos/nuevo', array('as' => 'adminpanel-nuevo', 'uses' => 'Admin2Controller@getNewProduct'));
	Route::get('adminpanel/logo', array('as' => 'adminpanel-logo', 'uses' => 'Admin2Controller@getLogo'));
	Route::get('adminpanel/tema', array('as' => 'adminpanel-tema', 'uses' => 'Admin2Controller@getTema'));
	Route::get('adminpanel/info', array('as' => 'adminpanel-info', 'uses' => 'Admin2Controller@getInfo'));
	Route::get('adminpanel/mapa', array('as' => 'adminpanel-mapa', 'uses' => 'Admin2Controller@getMapa'));
	Route::get('adminpanel/ordenes', array('as' => 'adminpanel-ordenes', 'uses' => 'Admin2Controller@getCompras'));
	Route::get('adminpanel/preguntas', array('as' => 'adminpanel-chats', 'uses' => 'Admin2Controller@getChats'));
	Route::get('adminpanel/password', array('as' => 'adminpanel-password', 'uses' => 'Admin2Controller@getPassword'));
	Route::get('adminpanel/preguntas/{id}', array('as' => 'adminpanel-chat-unico', 'uses' => 'Admin2Controller@getChatUnico'));
	Route::get('adminpanel/productos/editar/{id}', array('as' => 'adminpanel-editar-producto', 'uses' => 'Admin2Controller@getEditProduct'));


	//POST ROUTES 

	Route::post('adminpanel/productos/subcat', array('as' => 'subcat', 'uses' => 'AjaxController@postSubcat'));
	Route::post('adminpanel/productos/editar/loadsubcat', array('as' => 'loadsubcat', 'uses' => 'AjaxController@postSubcat'));
	Route::post('crear-producto', array('as' => 'crear-producto', 'uses' => 'SedesController@postCrearproducto'));
	Route::post('admin-respuesta-chat-post', array('as' => 'admin-respuesta-chat-post', 'uses' => 'Admin2Controller@postChatUnico'));
	Route::post('guardar-mapa', array('as' => 'guardar-mapa', 'uses' => 'Admin2Controller@postGuardarMapa'));

