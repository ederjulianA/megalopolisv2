<?php

class Empresa extends Eloquent {

	protected $table = 'empresas';

	protected $fillable = array('razon_social', 'email');

	public static $rules = array(
		'user_id'	=>	'required|integer',
		'sector_id'	=>	'required|integer',
		'razon_social'	=>	'required',
		'img'		 			 =>'required|image|mimes:jpeg,jpg,bmp,png,gif'

		);


	public function user()
    {
        return $this->belongsTo('User');
    }
}