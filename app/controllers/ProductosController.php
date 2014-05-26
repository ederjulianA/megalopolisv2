<?php

class ProductosController  extends BaseController {

	public function getProducto($id)
	{

		$producto = DB::table('producto as p')->join('almacen as a','a.producto','=','p.id')
		->join('sedes as s','a.sede','=','s.id')
		->select('a.precio_detal',
				'p.nombre',
				'p.imagen',
				'p.descripcion',
				's.nombre_publico AS nombre_sede',
				's.direccion',
				's.telefono'
			)
		->where('p.id','=',$id)->first();
		//->join('almacen as a','a.producto','=','p.id')
		//->select('a.precio_detal')
		

		

			return View::make('empresa.producto')->with('producto',$producto);
		

	}
}