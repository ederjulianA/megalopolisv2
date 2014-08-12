<?php



// import the Intervention Image Class
use Intervention\Image\Image;

class UsersController extends BaseController{

	public function __construct(){
		//parent::__construct();
		$this->beforeFilter('csrf', array('on'=>'post'));
		//$this->beforeFilter('mega');
	}



	public function getListaOrdersentrega()
	{
		if(!Auth::check() || Auth::user()->tipo != 1)
		{
			return Redirect::to('/');
		}else{
			$id_comprador = Auth::user()->id;
			$compras = DB::table('compra as co')->join('producto as p','p.id','=','co.id_producto')
			->join('almacen as a','a.producto','=','p.id')
			->join('sedes as s','a.sede','=','s.id')
			->join('empresas as e', 's.empresa_id','=','e.id')
			->select(
					'co.cantidad',
					'co.id',
					'co.created_at AS fechaC',
					'p.nombre AS nombre_producto',
					'co.valor_unitario',
					'co.valor_total',
					'e.razon_social',
					's.nombre_publico AS nombre_sede',
					's.direccion',
				 	's.id AS sede_id',
				 	's.telefono',
					'co.estado'
				)
			->where('co.id_comprador','=',$id_comprador)->where('co.estado','=',1)->orderBy('co.id', 'desc')->get();

			return View::make('mega.listOrdersShiped')->with('compras',$compras);
		}
	}

	public function getListaOrders()
	{
		if(!Auth::check() || Auth::user()->tipo != 1)
		{
			return Redirect::to('/');
		}else{
			$id_comprador = Auth::user()->id;
			$compras = DB::table('compra as co')->join('producto as p','p.id','=','co.id_producto')
			->join('almacen as a','a.producto','=','p.id')
			->join('sedes as s','a.sede','=','s.id')
			->join('empresas as e', 's.empresa_id','=','e.id')
			->select(
					'co.cantidad',
					'co.id',
					'co.created_at AS fechaC',
					'p.nombre AS nombre_producto',
					'co.valor_unitario',
					'co.valor_total',
					'e.razon_social',
					's.nombre_publico AS nombre_sede',
					's.direccion',
				 	's.id AS sede_id',
				 	's.telefono',
					'co.estado'
				)
			->where('co.id_comprador','=',$id_comprador)->orderBy('co.id', 'desc')->get();

			return View::make('mega.listOrders')->with('compras',$compras);
		}
	}

	public function postCancelarSuscripcion()
	{
		$sus = Suscripcion::where('user','=', Input::get('user_id'))->where('empresa','=', Input::get('empresa_id'))->first();
		if($sus->count()){
			$sus->delete();
			return Redirect::to('/suscripciones')->with('message-alert','Suscripción Cancelada');
		}
	}


	public function suscripcionesUser()
	{
		if(!Auth::check() || Auth::user()->tipo != 1)
		{
			return Redirect::to('/');
		}else{
			$user_id = Auth::user()->id;

			$subs = DB::table('user_subs as us')
			->join('users as u','u.id','=','us.user')
			->join('empresas as e','e.id','=','us.empresa')
			->select('u.username',
					'e.id',
					'us.pro_id',
					'us.pro_name',
					'e.nombre_publico',
					'e.desc_breve',
					'e.desc_larga',
					'e.logo'
				)
			->where('us.user','=', $user_id)->get();

			return View::make('mega.suscripcion')->with('subs', $subs);

		}
	}

	public function getPersonalInfo()
	{
		if(!Auth::check() || Auth::user()->tipo != 1)
		{
			return Redirect::to('/');
		}else{
			$user_id = Auth::user()->id;

			$user = User::where('id','=',$user_id)->first();

			if($user)
			{
				return View::make('mega.personalInfo')->with('user',$user);
			}


		}
	}

	public function favoritosUser()
	{
		if(!Auth::check() || Auth::user()->tipo != 1)
		{
			return Redirect::to('/');
		}else{
			$user_id = Auth::user()->id;

			$user = User::where('id','=',$user_id)->first();
			$favoritos = Favoritos::where('user_id','=',$user_id)
			->join('producto', 'user_favoritos.producto_id', '=', 'producto.id')
			->join('categorias', 'producto.categoria', '=', 'categorias.id')
			->join('almacen', 'producto.id', '=', 'almacen.producto')

			->join('sedes', 'almacen.sede', '=', 'sedes.id')
			
			->select('producto.nombre AS producto_nombre',
					'almacen.precio_detal',
					'sedes.nombre_publico AS nombre_sede',
					'sedes.id AS sede_id',
					'producto.imagen',
					'producto.imgSmall',
					'producto.id',
					'producto.descripcion AS producto_descripcion',
					'categorias.nombre AS categoria_nombre',
					'almacen.cantidad'

				)->get();
			$num_favs = $favoritos->count();
			

			if($user->count()){
				return View::make('mega/favoritos')->with('user',$user)->with('favoritos' ,$favoritos)->with('num_favs',$num_favs);
			}else{
				return View::make('/');
			}


			
		}
	}


