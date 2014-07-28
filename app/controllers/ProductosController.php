<?php

class ProductosController  extends BaseController {

	public function getProducto($id,$sede)
	{

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
		 ->where('p.id','=',$id)->where('p.estado','=',1)->first();

		 $tags = Tag::where('producto','=',$id)->get();
		

		$masProductos =  DB::table('producto as p')->join('almacen as a','a.producto','=','p.id')
		->join('sedes as s','a.sede','=','s.id')
		->select('p.nombre',
				'p.imagen',
				'p.id',
				'a.precio_detal AS precioP',
				's.id AS sede_id'

			)
		->where('s.id','=',$sede)->where('p.estado','=',1)->orderBy(DB::raw('RAND()'))->take(8)->get();

		
		 //$masProductos =  Producto::where('estado','=',1)->orderBy(DB::raw('RAND()'))->take(3)->get();
		

		

			return View::make('empresa.producto')->with('producto',$producto)->with('tags',$tags)->with('categorias', Categoria::all())->with('masProductos',$masProductos);
		

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