<?php

class NavegarController extends BaseController {

	public function getNavegar()
	{
		$ciudad = Ciudad::all();
		$categorias = Sector::all();
		$empresas = Empresa::where('estado','=',1)->get();
		//$promocion = Promociones::where('estado','=',1)->orderBy(DB::raw('RAND()'))->take(1)->first();


		

		return View::make('navegar')
		->with('ciudades',$ciudad)
		->with('categorias',$categorias)
		->with('empresas', $empresas);
		
		
	}

	public function getNav()
	{
		return View::make('navegar2');
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

	public function getInfo($nombre_publico)
	{
		$empresa = Empresa::where('nombre_publico',"=", $nombre_publico)->get();
		//$empresa = Empresa::find($id);
		

		if($empresa->count())
		{

			$empresa = $empresa->first();
			$sede = Sede::where('empresa_id','=', $empresa->id)->get();
			$num_sedes = $sede->count();
			$preguntas = Pregunta::where('empresa_id',"=", $empresa->id)->get();
			return View::make('info')->with('empresa', $empresa)
			->with('sedes', $sede)
			->with('num_sedes', $num_sedes)
			->with('preguntas', $preguntas);
		}

		return die("PAGINA NO ENCONTRADA 404");
		
	}
	
}
