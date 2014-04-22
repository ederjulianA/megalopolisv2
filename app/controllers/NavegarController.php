<?php

class NavegarController extends BaseController {

	public function getNavegar()
	{
		$ciudad = Ciudad::all();
		$categorias = Sector::all();
		$empresas = Empresa::all();

		return View::make('navegar')
		->with('ciudades',$ciudad)
		->with('categorias',$categorias)
		->with('empresas', $empresas);
	}

	public function getCategoria($id)
	{
		$empresas = Empresa::where('sector_id',"=", $id)->get();
		$ciudades = Ciudad::all();
		$categorias = Sector::all();

		if($empresas)
		{
			return View::make('categoria')->with('empresas',$empresas)->with('ciudades',$ciudades)
			->with('categorias', $categorias);
		}


	}

	public function getInfo($id)
	{
		$empresa = Empresa::find($id);
		$preguntas = Pregunta::where('empresa_id',"=", $id)->get();

		if($empresa)
		{
			return View::make('info')->with('empresa', $empresa)
			->with('preguntas', $preguntas);
		}

		return die("PAGINA NO ENCONTRADA 404");
		
	}
}