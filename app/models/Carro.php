<?php

class Carro extends Eloquent {

	protected $table = 'cart';

	public function items()
	{
		return $this->hanMany('Item');
	}
}
?>