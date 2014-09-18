<?php

class BuscadorController  extends BaseController {

	public function getBuscar()
	{
		$keyword = Input::get('buscador');
		$query = explode(" ", $keyword);



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
				 'p.imagen',
				 'p.slug',
				 'p.id',
				'p.descripcion AS producto_descripcion',
				 's.nombre_publico AS nombre_sede',
				 's.direccion',
				 's.telefono',
				 's.id AS sede_id',
				 'sc.nombre_sub'
			 )

		 ->where('p.nombre', 'LIKE', '%'.$keyword.'%')
		 
		 
		 ->orWhere('p.descripcion','LIKE', '%'.$keyword.'%')
		 ->orWhere('c.nombre','LIKE', '%'.$keyword.'%')
		 ->orWhere('sc.nombre_sub','LIKE', '%'.$keyword.'%')
		 ->where('p.estado','=',1)
		 ->where('e.estado','=',1)
		 
		 

		 ->paginate(9);


		 $empresas = DB::table('empresas as e')->join('sedes as s', 'e.id','=','s.empresa_id')
		 	->select('e.id',
		 			'e.nombre_publico',
		 			'e.logo',
		 			'e.estado',
		 			'e.desc_breve',
		 			'e.desc_larga',
		 			's.nombre_publico AS nombre_sede'
		 		)->where('e.estado','=',1)->orderBy(DB::raw('RAND()'))->take(3)->get();


		
	/*$productos = DB::select(DB::raw("SELECT a.precio_detal, a.cantidad, c.nombre AS categoria_nombre, p.nombre AS producto_nombre, p.imagen, p.estado, p.id,p.slug, p.descripcion AS producto_descripcion, s.nombre_publico AS nombre_sede, s.direccion, s.id AS sede_id, s.telefono, sc.nombre_sub, e.estado 
FROM producto p
INNER JOIN almacen a ON a.producto = p.id
INNER JOIN sedes s ON a.sede = s.id
INNER JOIN empresas e ON s.empresa_id = e.id
INNER JOIN categorias c ON c.id = p.categoria
INNER JOIN subcategorias sc ON sc.categoria_id = sc.id
WHERE (
p.nombre REGEXP  '[[:<:]]{$keyword}*'
OR p.descripcion REGEXP  '[[:<:]]{$keyword}*'
OR c.nombre REGEXP  '[[:<:]]{$keyword}*'
OR sc.nombre_sub REGEXP  '[[:<:]]{$keyword}*'
)
AND p.estado =1
AND e.estado = 1
 "));*/
		
		$numPro = count($producto);
		//$producto = Paginator::make($productos, $productos, 9);




		//$pro2 =Producto::whereRaw('MATCH (imagen,nombre) AGAINST (?)' , array($keyword))->get();
		$cat =  DB::table('categorias as c')->join('subcategorias as sc','c.id','=','sc.categoria_id')
				->join('producto as p','c.id','=','p.categoria')
				->select('c.id',
							'c.nombre',
							'c.slug',
							'sc.nombre_sub AS subcat',
							'p.nombre AS nombre_pro_cat'
					)->where('c.nombre', 'LIKE', '%'.$keyword.'%')
					->distinct()->get();
			


		
			return View::make('buscador')->with('empresas',$empresas)->with('keyword',$keyword)->with('productos',$producto)->with('categorias', Categoria::all())->with('numPro',$numPro);


		


	}

}