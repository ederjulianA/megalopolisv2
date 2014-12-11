<?php

	Route::get('adminpanel', ['as' => 'adminpanel', 'uses' => 'Admin2Controller@getIndex']);
	Route::get('adminpanel/productos', ['as' => 'adminpanel-todos', 'uses' => 'Admin2Controller@getAllProducts']);
	Route::get('adminpanel/productos/nuevo', ['as' => 'adminpanel-nuevo', 'uses' => 'Admin2Controller@getNewProduct']);
	Route::get('adminpanel/logo', ['as' => 'adminpanel-logo', 'uses' => 'Admin2Controller@getLogo']);
	Route::get('adminpanel/tema', ['as' => 'adminpanel-tema', 'uses' => 'Admin2Controller@getTema']);
	Route::get('adminpanel/info', ['as' => 'adminpanel-info', 'uses' => 'Admin2Controller@getInfo']);
	Route::get('adminpanel/preguntas', ['as' => 'adminpanel-chats', 'uses' => 'Admin2Controller@getChats']);
	Route::get('adminpanel/password', ['as' => 'adminpanel-password', 'uses' => 'Admin2Controller@getPassword']);
	Route::get('adminpanel/preguntas/{id}', ['as' => 'adminpanel-chat-unico', 'uses' => 'Admin2Controller@getChatUnico']);
	Route::get('adminpanel/productos/editar/{id}', ['as' => 'adminpanel-editar-producto', 'uses' => 'Admin2Controller@getEditProduct']);


	//POST ROUTES 

	Route::post('adminpanel/productos/subcat', ['as' => 'subcat', 'uses' => 'AjaxController@postSubcat']);
	Route::post('adminpanel/productos/editar/loadsubcat', ['as' => 'loadsubcat', 'uses' => 'AjaxController@postSubcat']);
	Route::post('crear-producto', ['as' => 'crear-producto', 'uses' => 'SedesController@postCrearproducto']);
	Route::post('admin-respuesta-chat-post', ['as' => 'admin-respuesta-chat-post', 'uses' => 'Admin2Controller@postChatUnico']);

