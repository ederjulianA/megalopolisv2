<?php

use Intervention\Image\Image;

class SedesController extends BaseController{

	public function getCatalogo($nombre_publico){

		$sede = Sede::where('nombre_publico',"=", $nombre_publico)->get();


		if($sede->count()){
			$sede = $sede->first();
			$num_promos = $sede->promocion->count();

			$productos = Producto::where('sede','=',$sede->id)->join('almacen', 'producto.id', '=', 'almacen.producto')
													->join('categorias', 'producto.categoria', '=', 'categorias.id')
													->select('producto.nombre AS producto_nombre',
													'almacen.precio_detal',
													'producto.imagen',
													'producto.id',
													'producto.descripcion AS producto_descripcion',
													'categorias.nombre AS categoria_nombre',
													'almacen.cantidad')->get();
			$num_productos = $productos->count();

			return View::make('catalogo')->with('sede',$sede)->with('num_promos', $num_promos)->with('productos', $productos)->with('num_productos',$num_productos);
		}else{
			return Redirect::to('/navegar')->with('message-alert','No hemos encontrado el catalogo solicitado');
		}
	}
	
	public function postMapa() {
	
		$empresa = Empresa::find(Input::get('bussines_id'));
				
		$empresa->latitude = Input::get('latitude');
		$empresa->longitude = Input::get('longitude');
		
		if($empresa->save()) {
		
			return Redirect::to('/mega/perfil')->with('message-alert','Se hace actualizado la posición de la empresa satisfactoriamente');
		} else {
		
			return Redirect::to('/mega/perfil')->with('message-alert','Ha ocurrido un problema al momento de actualizar el perfil');
		}
	}

	public function postCrearproducto() {
	
		$producto = new Producto();
		$producto->nombre = Input::get('product_name');
		$producto->descripcion = Input::get('description');
		$producto->categoria = Input::get('category');
		
		$file = Input::file('imagen');
		
		$codigoIMG = str_random(13);
		$filename = date('Y-m-d-H')."-".$codigoIMG."-".$file->getClientOriginalName();
		Image::make($file->getRealPath())->resize(140, 110)->save(public_path().'/img/products/'.$filename);
		
		$producto->imagen = 'img/products/'.$filename;
		
		$producto->save();
		
		$almacen = new Almacen();
		$almacen->producto = $producto->id;
		$almacen->sede = Input::get('sede');
		$almacen->precio_detal = Input::get('product_price');
		$almacen->cantidad = Input::get('product_amount');
		
		if($almacen->save()) {
		
			return Redirect::to('/mega/perfil')->with('message-alert','Se ha creado el producto satisfactoriamente');
		}
	}
}