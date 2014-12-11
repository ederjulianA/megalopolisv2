<?php

class Categoria extends Eloquent {

	protected $table = 'categorias';
	
	
	public function subcategoria()
	{
		return $this->hasMany('Subcategoria');
	}
	public function productos()
	{
		return $this->hasMany('Producto');
	}

	public function getAll()
	{
		return  array('' => 'Por favor Seleccione la categoria') +  Categoria::lists('nombre', 'id');
	}

	public function getAllSubcats($idCat)
	{
		return Subcategoria::where('categoria_id', '=', $idCat)->get();
	}
}