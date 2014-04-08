<?php

class Empresa extends Eloquent {

	protected $table = 'empresas';

	protected $fillable = array('razon_social', 'email');

	public static $rules = array(
		'user_id'	=>	'integer',
		'sector_id'	=>	'integer',
		'razon_social'	=>	'required',
		'logo'		 			 =>'required|image|mimes:jpeg,jpg,bmp,png,gif'

		);


	public function user()
    {
        return $this->belongsTo('User');
    }

    public function sector(){
		return $this->belongsTo('Sector','sector_id');
	}
}