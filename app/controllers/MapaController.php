<?php

class MapaController extends BaseController {

	public function getmapa()
	{
		return View::make('mapa');
	}

	public function getIndex($account)
	{
		$empresa = Empresa::where('nombre_publico','=',$account)->first();
		return 'Hola desde tercera.miaplicacion.dev!';
	}
}