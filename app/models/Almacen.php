<?php

class Almacen extends Eloquent {

	protected $table = 'almacen';

	public function producto()
	{
		return $this->hasMany('Producto');
	}
}
?>