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
		return View::make('store.cart')->with('products', Cart::contents());
	}

	public function getRemoveitem($identifier)
	{
		$item = Cart::item($identifier);
		$item->remove();
		return Redirect::to('store/cart');
	}
}