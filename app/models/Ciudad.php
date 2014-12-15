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

	public function getCities()
	{
		return Ciudad::lists('ciudad', 'id');
	}

	public function barrio()
	{
		return $this->hasMany('Barrio');
	}
}