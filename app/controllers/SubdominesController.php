<?php



 class SubdominesController  extends BaseController
 {

 	protected $ciudad;

 	public function __construct(Ciudad $ciudad)
 	{
 		$this->ciudad = $ciudad;

 	}
 	

 	public function getIndex($account)
 	{
 		
 			$N_empresa = Empresa::where('nombre_publico','=',$account)->first();
	 			if(!$N_empresa)
	 			{
	 				return Redirect::to('http://www.tumegalopolis.com');
	 			}
	 			$plantilla = $N_empresa->tema;



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
															'almacen.cantidad')->where('estado','=',1)->orderBy(DB::raw('RAND()'))->take(15)->get();

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
											if($plantilla == 1)
									{
							
										return View::make('pint.index')->with('slides',$slides)->with('numero_slides',$numero_slides)->with('products', Cart::contents())->with('account',$account)->with('slides',$slides)->with('numero_slides',$numero_slides)->with('sedes',$todasSedes)->with('num_sedes',$totalSedes)->with('empresa',$N_empresa)->with('sede',$N_sede)->with('categorias',$cat2)->with('productos',$productos);
									}
		 					}
		 			}


 	}

 	public function getProducto($account,$url)
 	{
 			 $p = new Producto;

 			$N_empresa = Empresa::where('nombre_publico','=',$account)->first();
	 			if(!$N_empresa)
	 			{
	 				return Redirect::to('http://www.tumegalopolis.com');
	 			}
	 			$plantilla = $N_empresa->tema;



	 				if($N_empresa->estado == 0)
	 				{
	 					return Redirect::to('http://www.tumegalopolis.com');
	 				}

	 					$N_sede = Sede::where('empresa_id','=',$N_empresa->id)->first();
	 				 


		$producto = $p->getProducto($url);
		 $masProductos =  $p->getMoreProducts($N_sede->id);


		 $todasSedes = Sede::where('empresa_id','=', $N_empresa->id)->get();
												$totalSedes = $todasSedes->count();		

												$slides = Archivo::where('empresa_id','=',$N_empresa->id)->get();
												$numero_slides = count($slides);			

											if($plantilla == 2)
											{
												return View::make('tiendas.detalle')->with('account',$account)->with('slides',$slides)->with('numero_slides',$numero_slides)->with('sedes',$todasSedes)->with('num_sedes',$totalSedes)->with('empresa',$N_empresa)->with('sede',$N_sede)->with('producto',$producto);
											}
											if($plantilla == 1)
									{
							
										return View::make('pint.detalle')->with('masP',$masProductos)->with('products', Cart::contents())->with('account',$account)->with('slides',$slides)->with('numero_slides',$numero_slides)->with('sedes',$todasSedes)->with('num_sedes',$totalSedes)->with('empresa',$N_empresa)->with('sede',$N_sede)->with('producto',$producto);
									}
 	}

 	public function getProductos($account)
 	{

 		$plantilla = 2;
 		$o = '';
 			if($o == '')
 			{
 				$fila = 'producto.';
 				$N_order = 'nombre';
 				$order = 'ASC';
 			}
 			if($o == '-precio')
 			{
 				$fila = 'almacen.';
 				$N_order = 'precio_detal';
 				$order = 'ASC';
 			}
 			if($o == 'p')
 			{
 				$fila = 'almacen.';
 				$N_order = 'precio_detal';
 				$order = 'DESC';
 			}

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
										return View::make('tiendas.catalogo')->with('account',$account)->with('sedes',$todasSedes)->with('num_sedes',$totalSedes)->with('empresa',$N_empresa)->with('sede',$N_sede)->with('categorias',$cat2)->with('productos',$productos);
									}
 					}
 			}
 	}

 	//funcion para agregar al carrito de compras personalizado por tienda
 	public function postCart()
 	{
 		$quantity = Input::get('quantity');
 		$url = Input::get('url');
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
			 )->where('p.id','=',Input::get('product_id'))->first();

			 Cart::insert(array(
				'id'=>$producto->id,
				'name' => $producto->producto_nombre,
				'price' => $producto->precio_detal,
				'quantity' => $quantity,
				'company' =>$producto->id_empresa,
				'image' => $producto->imagen
			));

		return Redirect::to($url);
 	}

 	public function getCart($account)
 	{
 		
 			$N_empresa = Empresa::where('nombre_publico','=',$account)->first();
	 			if(!$N_empresa)
	 			{
	 				return Redirect::to('http://www.tumegalopolis.com');
	 			}
	 			$plantilla = $N_empresa->tema;



	 				if($N_empresa->estado == 0)
	 				{
	 					return Redirect::to('http://www.tumegalopolis.com');
	 				}

		 			if($N_empresa->count())
		 			{
		 				$N_sede = Sede::where('empresa_id','=',$N_empresa->id)->first();

		 					if($N_sede->count())
		 					{
		 						
		 						


												$todasSedes = Sede::where('empresa_id','=', $N_empresa->id)->get();
												$totalSedes = $todasSedes->count();		

												
															

											if($plantilla == 2)
											{
												return View::make('tiendas.cart')->with('products', Cart::contents())->with('account',$account)->with('sedes',$todasSedes)->with('num_sedes',$totalSedes)->with('empresa',$N_empresa)->with('sede',$N_sede);
											}
											if($plantilla == 1)
											{
									
												return View::make('pint.cart')->with('products', Cart::contents())->with('account',$account)->with('sedes',$todasSedes)->with('num_sedes',$totalSedes)->with('empresa',$N_empresa)->with('sede',$N_sede);
											}
		 					}
		 			}
	

 	}

 	public function checkout($account)
 	{
 		$N_empresa = Empresa::where('nombre_publico','=',$account)->first();
	 			if(!$N_empresa)
	 			{
	 				return Redirect::to('http://www.tumegalopolis.com');
	 			}
	 			$plantilla = $N_empresa->tema;



	 				if($N_empresa->estado == 0)
	 				{
	 					return Redirect::to('http://www.tumegalopolis.com');
	 				}

		 			if($N_empresa->count())
		 			{
		 				$N_sede = Sede::where('empresa_id','=',$N_empresa->id)->first();

		 					if($N_sede->count())
		 					{
		 						
		 						

		 										if(!Auth::check())
		 										{
		 											return Redirect::action('SubdominesController@getCart',array('account'=>$account));
		 										}
		 										$ship = Shipping::where('id_user','=',Auth::user()->id)->first();
												$todasSedes = Sede::where('empresa_id','=', $N_empresa->id)->get();
												$totalSedes = $todasSedes->count();		

												$ciudades  = $this->ciudad->getCities();

												
															

											if($plantilla == 2)
											{
												return View::make('tiendas.cart')->with('products', Cart::contents())->with('account',$account)->with('sedes',$todasSedes)->with('num_sedes',$totalSedes)->with('empresa',$N_empresa)->with('sede',$N_sede);
											}
											if($plantilla == 1)
											{
									
												return View::make('pint.checkout', compact('ciudades','ship'))->with('products', Cart::contents())->with('account',$account)->with('sedes',$todasSedes)->with('num_sedes',$totalSedes)->with('empresa',$N_empresa)->with('sede',$N_sede);
											}
		 					}
		 			}
 	}




 	public function postLogin($account)
 	{
 			$remember = (Input::has('remember')) ? true : false;
				//creamos la sesion del usuario
				$auth = Auth::attempt(array(
						'email'  => Input::get('email'),
						'password' => Input::get('password'),
						'active' => 1
					), $remember);

				if($auth){

					$url_actual = Input::get('url');

					return Redirect::intended($url_actual);
				}else{
					return Redirect::back()
				->with('message-alert', 'El email o la contraseña no coinciden, o la cuenta no esta activada');
				}
 		
 	}

 	public function postOrder($account)
 	{
 		$compra  = new Carro;
 		$compra->id_user 	=	Input::get('user_id');
 		$compra->id_empresa 	=	Input::get('empresa_id');
 		$compra->total 			=	Cart::total();
 		$compra->num_items		=   Cart::totalItems();
 		 if($compra->save())
 		 {
 		 	foreach (Cart::contents() as $item) {
   			 	$newItem = new Item;
   			 	$newItem->compra_id				=	$compra->id;
   			 	$newItem->id_producto			=	$item->id;
   			 	$newItem->nombre 				=	$item->name;
   			 	$newItem->valor_unitario 		=	$item->price;
   			 	$newItem->image                 =   $item->image;
   			 	$newItem->cantidad 				= 	$item->quantity;
   			 	$newItem->valor_total			=	$item->total();
   			 	$newItem->save();
			}

			Cart::destroy();

			return Redirect::to('/')->with('message-alert','Se ha procesado tu pedido exitosamente.');
 		 }
 	}
 }