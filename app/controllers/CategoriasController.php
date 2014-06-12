<?php

class CategoriasController  extends BaseController {

	public function getCategorias($id)
	{
		$categorias = Categoria::all();
		$cat = Categoria::where('id','=',$id)->first();

		$producto = DB::table('producto as p')->join('almacen as a','a.producto','=','p.id')
		->join('sedes as s','a.sede','=','s.id')
		->join('categorias as c','p.categoria','=','c.id')
		->join('subcategorias as sc','sc.categoria_id','=','sc.id')
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
			 )->where('p.categoria','=',$id)->get();

		$numProductos = count($producto);

		return View::make('categorias')->with('categorias',$categorias)->with('cat',$cat)->with('numPro',$numProductos)->with('producto',$producto);

	}

}