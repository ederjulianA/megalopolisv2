<?php

class ProductosController  extends BaseController {


	public function CompraPost()
	{
		if(!Auth::check() || Auth::user()->tipo != 1)
		{
			return Redirect::to('/');
		}else
		{
			$compra = new Compra;
			$compra->id_empresa = Input::get('id_empresa');
			$compra->id_comprador = Input::get('id_comprador');
			$compra->id_producto = Input::get('id_producto');
			$compra->cantidad = Input::get('cantidad');
			$compra->valor_unitario = Input::get('valor_unitario');
			$compra->descuento = 0;
			$compra->valor_total = Input::get('valor_total');


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
		  $nuevaCantidad = ($cantidadActual - Input::get('cantidad'));
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
				return View::make('empresa.exitoCompra')->with('message-alert','Compra exitosa')->with('producto',$producto);
			}

		}
	}

	public function getProducto($id,$sede)
	{

		

	$producto = DB::table('producto as p')->join('almacen as a','a.producto','=','p.id')
		->join('sedes as s','a.sede','=','s.id')
		 ->join('categorias as c','p.categoria','=','c.id')
		 ->join('subcategorias as sc','p.subcat_id','=','sc.id')
		 ->join('empresas as e', 's.empresa_id','=','e.id')
		 ->join('users as u', 'e.user_id','=','u.id')
		 ->select('a.precio_detal',
				 'a.cantidad',
				 'e.estado AS estado_empresa',
				 'e.id AS id_empresa',
				 'c.nombre AS categoria_nombre',
				 'e.razon_social',
				 'e.nombre_publico AS nombre_publico_empresa',
				 'e.desc_breve AS desc_breve_empresa',
				 'e.desc_larga',
				 'e.direccion_principal AS direccion_empresa',
				 'e.telefono',
				 'p.nombre AS producto_nombre',
				 'p.imagen',
				 'p.slug',
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
				 'sc.nombre_sub',
				 'u.email AS email_empresa'
			 )
		 ->where('p.id','=',$id)->where('p.estado','=',1)->first();
		

		 if($producto->estado_empresa == 0){
		 	return Redirect::to('/empresa/'.$producto->nombre_publico_empresa);
		 }

		 $tags = Tag::where('producto','=',$id)->get();
		
		$ciudades = Ciudad::where('id','>',0)->orderBy('ciudad','asc')->get();

		$masProductos =  DB::table('producto as p')->join('almacen as a','a.producto','=','p.id')
		->join('sedes as s','a.sede','=','s.id')
		->select('p.nombre',
				'p.imagen',
				'p.id',
				'p.slug',
				'a.precio_detal AS precioP',
				's.id AS sede_id'

			)
		->where('s.id','=',$sede)->where('p.estado','=',1)->orderBy(DB::raw('RAND()'))->take(8)->get();

		
		 //$masProductos =  Producto::where('estado','=',1)->orderBy(DB::raw('RAND()'))->take(3)->get();
		

			if(Auth::check())
		{
			$idUser = Auth::user()->id;
			$ship = Shipping::where('id_user','=',$idUser)->first();
			return View::make('empresa.producto')->with('producto',$producto)->with('ciudades',$ciudades)->with('ship',$ship)->with('tags',$tags)->with('categorias', Categoria::all())->with('masProductos',$masProductos);
		}

			return View::make('empresa.producto')->with('producto',$producto)->with('ciudades',$ciudades)->with('tags',$tags)->with('categorias', Categoria::all())->with('masProductos',$masProductos);
		

	}

	public function carritoPrevio()
	{
		if(!Auth::check() || Auth::user()->tipo != 1)
		{
				return Redirect::to('/');
		}else{
			$producto = DB::table('producto as p')->join('almacen as a','a.producto','=','p.id')
		->join('sedes as s','a.sede','=','s.id')
		 ->join('categorias as c','p.categoria','=','c.id')
		 ->join('subcategorias as sc','sc.categoria_id','=','sc.id')
		 ->join('empresas as e', 's.empresa_id','=','e.id')
		 ->select('a.precio_detal',
				 'a.cantidad',
				 'c.nombre AS categoria_nombre',
				 'e.razon_social',
				 'e.estado AS estado_empresa',
				 'e.nombre_publico AS nombre_publico_empresa',
				 'e.id AS id_empresa',
				 'e.desc_breve',
				 'p.nombre AS producto_nombre',
				 'p.imagen',
				 'p.id',
				 'p.descripcion AS producto_descripcion',
				 's.nombre_publico AS nombre_sede',
				 's.direccion',
				 's.telefono',
				 'sc.nombre_sub'
			 )
		 ->where('p.id','=',Input::get('id_producto'))->first();

		 if($producto->estado_empresa == 0){
		 	return Redirect::to('/empresa/'.$producto->nombre_publico_empresa);
		 }
		 $preguntas = Pregunta::where('empresa_id',"=", Input::get('id_empresa'))->get();
		 return View::make('empresa.compra')->with('producto',$producto)->with('preguntas',$preguntas);
		}
	}

	public function landingPro2()
	{
		$producto = DB::table('producto as p')->join('almacen as a','a.producto','=','p.id')
		->join('sedes as s','a.sede','=','s.id')
		 ->join('categorias as c','p.categoria','=','c.id')
		 ->join('subcategorias as sc','sc.categoria_id','=','sc.id')
		 ->join('empresas as e', 's.empresa_id','=','e.id')
		 ->select('a.precio_detal',
				 'a.cantidad',
				 'c.nombre AS categoria_nombre',
				 'e.razon_social',
				 'e.desc_breve',
				 'p.nombre AS producto_nombre',
				 'p.imagen',
				 'p.id',
				 'p.descripcion AS producto_descripcion',
				 's.nombre_publico AS nombre_sede',
				 's.direccion',
				 's.telefono',
				 'sc.nombre_sub'
			 )
		 ->where('p.id','=',39)->first();

		 $tags = Tag::where('producto','=',39)->get();
		 $masProductos =  Producto::where('estado','=',1)->orderBy(DB::raw('RAND()'))->take(3)->get();
		return View::make('empresa.pro2')->with('producto', $producto)->with('tags',$tags)->with('categorias', Categoria::all())->with('masProductos',$masProductos);
	}

	public function getProduct()
	{
		return View::make('empresa.product-detail');
	}
}