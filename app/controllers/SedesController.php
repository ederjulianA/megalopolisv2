<?php

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
													'producto.descripcion AS producto_descripcion',
													'categorias.nombre AS categoria_nombre',
													'almacen.cantidad')->get();

			return View::make('catalogo')->with('sede',$sede)->with('num_promos', $num_promos)->with('productos', $productos);
		}else{
			return Redirect::to('/navegar')->with('message-alert','No hemos encontrado el catalogo solicitado');
		}
	}
}