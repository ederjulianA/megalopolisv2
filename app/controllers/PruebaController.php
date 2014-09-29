<?php
use Moltin\Cart\Cart;
use Moltin\Cart\Storage\Session;
use Moltin\Cart\Identifier\Cookie;


 class PruebaController  extends BaseController {
 		$cart = new Cart(new Session, new Cookie);
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

									$cat2 = DB::table('categorias as c')->join('producto as p','p.categoria','=','c.id')
									->join('almacen as a','a.producto','=','p.id')
									->join('sedes as s','a.sede','=','s.id')
									->select('c.id AS id_categoria_cat',
											'c.nombre AS nombre_categoria_cat',
											'c.slug AS slug_cat',
											's.id'
										)->where('s.id','=',$N_sede->id)->distinct()->get();				

									if($plantilla == 2)
									{
										return View::make('tiendas.home')->with('empresa',$N_empresa)->with('cart',$cart)->with('sede',$N_sede)->with('categorias',$cat2)->with('productos',$productos);
									}
 					}
 			}
 		}
}