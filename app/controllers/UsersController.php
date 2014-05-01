<?php



// import the Intervention Image Class
use Intervention\Image\Image;

class UsersController extends BaseController{

	public function __construct(){
		//parent::__construct();
		$this->beforeFilter('csrf', array('on'=>'post'));
		//$this->beforeFilter('mega');
	}


	public function getOlvidoPass()
	{
		return View::make('mega.olvidoPass');
	}

	public function postOlvidoPass()
	{
		$validator = Validator::make(Input::all(),
				array(
						'email' => 'required|email'
					)
			);

		if($validator->fails()){
			return Redirect::to('/recuperar-cuenta')
			->withErrors($validator)
			->withInput()
			->with('message-alert','Algo salio mal, porfavor verifica');
		}else{

			$user = User::where('email',"=",Input::get('email'));

			if($user->count())
			{
				$user = $user->first();

				$code = str_random(60);
				$password = str_random(10);

				$user->code = $code;
				$user->password_temp = Hash::make($password);

				if($user->save()){
					Mail::send('emails.auth.recuperar', array('link' => URL::route('recuperar-cuenta-code', $code),'username' => $user->username, 'password' => $password), function($message) use($user){
				    		$message->to($user->email, $user->username)->subject("Tu nueva contrasena");
				    	});
					return Redirect::route('recuperar-cuenta')
					->with("message-alert","Ya hemos enviado tu nueva contraseña a tu email de registro, porfavor verifica");
				}else{
					return Redirect::route('recuperar-cuenta')
					->with("message-alert","Se presentaron problemas al intentar actualizar la contraseña. Porfavor vuelve a intentarlo.");
				}
			}
			return Redirect::route('recuperar-cuenta')
					->with("message-alert","No hemos encontrado ningun email que coincida con el que espesificaste, porfavor Verifica tu email.");
		}


	}

	public function getRecuperar($code)
	{

		$user = User::where('code','=',$code)->where('password_temp','!=','');

		if($user->count()){
			$user = $user->first();

			$user->password  = $user->password_temp;
			$user->password_temp = '';
			$user->code ='';

			if($user->save()){
				return Redirect::route('index')
				->with('message-alert','Tu contraseña se ha actualizado correctamente');
			}


		}
		return Redirect::route('recuperar-cuenta')
		->with('message-alert','Se presentaron problemas al intentar actualizar la contraseña. Intenta de nuevo');

	}

	// METODO DE ACTIVACION DE LA CUENTA DE USUARIO

	public function getActivate($codigo_activacion)
	{
			$user = User::where('code', '=', $codigo_activacion)->where('active', '=',0);

				if($user->count()){
					$user = $user->first();
						//actualizamos el registro a activo

					$user->active = 1;
					$user->code   = '';

					if($user->save()){
						return Redirect::route('index')
					->with('message-alert','Cuenta Activada. :)');

					}
				}
				return Redirect::route('index')
					->with('message-alert','No hemos podido activar tu cuenta. :(');
	}

	//METODO CREAR NUEVO USUARIO


		public function postCreate(){
		$validator	=	Validator::make(Input::all(), User::$rules);

		if($validator->passes()) {
			$user = new User;
			$user->username	=	Input::get('username');
			
			$user->email		=	Input::get('email');
			
			$user->password_temp = "";
			$codigoIMG = str_random(13);
			
			$img = Input::file('img');
			$filename = date('Y-m-d-H')."-".$codigoIMG."-".$img->getClientOriginalName();
			/*$imgPath = $destinationPath.$filename;*/
			Image::make($img->getRealPath())->resize(468, 249)->save(public_path().'/img/users/'.$filename);
			$user->img = 'img/users/'.$filename;
			$codigo_activacion = str_random(60);

			
			
			
			$user->code = $codigo_activacion;
			$user->active = 0;
			$user->password		=	Hash::make(Input::get('password'));
			$user->tipo	=	Input::get('tipo');
			
			if($user->save())
			{
					Mail::send('emails.auth.activate', array('link' => URL::route('activar-cuenta',$codigo_activacion), 'username'=>$user->username, 'pass' => Input::get('password'), 'email' =>Input::get('email')), function($message) use ($user){
						$message->to($user->email, $user->username)->subject('Activa tu cuenta');
					});


					return Redirect::to('/login')
				->with('message-alert','Gracias Por registrarte. Te hemos enviado un email con un codigo de activacion :)');
			}

			
		}

		return Redirect::to('/registro')
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
		$empresa = Empresa::where('user_id',"=", $id);
		if($user->count() && $empresa->count()){
				$user = $user->first();
				$empresa = $empresa->first();
				$sede = Sede::where('empresa_id','=', $empresa->id)->get();
				$num_sedes = $sede->count();
				return View::make('mega.perfil')
				->with('user' , $user)
				->with('num_sedes', $num_sedes)
				->with('empresa', $empresa);
			}
	}

	public function postCambiarPassword()
	{
		$validator = Validator::make(Input::all(),
				array(
						'contrasena_actual' => 'required',
						'nueva_contrasena' => 'required|min:8',
						'confirmar_contrasena' => 'required|same:nueva_contrasena'
					)

			);

		if($validator->fails())
		{
			return Redirect::to('/mega/perfil')->with('message-alert','Error en el formulario')->withErrors($validator);
		}else
		{
			//CAMBIAMOS LA CONTRASEÑA DEL USUARIO

			$user = User::find(Auth::user()->id);

			$old_password = Input::get('contrasena_actual');
			$password = Input::get('nueva_contrasena');

			if(Hash::check($old_password, $user->getAuthPassword())){
				$user->password = Hash::make($password);

					if($user->save()){
						return Redirect::to('/mega/perfil')
						->with('message-alert','Contreaseña actualizada');
					}
			}else{
						return Redirect::to('/mega/perfil')
						->with('message-alert','Las contraseñas No coinciden');
					}
		}

		return Redirect::to('/maga/perfil')->with('message-alert','Error al intentar actualizar tu contraseña');

	}



	public function postLogin(){
		
			$validator = Validator::make(Input::all(),array(

					'email' => 'required|email',
					'password' => 'required'
				)

			);

			if($validator->fails()){

				//redirigimos al usuario al log in
				return Redirect::route('login')
				->withErrors($validator)
				->withInput();
			}else{
				$remember = (Input::has('remember')) ? true : false;
				//creamos la sesion del usuario
				$auth = Auth::attempt(array(
						'email'  => Input::get('email'),
						'password' => Input::get('password'),
						'active' => 1
					), $remember);

				if($auth){

					return Redirect::intended('/');
				}else{
					return Redirect::route('login')
				->with('message-alert', 'El email o la contraseña no coinsiden, o la cuenta no esta activada');
				}


			}

			return Redirect::route('login')
				->with('message-alert', 'Hubo un problema en el inicio de sesion');
	}

	public function cerrarSesion() {
		Auth::logout();
		return Redirect::to('/')->with('message-alert','Has Cerrado Sesion');
	}


}