<?php

class ProductosController  extends BaseController {

	public function getProducto($id)
	{

	$producto = DB::table('producto as p')->join('almacen as a','a.producto','=','p.id')
		->join('sedes as s','a.sede','=','s.id')
		 ->join('categorias as c','p.categoria','=','c.id')
		 ->join('subcategorias as sc','sc.categoria_id','=','c.id')
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
		 ->where('p.id','=',$id)->first();

		 $tags = Tag::where('producto','=',$id)->get();
		$img = $producto->imagen;
	
		 $masProductos =  Producto::where('estado','=',1)->orderBy(DB::raw('RAND()'))->take(3)->get();
		

		

			return View::make('empresa.producto')->with('producto',$producto)->with('tags',$tags)->with('categorias', Categoria::all())->with('masProductos',$masProductos);
		

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
}