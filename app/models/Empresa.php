<?php

class Empresa extends Eloquent {

	protected $table = 'empresas';

	protected $fillable = array('razon_social', 'email');

	public static $rules = array(
		'user_id'	=>	'integer',
		'ciudad' =>	'integer',
		'sector_id'	=>	'integer',
		'razon_social'	=>	'required',
		'direccion_principal' => 'required|min:5|max:150',
		'descripcion_breve' => 'required|min:5|max:250',
		'descripcion_larga' => 'min:5|max:2500',
		'telefono' =>		'required',
		'logo'		 			 =>'image|mimes:jpeg,jpg,bmp,png,gif'

		);


	public function user()
    {
        return $this->belongsTo('User');
    }

    public function sector(){
		return $this->belongsTo('Sector','sector_id');
	}

	public function ciudad(){
		return $this->belongsTo('Ciudad');
	}
	public function pregunta(){
		return $this->hasMany('Pregunta');
	}
}