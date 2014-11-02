<?php

 class SubdominesController  extends BaseController
 {
 	public function getIndex($account)
 	{
 		return "HOLA".$account." DESDE EL SUBDOMINIO";
 	}

 	public function postCart()
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

		return Redirect::to('/');
 	}
 }