<?php

class Item extends Eloquent {

	protected $table = 'compra_items';

	public function carro()
	{
		return $this->belongsTo('Carro');
	}
}
?>