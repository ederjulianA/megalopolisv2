<?php

Class CartController  extends BaseController {


	public function postaddTocart()
	{
		$quantity = Input::get('quantity');
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

		return Redirect::to('store/cart');	
	}

	public function getCheckout1()
	{
		if(!Auth::check())
		{
			return Redirect::to('/');
		}
		$id_user = Auth::user()->id;
		$ship = Shipping::where('id_user','=',$id_user)->first();

		return View::make('store.checkout1')->with('ship', $ship)->with('products', Cart::contents())->with('ciudades',Ciudad::all() );
	}

	public function postpagarItem()
	{
		$compra = new Compra;
			$compra->id_empresa = Input::get('id_empresa');
			$compra->id_comprador = Input::get('id_comprador');
			$compra->id_producto = Input::get('id_producto');
			$compra->cantidad = Input::get('cant');
			$compra->valor_unitario = Input::get('valor_unitario');
			$compra->descuento = 0;
			$compra->valor_total = Input::get('totalItem');


			$producto = DB::table('producto as p')->join('almacen as a','a.producto','=','p.id')
		->join('sedes as s','a.sede','=','s.id')
		 ->join('categorias as c','p.categoria','=','c.id')
		 ->join('subcategorias as sc','p.subcat_id','=','sc.id')
		 ->join('empresas as e', 's.empresa_id','=','e.id')
		 ->select('a.precio_detal',
				 'a.cantidad',
				 'e.id AS id_empresa',
				 'c.nombre AS categoria_nombre',
				 'e.razon_social',
				 'e.desc_breve',
				 'p.nombre AS producto_nombre',
				 'p.imagen',
				 'p.img1',
				 'p.img2',
				 'p.img3',
				 'p.id',
				 'p.estado',
				 'p.descripcion AS producto_descripcion',
				 's.nombre_publico AS nombre_sede',
				 's.direccion',
				 's.id AS sede_id',
				 's.telefono',
				 'sc.nombre_sub'
			 )
		 ->where('p.id','=',Input::get('id_producto'))->where('p.estado','=',1)->first();
		  $almacen = Almacen::where('producto','=',Input::get('id_producto'))->first();
		  $cantidadActual = $almacen->cantidad;
		  $nuevaCantidad = ($cantidadActual - Input::get('cant'));
		  $almacen->cantidad = $nuevaCantidad;

		  $empresaVenta = Empresa::where('id','=',Input::get('id_empresa'))->first();


			if($compra->save() && $almacen->save()){
				$comprador = User::where('id','=',Input::get('id_comprador'))->first();
				$email_comprador = $comprador->email;
				$comprador_name= $comprador->username;
				$producto_nombre = $producto->producto_nombre;
				$empresa = $producto->razon_social;
				$valor_unitario = $compra->valor_unitario;
				$empresaNombre = $empresaVenta->razon_social;

				Mail::send('emails.auth.vendedor', array('link' => URL::route('mega-ventas'), 'comprador'=>$comprador_name,'cantidad'=>$compra->cantidad,'valor_total'=>$compra->valor_total,'valor_unitario'=>$valor_unitario,'empresa'=>$empresa,'producto'=>$producto_nombre), function($message) use ($empresaVenta){
						$message->to($empresaVenta->user->email, $empresaVenta->razon_social)->subject('Venta  en Megalópolis');
					});


				Mail::send('emails.auth.comprador', array('link' => URL::route('listOrders'), 'comprador'=>$comprador_name,'cantidad'=>$compra->cantidad,'valor_total'=>$compra->valor_total,'valor_unitario'=>$valor_unitario,'empresa'=>$empresa,'producto'=>$producto_nombre), function($message) use ($comprador){
						$message->to($comprador->email, $comprador->username)->subject('Compra en Megalópolis');
					});

				$item = Cart::item(Input::get('identifier'));
				$item->remove();
				return 	Redirect::to('/store/cart/')->with('message-alert','SOLICITUD DE PRODUCTO EXITOSA. ');
			}
	}



	public function getCheckout2($identifier)
	{
		if(!Auth::check())
		{
			return Redirect::to('/');
		}
		$id_user = Auth::user()->id;
		$ship = Shipping::where('id_user','=',$id_user)->first();
		$item = Cart::item($identifier);

		return View::make('store.checkout1')->with('ship', $ship)->with('products', Cart::contents())->with('item',$item)->with('ciudades',Ciudad::all() );
	}

	public function postCantidadAjax()
	{
		header('Content-type: text/javascript');

		if(isset($_POST['identifier']) && isset($_POST['cantidad']) && isset($_POST['id_producto']))
		{
			$identifier = $_POST['identifier'];
			$cantidad = $_POST['cantidad'];
			$id_pro = $_POST['id_producto'];

			$pro_almacen = Almacen::where('producto','=',$id_pro)->first();
			

			 if($pro_almacen->cantidad >= $cantidad)
			 {
			 	$estado = array('estado'=>1,'mensaje'=>'Carrito actualizado');
				

				$item = Cart::item($identifier);
				$item->quantity = $cantidad;

				return Response::json($estado);
			}else{
				$disponible = $pro_almacen->cantidad;

				$estado = array('estado'=>0,'mensaje'=>'Cantidad No disponible','disponible'=>$disponible);
				return Response::json($estado);
			}

			

		}
	}

	public function getCart()
	{
		if(Auth::check())
		{
			$id_user = Auth::user()->id;
			$ship = Shipping::where('id_user','=',$id_user)->first();
			return View::make('store.cart')->with('ship',$ship)->with('products', Cart::contents());
		}
		return View::make('store.cart')->with('products', Cart::contents());
	}

	public function getRemoveitem($identifier)
	{
		$item = Cart::item($identifier);
		$item->remove();
		return Redirect::to('store/cart');
	}
}