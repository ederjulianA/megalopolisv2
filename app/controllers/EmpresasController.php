<?php

// import the Intervention Image Class
use Intervention\Image\Image;

class EmpresasController  extends BaseController {

	public function __construct(){
		//parent::__construct();
		$this->beforeFilter('csrf', array('on'=>'post'));
		$this->beforeFilter('mega');
	}

	public function getNuevaSede()
	{
		$id = Auth::user()->id;

		$user = User::where('id',"=",$id);
		$empresa = Empresa::where("user_id","=",$id);
		

		if($user->count() && $empresa->count())
		{
			$user = $user->first();
			$empresa = $empresa->first();	
			$sede = Sede::where("empresa_id","=", $empresa->id)->get();
			$preguntas_null = Pregunta::where('empresa_id','=',$empresa->id)->where('respuesta','=', NULL)->orderBy('created_at','desc')->get();
			$num_preguntas_null = $preguntas_null->count();

			return View::make('empresa.nueva-sede')
			->with('user', $user)
			->with('sedes', $sede)
			->with('num_nulls', $num_preguntas_null)
			->with('preguntas_null', $preguntas_null)
			->with('ciudades', Ciudad::all())
			->with('categorias', Categoria::all())
			->with('empresa', $empresa);
		}

		return Redirect::to('/mega/perfil')
			->with('message-alert','error al ingresar ');
	}

	public function postEditarProductos() {
	
		$id = Auth::user()->id;
		$user = User::where('id',"=",$id);
		$empresa = Empresa::where("user_id","=",$id);
		$user = $user->first();
		$empresa = $empresa->first();	
		$preguntas_null = Pregunta::where('empresa_id','=',$empresa->id)->where('respuesta','=', NULL)->orderBy('created_at','desc')->get();
		$sede = Sede::where('empresa_id','=', $empresa->id)->get();
	
		$categoria = new Categoria();
		
		$categorias = $categoria->get();
	
		$num_preguntas_null = $preguntas_null->count();
		
		$productos = Producto::where('empresas.id', '=', $empresa->id)->join('almacen', 'producto.id', '=', 'almacen.producto')
													->join('sedes', 'sedes.id', '=', 'almacen.sede')
													->join('empresas', 'empresas.id', '=', 'sedes.empresa_id')
													->select('producto.nombre AS producto_nombre',
													'almacen.precio_detal',
													'producto.imagen',
													'producto.categoria',
													'producto.subcat_id',
													'producto.img1',
													'producto.img2',
													'producto.img3',
													'producto.imgSmall',
													'producto.id',
													'almacen.sede AS producto_sede',
													'producto.descripcion AS producto_descripcion',
													'almacen.cantidad')->get();
		
		foreach($productos as $key => $producto) {
			
			$tags = Tag::where('producto','=',$producto->id)->get();
			$producto->tags = $tags;
			
			// @info low performance!
			
			$subcategories = Subcategoria::where('categoria_id', '=', $producto->categoria)->get();
			$producto->subcategories = $subcategories;
		}
		
		return View::make('empresa.editar-productos')
			->with('num_nulls', $num_preguntas_null)
			->with('user', $user)
			->with('preguntas_null', $preguntas_null)
			->with('empresa', $empresa)
			->with('productos', $productos)
			->with('categorias', $categorias)
			->with('sedes', $sede);
	}
	
	public function postEditarProductoAction() {
	
		$id = Auth::user()->id;
		
		$producto = array();
		$producto['nombre'] = Input::get('product_name');
		$producto['id'] = Input::get('product_id');
		$producto['categoria'] = Input::get('category');
		$producto['subcat_id'] = Input::get('subcat');
		$producto['descripcion'] = Input::get('description');
		
		$imagen = Input::file('imagen');
		$imagen2 = Input::file('imagen2');
		$imagen3 = Input::file('imagen3');
		
		if(isset($imagen)){
			
			$codigoIMG = str_random(13);
			$filename = date('Y-m-d-H')."-".$codigoIMG."-".$imagen->getClientOriginalName();
			Image::make($imagen->getRealPath())->resize(720, 480, true)->save(public_path().'/img/products/'.$filename);
			
			$producto['imagen'] = 'img/products/'.$filename;
		}
		
		if(isset($imagen2)){
			
			$codigoIMG = str_random(13);
			$filename = date('Y-m-d-H')."-".$codigoIMG."-".$imagen2->getClientOriginalName();
			Image::make($imagen2->getRealPath())->resize(720, 480, true)->save(public_path().'/img/products/'.$filename);
			
			$producto['img1'] = 'img/products/'.$filename;
		}
		
		if(isset($imagen3)){
			
			$codigoIMG = str_random(13);
			$filename = date('Y-m-d-H')."-".$codigoIMG."-".$imagen3->getClientOriginalName();
			Image::make($imagen3->getRealPath())->resize(720, 480, true)->save(public_path().'/img/products/'.$filename);
			
			$producto['img2'] = 'img/products/'.$filename;
		}
		
		$almacen = array();
		$almacen['sede'] = Input::get('sede');
		$almacen['cantidad'] = Input::get('product_amount');
		
		Almacen::where('producto', Input::get('product_id'))->update($almacen);
		
		Producto::where('id', Input::get('product_id'))->update($producto);
		
		return Redirect::to('/editar-productos')->with('message-alert','Se ha actualizado el producto satisfactoriamente');
	}
	
