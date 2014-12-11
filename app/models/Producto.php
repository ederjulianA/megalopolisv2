<?php

class Producto extends Eloquent {

	protected $table = 'producto';

	public function user(){
		return $this->belongsToMany('User','user_favoritos');
	}

	public function almacen()
	{
		return $this->belongsTo('Almacen');
	}

	public function categoria()
	{
		return $this->belongsTo('Categoria');
	}

	public function scopeLimit($query)
	{
		return $query->orderBy(DB::raw('RAND()'))->take(4);
	}

	public function getMoreProducts($id_sede)
	{
		$productos = DB::table('producto as p')->join('almacen as a','a.producto','=','p.id')
		->join('sedes as s','a.sede','=','s.id')
		->select('p.nombre',
				'p.imagen',
				'p.id',
				'p.slug',
				'a.precio_detal AS precioP',
				's.id AS sede_id'

			)
		->where('s.id','=',$id_sede)->where('p.estado','=',1)->orderBy(DB::raw('RAND()'))->take(4)->get();

		return $productos;
	}

	public function getProducto($url)
	{
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
				'p.img1',
				'p.img2',
				 's.nombre_publico AS nombre_sede',
				 's.direccion',
				 's.telefono',
				 's.id AS sede_id',
				 'sc.nombre_sub'
			 )->where('p.slug','=',$url)->first();

		 return $producto;
	}

	public function getProductoById($id)
	{
		$producto = DB::table('producto as p')->join('almacen as a','a.producto','=','p.id')
		 ->join('sedes as s','a.sede','=','s.id')
		 ->join('empresas as e', 's.empresa_id','=','e.id')
		 ->join('categorias as c','p.categoria','=','c.id')
		 ->join('subcategorias as sc','sc.categoria_id','=','sc.id')
		 ->select('a.precio_detal',
				 'a.cantidad',
				 'c.nombre AS categoria_nombre',
				 'c.id AS categoria_id',
				 'e.nombre_publico AS nombre_empresa',
				 'p.nombre AS producto_nombre',
				 'p.imagen',
				 'p.slug',
				 'p.subcat_id AS subcategoria_id',
				 'p.id',
				'p.descripcion AS producto_descripcion',
				'p.img1',
				'p.img2',
				 's.nombre_publico AS nombre_sede',
				 's.direccion',
				 's.telefono',
				 's.id AS sede_id',
				 'sc.nombre_sub',
				 'sc.id AS subcat_id'
			 )->where('p.id','=',$id)->first();

		 return $producto;
	}


	public function getAll($idEmpresa)
	{
		$productos = Producto::where('empresas.id', '=', $idEmpresa)->where('producto.estado', '=', 1)->join('almacen', 'producto.id', '=', 'almacen.producto')
													->join('sedes', 'sedes.id', '=', 'almacen.sede')

													->join('empresas', 'empresas.id', '=', 'sedes.empresa_id')
													->select('producto.nombre AS producto_nombre',
													'almacen.precio_detal',
													'producto.imagen',
													'producto.categoria',
													'producto.subcat_id',
													'producto.img1',
													'producto.img2',
													'producto.img3',
													'producto.imgSmall',
													'producto.id',
													'empresas.razon_social AS empresa_name',
													'empresas.nombre_publico AS empresa_publico',
													'almacen.sede AS producto_sede',
													'producto.descripcion AS producto_descripcion',
													'almacen.cantidad')->get();

					return $productos;
	}
}
?>