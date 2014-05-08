<?php

class Producto extends Eloquent {

	protected $table = 'producto';

	public function user(){
		return $this->belongsToMany('User');
	}
}
?>