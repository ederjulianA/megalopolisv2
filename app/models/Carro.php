<?php

class Carro extends Eloquent {

	protected $table = 'cart';

	public function items()
	{
		return $this->hanMany('Item');
	}

	public function getAllOrders($empresa_id)
	{
		return Carro::where('id_empresa','=',$empresa_id)->get();
	}
}
?>