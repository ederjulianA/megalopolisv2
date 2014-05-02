<?php

class Promociones extends Eloquent {


	protected $table = 'promociones';


	public function sede()
	{
		return $this->belongsTo('Sede');
	}

	public function categoria()
	{
		return $this->belongsTo('Categoria');
	}
}