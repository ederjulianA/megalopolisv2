<?php





 class PruebaController  extends BaseController {

 		
 		public function getProductos($empresa)
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
													'almacen.cantidad')->where('estado','=',1)->paginate(9);

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

									if($plantilla == 2)
									{
										return View::make('tiendas.catalogo')->with('sedes',$todasSedes)->with('num_sedes',$totalSedes)->with('empresa',$N_empresa)->with('sede',$N_sede)->with('categorias',$cat2)->with('productos',$productos);
									}
 					}
 			}
 		}

 		public function getProductosOrden($empresa,$opc)
 		{
 			$plantilla = 2;
 			if($opc == '')
 			{
 				$fila = 'producto.';
 				$N_order = 'nombre';
 				$order = 'ASC';
 			}
 			if($opc == '-precio')
 			{
 				$fila = 'almacen.';
 				$N_order = 'precio_detal';
 				$order = 'ASC';
 			}
 			if($opc == 'p')
 			{
 				$fila = 'almacen.';
 				$N_order = 'precio_detal';
 				$order = 'DESC';
 			}

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
													'almacen.cantidad')->where('estado','=',1)->orderBy($fila.$N_order,$order)->paginate(9);

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

									if($plantilla == 2)
									{
										return View::make('tiendas.catalogo')->with('sedes',$todasSedes)->with('num_sedes',$totalSedes)->with('empresa',$N_empresa)->with('sede',$N_sede)->with('categorias',$cat2)->with('productos',$productos);
									}
 					}
 			}
 		}


 		public function addcartAjax()
 		{
 			header('Content-type: text/javascript');

 			if(isset($_POST['id_producto']))
 			{
 				$id_producto = $_POST['id_producto'];
 				$producto = DB::table('producto as p')->join('almacen as a','a.producto','=','p.id')
				 ->join('sedes as s','a.sede','=','s.id')
				 ->join('empresas as e', 's.empresa_id','=','e.id')
				 ->join('categorias as c','p.categoria','=','c.id')
				 ->join('subcategorias as sc','sc.categoria_id','=','sc.id')
				 ->select('a.precio_detal',
						 'a.cantidad',
						 'c.nombre AS categoria_nombre',
						 'e.nombre_publico AS nombre_empresa',
						 'p.nombre AS producto_nombre',
						 'e.id AS id_empresa',
						 'p.imagen',
						 'p.slug',
						 'p.id',
						'p.descripcion AS producto_descripcion',
						 's.nombre_publico AS nombre_sede',
						 's.direccion',
						 's.telefono',
						 's.id AS sede_id',
						 'sc.nombre_sub'
					 )->where('p.id','=',$id_producto)->first();
				 
				 

				 Cart::insert(array(
				'id'=>$producto->id,
				'name' => $producto->producto_nombre,
				'price' => $producto->precio_detal,
				'quantity' => 1,
				'company' =>$producto->id_empresa,
				'image' => $producto->imagen
			));
				 $estado = array('estado'=>1,'mensaje'=>'producto agregado a las compras','precio'=>$producto->precio_detal);
 				return Response::json(array('estado'=>$estado,'producto'=>$producto));
 			}
 		}


 		
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


										$todasSedes = Sede::where('empresa_id','=', $N_empresa->id)->get();
										$totalSedes = $todasSedes->count();				

									if($plantilla == 2)
									{
										return View::make('tiendas.home')->with('sedes',$todasSedes)->with('num_sedes',$totalSedes)->with('empresa',$N_empresa)->with('sede',$N_sede)->with('categorias',$cat2)->with('productos',$productos);
									}
 					}
 			}
 		}
}