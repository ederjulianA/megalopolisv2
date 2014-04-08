<?php

class Sector extends Eloquent {

	protected $table = 'sectores';

	public  $timestamps = false;

	public function empresa(){
		return $this->hasMany('Empresa');
	}
}