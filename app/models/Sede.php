<?php

class Sede extends Eloquent {

	protected $table = "sedes";


	public function empresa()
	{
		return $this->belongsTo('Empresa');

	}

	public function promocion()
	{
		return $this->hasMany('Promociones');

	}
}