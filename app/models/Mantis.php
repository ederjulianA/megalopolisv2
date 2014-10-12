<?php
class Mantis extends Eloquent {

	protected $table = 'mantis';

	public function empresa()
	{
		return $this->belongsTo('Empresa','empresa_id');
	}
}