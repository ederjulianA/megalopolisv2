<?php

class UsersController extends BaseController{

	public function __construct()	{
		//parent::__construct();
		$this->beforeFilter('csrf', array('on'=>'post'));
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

			return Redirect::to('/')
				->with('message-alert','Gracias Por registrarte Ya puedes Iniciar Ssion :)');
		}

		return Redirect::to('/')
			->with('message-alert','Algo salio mal Vuelve a intentarlo')
			->withErrors($validator)
			->withInput();
	}
}