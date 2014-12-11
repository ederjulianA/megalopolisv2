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

	public function getQuestionsNull($empresa_id)
	{
		return Pregunta::where('empresa_id','=',$empresa_id)->where('respuesta','=', NULL)->orderBy('created_at','desc')->get();
	}

	public function getChat($id)
	{
		$preg = DB::table('preguntas as pr')->join('users as u','u.id','=','pr.user_id')
					->join('producto as p','p.id','=','pr.id_producto')
					->select('pr.id',
							'pr.pregunta',
							'u.username',
							'p.nombre AS nombre_producto',
							'p.imagen',
							'pr.respuesta',
							'pr.user_id'

						)->where('pr.id','=',$id)->first();
		return $preg;
	}

	public function getAllChats($empresa_id)
	{
		return Pregunta::where('empresa_id','=',$empresa_id)->orderBy('created_at','desc')->get();
	}


}	