<?php


Class AjaxController  extends BaseController {

	public function addcartAjax()
 		{
 			header('Content-type: text/javascript');

 			if(isset($_POST['id_producto']))
 			{
 				$id_producto = $_POST['id_producto'];
 				$producto = DB::table('producto as p')->join('almacen as a','a.producto','=','p.id')
				 ->join('sedes as s','a.sede','=','s.id')
				 ->join('empresas as e', 's.empresa_id','=','e.id')
				 ->join('categorias as c','p.categoria','=','c.id')
				 ->join('subcategorias as sc','sc.categoria_id','=','sc.id')
				 ->select('a.precio_detal',
						 'a.cantidad',
						 'c.nombre AS categoria_nombre',
						 'e.nombre_publico AS nombre_empresa',
						 'p.nombre AS producto_nombre',
						 'e.id AS id_empresa',
						 'p.imagen',
						 'p.slug',
						 'p.id',
						'p.descripcion AS producto_descripcion',
						 's.nombre_publico AS nombre_sede',
						 's.direccion',
						 's.telefono',
						 's.id AS sede_id',
						 'sc.nombre_sub'
					 )->where('p.id','=',$id_producto)->first();

				 Cart::insert(array(
				'id'=>$producto->id,
				'name' => $producto->producto_nombre,
				'price' => $producto->precio_detal,
				'quantity' => 1,
				'company' =>$producto->id_empresa,
				'image' => $producto->imagen
			));
				 $estado = array('estado'=>1,'mensaje'=>'producto agregado a las compras','precio'=>$producto->precio_detal);
 				return Response::json(array('estado'=>$estado,'producto'=>$producto));
 			}
 		}

 	public function changeColorAjax()
 	{
 		header('Content-type: text/javascript');

 		if(isset($_POST['id_empresa']) && isset($_POST['color']))
 		{
 			$empresa = Empresa::where('id','=',$_POST['id_empresa'])->first();
 			$empresa->color_tema = $_POST['color'];

 			if($empresa->save())
 			{
 				$estado = array('estado'=>1,'mensaje'=>'Color del tema actualizado correctamente.');
 			}else{
 				$estado = array('estado'=>0,'mensaje'=>'Error al actualizar.');
 			}
 			

 			return Response::json($estado);
 		}
 	}	

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

		//FUNCIÓN PARA REGISTRAR LOS DATOS DE ENVIO DE UN NUEVO USUARIO

		public function postInfoShipping()

		{
			header('Content-type: text/javascript');
			if(isset($_POST['id_user']) && isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['barrio']) && isset($_POST['ciudad']) && isset($_POST['direccion']) && isset($_POST['telefono']))
			{
				$ship = new Shipping;
				$ship->id_user = $_POST['id_user'];
				$ship->ciudad = $_POST['ciudad'];
				$ship->nombre = $_POST['nombre'];
				$ship->apellido = $_POST['apellido'];
				$ship->barrio = $_POST['barrio'];
				$ship->direccion = $_POST['direccion'];
				$ship->telefono = $_POST['telefono'];
				$ship->notas = $_POST['notas'];

				if($ship->save())
				{
					$estado = array('estado'=>1);
					return Response::json($estado);
				}

			}else{
				$error = array('error'=>1,'mensaje'=>'Ingrese todos los campos requeridos');
				return Response::json($error);
			}
		}


		public function postGetPreguntas()
		{
				header('Content-type: text/javascript');
				if(isset($_POST['id_empresa_f'])){
					$id_empresa = $_POST['id_empresa_f'];
					$preguntas = Pregunta::where('empresa_id','=',$id_empresa)->where('respuesta','=',NULL)->get();
					$preg = DB::table('preguntas as pr')->join('users as u','u.id','=','pr.user_id')
					->join('producto as p','p.id','=','pr.id_producto')
					->select('pr.id',
							'pr.pregunta',
							'u.username',
							'p.nombre AS nombre_producto',
							'p.imagen',
							'pr.respuesta',
							'pr.user_id'

						)->where('pr.empresa_id','=',$id_empresa)->where('pr.respuesta','=', NULL)->get();

					$numPreguntas = count($preg);

					if($preg > 0)
					{
						$estado = "Preguntas encontradas";
						return Response::json($preg);
					}

				} 
		}

	public function postSubcat()
	{


		header('Content-type: text/javascript');
		

		if(isset($_POST['cat_id']))
		{

			$cat_id = $_POST['cat_id'];
			
			$subcat = Subcategoria::where('categoria_id','=',$cat_id)->orderBy('nombre_sub','ASC')->get();

			if($subcat->count())
			{
				return Response::json($subcat);
			}
			else{
				$json = array('estado'=>0);
				return Response::json($json);
			}
			
		
		}

		

	}

	/*FUNCION QUE CAMBIA EL ESTADO DE UNA COMPRA A ENVIADO (LADO ADMINISTRRADOR)*/
	public function NotiEnvioAjax()
	{
		header('Content-type: text/javascript');
		if(isset($_POST['compra_id'])){
			$compra = Compra::where('id','=',$_POST['compra_id'])->first();
			$compra->estado = 1;
			if($compra->save())
			{
				$info = array('estado'=>1, 'mensaje'=>'producto enviado Satisfactoriamente');
				return Response::json(array('compra'=>$compra,'estado'=>$info));
			}

		}else{
			return Response::json(array('estado'=>0,'mensaje'=>'Error al enviar notificación.'));
		}
	}


	public function cambiarEstadoAjax()
	{
		header('Content-type: text/javascript');

		$pre = Pregunta::where('id','=',$_POST['id_pre'])->first();
		if($pre->estado == 0)
		{
			$res = array('estado'=>0);
		}else{
			$pre->estado = 0;
			if($pre->save())
			{
				$res = array('estado'=>1);
			}
		}
		return Response::json($res);
	}

	/* FUNCION QUE AGREGA UNA PREGUNTA SOBRE EL ARTICULO QUE SE ESTA VISUALIZANDO (NOTIFICACIONES VIA EMAIL)*/
	public function addPregunta()
	{
		header('Content-type: text/javascript');
		if(isset($_POST['pregunta_f']) && isset($_POST['id_empresa_f']) && isset($_POST['id_user_f']) && isset($_POST['id_producto_f'])){
			$user_id = $_POST['id_user_f'];
			$empresa_id = $_POST['id_empresa_f'];
			$pregunta = $_POST['pregunta_f'];
			$id_producto = $_POST['id_producto_f'];

			$preg = new Pregunta;
			$preg->empresa_id = $empresa_id;
			$preg->user_id = $user_id;
			$preg->pregunta = $pregunta;
			$preg->id_producto = $id_producto;

			if($preg->save())
			{
				$empresa = Empresa::where('id','=',$empresa_id)->first();
				$empresa_nombre = $empresa->razon_social;
				$email_empresa = $empresa->user->email;
				$user = User::where('id','=',$user_id)->first();
				$producto = Producto::where('id','=',$id_producto)->first();
				$producto_nombre = $producto->nombre;
				$img = $producto->imagen;
				$usuario = $user->username;
				Mail::send('emails.auth.preguntaMega', array('link' => URL::route('mega-perfil'), 'username'=>$empresa_nombre,'usuario'=>$usuario,'pregunta'=>$pregunta,'pro_nombre' => $producto_nombre,'img'=>$img), function($message) use ($empresa){
						$message->to($empresa->user->email, $empresa->nombre_publico)->subject('Nueva Pregunta');
					});
				return Response::json($preg);
				//return Response::json(data, status, headers)
			}

		}else{
			$estado =array('estado'=>1,'mensaje'=>'Por favor ingresa una pregunta');
			return Response::json($estado);
		}
	}

	/*FUNCION PARA REMOVER UN PRODUCTO DE LA LISTA DE FAVORITOS*/
	public function remFav()
	{
		header('Content-type: text/javascript');
			if(isset($_POST['id_producto'])){
				$user_id = Auth::user()->id;
				$producto_id = $_POST['id_producto'];

				$fav = Favoritos::where('user_id','=',$user_id)->where('producto_id','=',$producto_id)->first();

				if($fav->count())
				{
					$fav->delete();
					$json = array('estado'=>1, 'mensaje'=>'producto eliminado');
				}else{
					$json = array('estado'=>0, 'mensaje'=>'No se encontro Producto');
				}

				return Response::json($json);

		}
	}

	//FUNCION QUE REMUEVE UN USUARIO DE LA LISTA DE SUSCRIPTORES DE UNA EMPRESA
	public function remSus()
	{
		header('Content-type: text/javascript');
		if(isset($_POST['id_empresa'])){

			$user_id = Auth::user()->id;
			$empresa_id = $_POST['id_empresa'];

			$sus = Suscripcion::where('user','=', $user_id)->where('empresa','=', $empresa_id)->first();

			if($sus->count()){
				$sus->delete();
				$json = array('estado'=>1, 'mensaje'=>'producto eliminado');
			}else{
				$json = array('estado'=>0, 'mensaje'=>'error al borrar');
			}
			return Response::json($json);
		}
	}

	public function addSus()
	{
		header('Content-type: text/javascript');
		if(isset($_POST['id_empresa'])){
			$user_id = Auth::user()->id;
			$suscripcion = new Suscripcion;
			$suscripcion->user = $user_id;
			$suscripcion->empresa = $_POST['id_empresa'];

			if($suscripcion->save()){
				$json = array('estado'=>1, 'mensaje'=>'Suscripcion Exitosa');
				return Response::json($json);
			}else{
				$json = array('estado'=>0, 'mensaje'=>'Error al suscribir');
				return Response::json($json);

			}
		}
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

	public function postNombreSedeValido()
	{
			header('Content-type: text/javascript');

				if(isset($_POST['nombre_sede'])){
					$nombre_sede = $_POST['nombre_sede'];

					$sede = Sede::where('nombre_publico','=',$nombre_sede)->get();

					if($sede->count()){
						$json = array(
							'estado' => 1,
							'mensaje' => 'oops, nombre no disponible',
							);
						return Response::json($json);
						
					}else{
						$json = array(
							'estado' => 0,
							'mensaje' => 'Nombre Disponible',
							);
						return Response::json($json);

						
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
					return Response::json($json);
					
				}else{
					$json = array(
						'estado' => 0,
						'mensaje' => 'Nombre Disponible',
						);
					return Response::json($json);

					
				}

				

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

	public function postProducts()
	{
		header('Content-type: text/javascript');

				if(isset($_POST['id_cat']) && isset($_POST['nom_sede']) && isset($_POST['id_empresa_f'])){
					$id_cat = $_POST['id_cat'];
					$nomsede = $_POST['nom_sede'];
					$id_empresa = $_POST['id_empresa_f'];


					$producto = DB::table('producto as p')->join('almacen as a','a.producto','=','p.id')
				 ->join('sedes as s','a.sede','=','s.id')
				 ->join('empresas as e', 'e.id','=','s.empresa_id')
				 ->join('categorias as c','p.categoria','=','c.id')
				 ->join('subcategorias as sc','sc.categoria_id','=','sc.id')
				 ->select('a.precio_detal',
						 'a.cantidad',
						 'e.id',
						 'c.nombre AS categoria_nombre',
						 'p.nombre AS producto_nombre',
						 'p.categoria',
						 'p.imagen',
						 'p.slug',
						 'p.id',
						 's.id AS sede_id',
						 'p.descripcion AS producto_descripcion',
						 's.nombre_publico AS nombre_sede',
						 's.direccion',
						 's.telefono',
						 'sc.nombre_sub'
					 )
				 ->where('p.categoria', '=', $id_cat)
				 
				 ->where('s.nombre_publico','=', $nomsede)->where('e.id','=',$id_empresa)->get();
				 $numProd = count($producto);

				 if($numProd > 0){
				 	return Response::json($producto);

				 }else {
				 	$respuesta = array('estado'=>0, 'mensaje'=>'No hay Productos');

				 	return Response::json($respuesta);

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