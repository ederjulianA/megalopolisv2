<?php

class Archivo extends Eloquent {

	protected $table = 'files';

	public function empresa()
	{
		return $this->belongsTo('Empresa');
	}
}