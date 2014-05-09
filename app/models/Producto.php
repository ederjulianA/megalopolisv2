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
}
?>