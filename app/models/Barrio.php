<?php

class Barrio extends Eloquent {

	protected $table = 'barrios';

	public function ciudad()
	{
		return $this->belongsTo('Ciudad','ciudad_id');
	}
}