	public function perfilUser1()
	{
		if(!Auth::check() || Auth::user()->tipo != 1)
		{
			return Redirect::to('/');
		}else{


			return View::make('mega/editarUser');
		}


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
					->with("message-alert","Ya hemos enviado tu nueva contraseña a tu email de registro, por favor verifica");
				}else{
					return Redirect::route('recuperar-cuenta')
					->with("message-alert","Se presentaron problemas al intentar actualizar la contraseña. Porfavor vuelve a intentarlo.");
				}
			}
			return Redirect::route('recuperar-cuenta')
					->with("message-alert","No hemos encontrado ningun email que coincida con el que espesificaste, por favor Verifica tu email.");
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
			
			//$img = Input::file('img');
			//$filename = date('Y-m-d-H')."-".$codigoIMG."-".$img->getClientOriginalName();
			/*$imgPath = $destinationPath.$filename;*/
			//Image::make($img->getRealPath())->resize(468, 249)->save(public_path().'/img/users/'.$filename);
			$user->img = 'img/users/';
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
				->with('message-alert','Gracias Por registrarte. Te hemos enviado un email con un código de activación :)');
			}

			
		}

		return Redirect::to('/registro')
			->with('message-alert','Algo salio mal, Vuelve a intentarlo')
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
		
		$categoria = new Categoria();
		
		$categorias = $categoria->get();
		
		if($user->count() && $empresa->count()){
			
			$user = $user->first();
			$empresa = $empresa->first();
			$ventas = Compra::where('id_empresa','=',$empresa->id)->where('estado','=',0)->get();
			$num_ventas = $ventas->count();
			$sede = Sede::where('empresa_id','=', $empresa->id)->get();
			$preguntas_todas = Pregunta::where('empresa_id','=',$empresa->id)->get();
			$preguntas_null = Pregunta::where('empresa_id','=',$empresa->id)->where('respuesta','=', NULL)->orderBy('created_at','desc')->get();
			$num_preguntas_null = $preguntas_null->count();
			$num_pregunstas_total = $preguntas_todas->count();
			$num_sedes = $sede->count();
			return View::make('mega.perfil')
			->with('user' , $user)
			->with('num_sedes', $num_sedes)
			->with('empresa', $empresa)
			->with('num_ventas',$num_ventas)
			->with('preguntas', $preguntas_todas)
			->with('num_nulls', $num_preguntas_null)
			->with('total_preguntas', $num_pregunstas_total)
			->with('preguntas_null', $preguntas_null)
			->with('categorias', $categorias)
			->with('sedes', $sede);
		}
	}
	public function postCambiarPasswordUser()
	{
		$validator = Validator::make(Input::all(),
				array(
						'contrasena_actual' => 'required',

					)
			);

		if($validator->fails())
		{
			return Redirect::to('/perfil')->with('message-alert','Error al actualizar Contraseña')->withErrors($validator);
		}else{

			//CAMBIAMOS LA CONTRASEÑA DEL USUARIO

			$user = User::find(Auth::user()->id);

			$old_password = Input::get('contrasena_actual');
			$password = Input::get('nueva_contrasena');

			if(Hash::check($old_password, $user->getAuthPassword())){
				$user->password = Hash::make($password);

					if($user->save()){
						return Redirect::to('/perfil')
						->with('message-alert','Contreaseña actualizada');
					}
			}else{
						return Redirect::to('/perfil')
						->with('message-alert','La contraseña actual que ingresaste no coincide con la que tenemos es nuestra base de datos.');
					}

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
				->with('message-alert', 'El email o la contraseña no coinciden, o la cuenta no esta activada');
				}


			}

			return Redirect::route('login')
				->with('message-alert', 'Hubo un problema en el inicio de sesión ');
	}

	public function cerrarSesion() {
		Auth::logout();
		return Redirect::to('/')->with('message-alert','Has Cerrado Sesión');
	}


}