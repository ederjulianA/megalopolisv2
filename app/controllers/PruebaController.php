<?php

 class PruebaController  extends BaseController {

 		public function getHome($empresa)
 		{
 			$plantilla = 2;
 			$N_empresa = Empresa::where('nombre_publico','=',$empresa)->first();

 				if($N_empresa->estado == 0)
 				{
 					return Redirect::to('/')->with('message-alert','La empresa no esta disponible');
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

									if($plantilla == 2)
									{
										return View::make('tiendas.home')->with('empresa',$N_empresa)->with('sede',$N_sede)->with('productos',$productos);
									}
 					}
 			}
 		}
}