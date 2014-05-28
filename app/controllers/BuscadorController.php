<?php

class BuscadorController  extends BaseController {

	public function getBuscar()
	{
		$keyword = Input::get('buscador');
		$query = explode(" ", $keyword);

		$producto = DB::table('producto as p')->join('almacen as a','a.producto','=','p.id')
		->join('sedes as s','a.sede','=','s.id')
		->join('categorias as c','p.categoria','=','c.id')
		->join('subcategorias as sc','sc.categoria_id','=','c.id')
		->select('a.precio_detal',
				'a.cantidad',
				'c.nombre AS categoria_nombre',
				'p.nombre AS producto_nombre',
				'p.imagen',
				'p.id',
				'p.descripcion AS producto_descripcion',
				's.nombre_publico AS nombre_sede',
				's.direccion',
				's.telefono',
				'sc.nombre_sub'
			)
		->where('p.nombre', 'LIKE', '%' . $keyword . '%')
		->orWhere('p.descripcion','LIKE', '%' . $keyword . '%' )
		->orWhere('c.nombre','LIKE', '%' . $keyword . '%' )
		->orWhere('sc.nombre_sub','LIKE', '%' . $keyword . '%' )

		->get();

		//$pro2 =Producto::whereRaw('MATCH (imagen,nombre) AGAINST (?)' , array($keyword))->get();

		
			return View::make('buscador')->with('keyword',$keyword)->with('productos',$producto);


		


	}

}