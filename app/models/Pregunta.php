<?php

class Pregunta extends Eloquent {

	protected $table = 'preguntas';

	protected $fillable = array('pregunta', 'respuesta');

	public static $rules = array(
			'pregunta' => 'required|min:5|max:250',
			'respuesta' => 'required|min:5|max:250'

		);


	public function empresa()
	{
		return $this->belongsTo('Empresa', 'empresa_id');
	}


}	