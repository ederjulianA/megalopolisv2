<?php

class BuscadorController  extends BaseController {

	public function getBuscar()
	{
		$keyword = Input::get('buscador');
		$query = explode(" ", $keyword);



		// $producto = DB::table('producto as p')->join('almacen as a','a.producto','=','p.id')
		// ->join('sedes as s','a.sede','=','s.id')
		// ->join('categorias as c','p.categoria','=','c.id')
		// ->join('subcategorias as sc','sc.categoria_id','=','sc.id')
		// ->select('a.precio_detal',
				// 'a.cantidad',
				// 'c.nombre AS categoria_nombre',
				// 'p.nombre AS producto_nombre',
				// 'p.imagen',
				// 'p.id',
				// 'p.descripcion AS producto_descripcion',
				// 's.nombre_publico AS nombre_sede',
				// 's.direccion',
				// 's.telefono',
				// 'sc.nombre_sub'
			// )
		// ->where('p.nmbre', 'REGEXP', '[[:<:]]'.$keyword.'*')
		// ->orWhere('p.descripcion','REGEXP', "[[:<:]]".$keyword."*")
		// ->orWhere('c.nombre','REGEXP', "[[:<:]]".$keyword."*")
		// ->orWhere('sc.nombre_sub','REGEXP', "[[:<:]]".$keyword."*")

		// ->get();
		
		$producto = DB::select(DB::raw("SELECT 
  a.precio_detal,
  a.cantidad,
  c.nombre AS categoria_nombre,
  p.nombre AS producto_nombre,
  p.imagen,
  p.id,
  p.descripcion AS producto_descripcion,
  s.nombre_publico AS nombre_sede,
  s.direccion,
  s.telefono,
  sc.nombre_sub 
FROM
  producto p 
  INNER JOIN almacen a 
    ON a.producto = p.id 
  INNER JOIN sedes s 
    ON a.sede = s.id 
  INNER JOIN categorias c 
    ON c.id = p.categoria 
  INNER JOIN subcategorias sc 
    ON sc.categoria_id = sc.id 
WHERE p.nombre REGEXP '[[:<:]]{$keyword}*'
  OR p.descripcion REGEXP '[[:<:]]{$keyword}*' 
  OR c.nombre REGEXP '[[:<:]]{$keyword}*' 
  OR sc.nombre_sub REGEXP '[[:<:]]{$keyword}*'"));
		
		$numPro = count($producto);



		//$pro2 =Producto::whereRaw('MATCH (imagen,nombre) AGAINST (?)' , array($keyword))->get();

		
			return View::make('buscador')->with('keyword',$keyword)->with('productos',$producto)->with('numPro',$numPro);


		


	}

}