	public function postNuevaSede()
	{
		$validator = Validator::make(Input::all(),
				array(
						'direccion' => 'required',
						'nombre_publico' => 'required',
						'telefono' => 'required'
					)
			);
			
		if($validator->passes()){
		
			$sede = new Sede();
			$sede->empresa_id = Input::get('empresa_id');
			$sede->ciudad_id = Input::get('ciudad');
			$sede->direccion = Input::get('direccion');
			$sede->telefono = Input::get('telefono');
			$sede->nombre_publico = Input::get('nombre_publico');
			$sede->latitude = Input::get('latitude');
			$sede->longitude = Input::get('longitude');

			if($sede->save())
			{
				return Redirect::to('/nueva-sede')->with('message-alert','Sede Creada');
			}else{
				return Redirect::to('/nueva-sede')->with('message-alert','No se ha podido crear tu sede');
			}

		}else{
			return Redirect::to('/nueva-sede')->withErrors($validator)->withInput()->with('message-alert','Errores en el formulario');
		}
	}

	public function getNuevaEmpresa(){

		
		return View::make('empresa.nueva')
			->with('ciudad', Ciudad::all());
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
			$preguntas_null = Pregunta::where('empresa_id','=',$empresa->id)->where('respuesta','=', NULL)->orderBy('created_at','desc')->get();
			$num_preguntas_null = $preguntas_null->count();
				
			return View::make('empresa.cambiarImg')
			
			->with('user', $user)
			->with('num_nulls', $num_preguntas_null)
			->with('preguntas_null', $preguntas_null)
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
				$filename = date('Y-m-d-H')."-".$codigoIMG."-"."logo-".$empresa->nombre_publico.".jpg";
				//Image::make($logo->getRealPath())->resize(null, 250, function($constraint){ $constraint->aspectRatio();})->save(public_path().'/img/empresas/'.$filename);
				Image::make($logo->getRealPath())->resize(720, 480, true)->save(public_path().'/img/empresas/'.$filename);
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
					$empresa->direccion_principal = Input::get('direccion_principal');
					$empresa->telefono = Input::get('telefono');
					$empresa->nombre_publico = Input::get('nombre_publico');
					
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



	public function postActualizarSede()
	{
		$validator = Validator::make(Input::all(),
				array(
						'direccion' => 'required',
						'telefono' => 'required'
					)
			);
			
		if($validator->passes())
		{
			$sede = Sede::where('id','=',Input::get('sede_id'))->first();
			
			$sede->ciudad_id = Input::get('ciudad');
			$sede->direccion = Input::get('direccion');
			$sede->telefono = Input::get('telefono');
			$sede->latitude = Input::get('latitude');
			$sede->longitude = Input::get('longitude');

			if($sede->save())
			{
				return Redirect::to('nueva-sede')->with('message-alert','Actualización exitosa');
			}

		}else{
		
			return Redirect::to('/nueva-sede')->withErrors($validator)->with('message-alert','Error al actualizar la sede');
		}

	}

	public function postCrear(){
		$validator	=	Validator::make(Input::all(), Empresa::$rules);

		if($validator->passes()){
			$empresa = new Empresa();

			$empresa->user_id = Input::get('user_id');
			$empresa->sector_id = Input::get('sector');
			$empresa->razon_social = Input::get('razon_social');

			$empresa->direccion_principal = Input::get('direccion_principal');
			$empresa->telefono = Input::get('telefono');
			$codigoIMG = str_random(13);
			$logo = Input::file('logo');
			$filename = date('Y-m-d-H')."-".$codigoIMG."-"."logo-".Input::get('nombre_publico').".jpg";
			Image::make($logo->getRealPath())->resize(null, 200, function($constraint){ $constraint->aspectRatio();})->save(public_path().'/img/empresas/'.$filename);
			$empresa->logo = 'img/empresas/'.$filename;
			$empresa->ciudad_id = Input::get('ciudad');
			$empresa->barrio = Input::get('barrio');
			$empresa->nombre_publico = Input::get('nombre_publico');
			$empresa->desc_breve = Input::get('descripcion_breve');
			$empresa->desc_larga = Input::get('descripcion_larga');

		




			if($empresa->save()){


					$cuadricula = new Cuadricula();
					$cuadricula->idempresa = $empresa->id;
					$cuadricula->imagen = "local2.png";
					$cuadricula->imagen2 = "fon1.png";
					$cuadricula->imagen3 = "fon1.png";
					$cuadricula->imagen4 = "fon1.png";
					$cuadricula->imagen5 = "fon1.png";
					$cuadricula->imagen6 = "fon1.png";
					$cuadricula->imagen7 = "fon1.png";
					$cuadricula->imagen8 = "fon1.png";
					$cuadricula->imagen9 = "fon1.png";
					$cuadricula->Nombre = Input::get('nombre_publico');
					$cuadricula->imgsector = "botella.png";

			$cuadricula->save();
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
				$sede = Sede::where('empresa_id','=', $empresa->id)->get();
				$num_sedes = $sede->count();

				return Redirect::to('/mega/perfil')
					->with('empresa' , $empresa )
					->with('num_sedes', $num_sedes)
					->with('user' , $user);
					
			}else{
					/*$sectores = array();

					foreach(Sector::all() as $sector){
					$sectores[$sector->id] = $sector->nom_sector;
					}*/
				return View::make('empresa.nueva')
				->with('sectores' ,  Sector::all())
				->with('ciudad', Ciudad::all());
			}
		}
	}
}