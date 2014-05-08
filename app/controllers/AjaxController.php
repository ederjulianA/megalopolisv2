<?php


Class AjaxController  extends BaseController {

	public function postBarrios()
	{
		header('Content-type: text/javascript');
		$ciudad_id = $_POST['ciudad_id'];
		$json = array(
			'success' => false,
			'resul' => 0
			);

		if(isset($_POST['ciudad_id']))
		{

			$ciudad_id = $_POST['ciudad_id'];
			
			$barrios = Barrio::where('ciudad_id','=',$ciudad_id)->orderBy('barrio','ASC')->get();
			
			//$barrios = Barrio::find(1);
			//$barrios->toArray();

			$json['success'] = true;
			$json['result'] = $ciudad_id + 5;
		}

		return Response::json($barrios);

	
		

		


	}


	public function addFav()
	{

		header('Content-type: text/javascript');
		if(isset($_POST['id_producto'])){

			$user_id = Auth::user()->id;
			if($user_id != null){
				$fav = new Favoritos;
				$fav->user_id = $user_id;
				$fav->producto_id = $_POST['id_producto'];
				if($fav->save()){
					$json = array('estado'=>1, 'mensaje'=>'Producto agregado a Favorito');
					return Response::json($json);
				}else{
					$json = array('estado'=>0, 'mensaje'=>'Inicia Sesion');
					return Response::json($json);
				}
			}


		}

	}


	public function cambiarNombreAjax()
	{
		header('Content-type: text/javascript');
		if(isset($_POST['nuevo_nom'])){
			$nuevo_nom = $_POST['nuevo_nom'];
			$user_id = Auth::user()->id;
			$user = User::where('id','=',$user_id)->first();
			if($user->count())
			{
				if($user->username == $nuevo_nom)
				{
					$json = array('estado' => 1);
					return Response::json($json);
				}

				$user->username = $nuevo_nom;

				if($user->save()){
					return Response::json($user);
				}
			}
		}

	}

	public function postNombreEmpresaValido()
	{
		header('Content-type: text/javascript');

		if(isset($_POST['nombre_empresa'])){
			$nombre_empresa = $_POST['nombre_empresa'];

			$empresa = Empresa::where('nombre_publico','=',$nombre_empresa)->get();

			if($empresa->count()){
				$json = array(
					'estado' => 1,
					'mensaje' => 'oops, nombre no disponible',
					);
				
			}else{
				$json = array(
					'estado' => 0,
					'mensaje' => 'Nombre Disponible',
					);

				
			}

			return Response::json($json);

		}
	}



	public function postEmpresasCiudad()
	{
		header('Content-type: text/javascript');

		if(isset($_POST['ciudad_id'])){
			$ciudad_id = $_POST['ciudad_id'];

			$empresa = Empresa::where('ciudad_id','=', $ciudad_id)->with('sector')->get();

			if($empresa->count()){
				return Response::json($empresa);
			}

		}
	}


	public function postPromos()

	{
		header('Content-type: text/javascript');

		if(isset($_POST['id_sede']))
		{
			$id_sede = $_POST['id_sede'];

			$promociones = Promociones::where('sede_id','=', $id_sede)->with('categoria')->with('sede')->get();
		}
		if($promociones->count())
		{
			return Response::json($promociones);
		}
	}

	public function postCategorias(){
		header('Content-type: text/javascript');

		$json = array('error' => 'Hubo un error');


		if(isset($_POST['id_cat']))
		{
			$id_cat = $_POST['id_cat'];

			$empresa = Empresa::where('sector_id','=', $id_cat)->with('sector')->get();



		


		}

			if($empresa->count())
			{
				$empresa->toArray();


				return Response::json($empresa);

			}else{
			return Response::json($json);

			}


	}
}