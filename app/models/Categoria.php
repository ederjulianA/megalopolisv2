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
}