<?php

class EmpresasController  extends BaseController {

	public function getNuevaEmpresa(){

		return View::make('empresa.nueva');
	}

	public function empresa(){
		return View::make('empresa.index');
	}

	public function getEmpresa(){
		if(Auth::user()->tipo != 2){
			return Redirect::to('/');
		}else{

			$id = Auth::user()->id;
			$empresa = Empresa::where('user_id',"=", $id);
			if($empresa->count()){
				return Redirect::to('/empresa/admin');
			}else{
				return Redirect::to('/empresa/nueva');
			}
		}
	}
}