<?php

class EmpresasController  extends BaseController {

	public function getNuevaEmpresa(){

		return View::make('empresa.nueva');
	}

	public function empresa(){
		return View::make('empresa.index');
	}

	public function postCrear(){
		$validator	=	Validator::make(Input::all(), Empresa::$rules);

		if($validator->passes()){
			$empresa = new Empresa;

			$empresa->user_id = Input::get('user_id');
			$empresa->sector_id = Input::get('sector');
			$empresa->razon_social = Input::get('razon_social');
			$logo = Input::file('logo');
			$filename = date('Y-m-d-H')."-".$logo->getClientOriginalName();
			Image::make($logo->getRealPath())->resize(468, 249)->save('public/img/empresas/'.$filename);
			$empresa->logo = 'img/empresas/'.$filename;

			if($empresa->save()){
				return Redirect::to('/')
					->with('message-alert', 'Felicidades has creado exitosamente tu empresa');
			}

		}

		return Redirect::to('/empresa')
				->with('message-alert','Hubieron Problemas al crear la empresa. Intentalo de nuevo ')
				->withErrors($validator)
				->withInput();
	}

	public function getEmpresa(){
		if( !Auth::user() || Auth::user()->tipo != 2){
			return Redirect::to('/');
		}else{

			$id = Auth::user()->id;
			$user = User::where('id', "=", $id);
			$empresa = Empresa::where('user_id',"=", $id);
			if($empresa->count() && $user->count()){
				$empresa = $empresa->first();
				$user = $user->first();

				
				return Redirect::to('/empresa/admin')
					->with('empresa' , $empresa )
					->with('user' , $user );
					
			}else{
					/*$sectores = array();

					foreach(Sector::all() as $sector){
					$sectores[$sector->id] = $sector->nom_sector;
					}*/
				return View::make('empresa.nueva')
				->with('sectores' ,  Sector::all());
			}
		}
	}
}