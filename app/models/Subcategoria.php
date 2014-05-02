<?php

class Subcategoria extends Eloquent {

	protected $table = 'subcategorias';


	public function categoria()
	{
		return $this->belongsTo('Categoria');
	}
}