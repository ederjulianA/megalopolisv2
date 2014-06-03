<?php

class HomeController extends BaseController {



	public function getIndex()

	{
		$empresas = Empresa::where('estado','=',1)->orderBy(DB::raw('RAND()'))->take(4)->get();
		return View::make('index')->with('empresas',$empresas);
	}

	public function getLogin(){
		if(Auth::check()){
			return Redirect::to('/');
		}
		return View::make('mega.login');
	}

	public function getRegistro(){
		if(Auth::check()){
			return Redirect::to('/');
		}
		return View::make('mega.registro');
	}

	public function getLanding()

	{
		$empresas = Empresa::where('estado','=',1)->orderBy(DB::raw('RAND()'))->take(4)->get();
		if($empresas->count())
		{
			return View::make('landing')->with('empresas',$empresas);
		}

		
	}

}