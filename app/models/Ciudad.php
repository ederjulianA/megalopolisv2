<?php


class Ciudad extends Eloquent {

	protected $table = 'ciudades';

	protected $fillable = array( 'ciudad');

	public static $rules = array(
			'ciudad' => 'required'

		);

	public function empresa()
	{
		return $this->hasMany('Empresa');
	}
}