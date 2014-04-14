<?php

class UsersController extends BaseController{

	public function __construct(){
		//parent::__construct();
		$this->beforeFilter('csrf', array('on'=>'post'));
		//$this->beforeFilter('mega');
	}


		public function postCreate(){
		$validator	=	Validator::make(Input::all(), User::$rules);

		if($validator->passes()) {
			$user = new User;
			$user->username	=	Input::get('username');
			
			$user->email		=	Input::get('email');
			
			$user->password_temp = "";
			
			
			$img = Input::file('img');
			$filename = date('Y-m-d-H')."-".$img->getClientOriginalName();
			/*$imgPath = $destinationPath.$filename;*/
			Image::make($img->getRealPath())->resize(468, 249)->save('public/img/users/'.$filename);
			$user->img = 'img/users/'.$filename;

			
			
			
			$user->code = "";
			$user->active = 1;
			$user->password		=	Hash::make(Input::get('password'));
			$user->tipo	=	Input::get('tipo');
			$user->save();

			return Redirect::to('/get-login')
				->with('message-alert','Gracias Por registrarte Ya puedes Iniciar Ssion :)');
		}

		return Redirect::to('/get-registro')
			->with('message-alert','Algo salio mal Vuelve a intentarlo')
			->withErrors($validator)
			->withInput();
	}

	public function perfil(){
		if(!Auth::user()  || Auth::user()->tipo != 2){
			return Redirect::to('/');
		}
		$id = Auth::user()->id;
		$user = User::where('id',"=", $id);
		if($user->count()){
				$user = $user->first();
				return View::make('mega.perfil')
				->with('user' , $user);
			}
	}



	public function postLogin(){
		if(Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')))) {

			
			return Redirect::intended('/')->with('message-alert','Gracias Por Inicar Sesion.');
		}
		return Redirect::to('/get-login')->with('message-alert','Combinacion de email o contraseña Incorrecta');
	}

	public function cerrarSesion() {
		Auth::logout();
		return Redirect::to('/')->with('message-alert','Has Cerrado Sesion');
	}


}