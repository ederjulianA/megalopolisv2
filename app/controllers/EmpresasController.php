<?php

class EmpresasController  extends BaseController {

	public function __construct(){
		//parent::__construct();
		$this->beforeFilter('csrf', array('on'=>'post'));
		$this->beforeFilter('mega');
	}

	public function getNuevaEmpresa(){

		return View::make('empresa.nueva');
	}




	public function getCambiarImagen()
	{
		$id = Auth::user()->id;

		$user = User::where('id',"=",$id);
		$empresa = Empresa::where("user_id","=",$id);

		if($user->count() && $empresa->count())
		{
			$user = $user->first();
			$empresa = $empresa->first();	
			return View::make('empresa.cambiarImg')
			->with('user', $user)
			->with('empresa', $empresa);
		}

		return Redirect::to('/mega/perfil')
			->with('message-alert','error al ingresar ');
		
	}


	public function postCambiarImagen()
	{
		$validator = Validator::make(Input::all(),
				array(
						'nuevo_logo' => 'required|image|mimes:jpeg,jpg,bmp,png,gif'
					)

			);

		if($validator->passes())
		{
			$id = Auth::user()->id;
			$empresa = Empresa::find(Input::get('id_empresa'));

			if($empresa)
			{
				File::delete('public/'.$empresa->logo);
				$logo = Input::file('nuevo_logo');
				$codigoIMG = str_random(13);
				$filename = date('Y-m-d-H')."-".$codigoIMG."-".$logo->getClientOriginalName();
				Image::make($logo->getRealPath())->resize(468, 249)->save('public/img/empresas/'.$filename);
				$empresa->logo = 'img/empresas/'.$filename;
				$empresa->save();
				return Redirect::to('/mega/cambiar/imagen')
					->with('message-alert','Imagen Actualizada exitosamente');

			}
			else
			{
				return die("ERROR");
			}
			

		}
		else
		{
			return Redirect::to('/mega/cambiar/imagen')
				->with('message-alert','Se presentaron Problemas al actualizar la imagen')
				->withErrors($validator);
		}
	}

	public function empresa(){
		return View::make('empresa.index');
	}

	public function postActualizarInfo(){
		if( !Auth::check() || Auth::user()->tipo != 2)
		{
			return Redirect::to('/');
		}

		$validator = Validator::make(Input::all(), Empresa::$rules);

		if($validator->passes())
		{
			$id_user = Auth::user()->id;

			$empresa = Empresa::find(Input::get('id_empresa'));
				if($empresa)
				{
					

					$empresa->razon_social = Input::get('razon_social');

					
					$empresa->desc_breve = Input::get('descripcion_breve');
					$empresa->desc_larga = Input::get('descripcion_larga');
					$empresa->save();
					return Redirect::to('/mega/perfil')
					->with('message-alert','Actualizacion Correcta');
				}

			
					return Redirect::to('/mega/perfil')
					->with('message-alert','Error al actualizar');
		
			
		
		}
		return Redirect::to('/mega/perfil')
					->with('message-alert','Error al actualizar')
					->withErrors($validator);
		

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
			$empresa->desc_breve = Input::get('descripcion_breve');
			$empresa->desc_larga = Input::get('descripcion_larga');

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
		//validamos que exista uns sesion de usuario y que el tipo de usuario sea igual a 2 
		if( Auth::user()->tipo != 2){
			return Redirect::to('/');
		}else{

			$id = Auth::user()->id;
			$user = User::where('id', "=", $id);
			$empresa = Empresa::where('user_id',"=", $id);
			if($empresa->count() && $user->count()){
				$empresa = $empresa->first();
				$user = $user->first();

				
				return Redirect::to('/mega/perfil')
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