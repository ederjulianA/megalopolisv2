<?php

class Archivo extends Eloquent {

	protected $table = 'files';

	public function empresa()
	{
		return $this->belongsTo('Empresa');
	}

	public function getAllSlides($idEmpresa)
	{
		return Archivo::where('empresa_id','=',$idEmpresa)->get();
	}

	public function getNumSlides($idEmpresa)
	{
		$slides = Archivo::where('empresa_id','=',$idEmpresa)->get();
		$num_slides = count($slides);
		return $num_slides;
	}
}