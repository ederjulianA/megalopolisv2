<?php

// import the Intervention Image Class
use Intervention\Image\Image;
use Carbon\Carbon;

class EmpresasController  extends BaseController {

	public function __construct(){
		//parent::__construct();
		$this->beforeFilter('csrf', array('on'=>'post'));
		$this->beforeFilter('mega');
	}

	public function postEditarProductoId($producto_id)
	{
		$id = Auth::user()->id;
		$user = User::where('id',"=",$id);
		$empresa = Empresa::where("user_id","=",$id);
		$user = $user->first();
		$empresa = $empresa->first();
		$producto = DB::table('producto as p')->join('almacen as a','a.producto','=','p.id')
		->join('sedes as s','a.sede','=','s.id')
		 ->join('categorias as c','p.categoria','=','c.id')
		 ->join('subcategorias as sc','p.subcat_id','=','sc.id')
		 ->join('empresas as e', 's.empresa_id','=','e.id')
		 ->select('a.precio_detal',
				 'a.cantidad',
				 'a.sede AS producto_sede',
				 'e.id AS id_empresa',
				 'c.nombre AS categoria_nombre',
				 'e.razon_social',
				 'e.desc_breve',
				 'p.nombre AS producto_nombre',
				 'p.imagen',
				 'p.categoria',
				 'p.slug',
				 'p.subcat_id',
				 'p.img1',
				 'p.img2',
				 'p.img3',
				 'p.id',
				 'p.estado',
				 'p.descripcion AS producto_descripcion',
				 's.nombre_publico AS nombre_sede',
				 's.direccion',
				 's.id AS sede_id',
				 's.telefono',
				 'sc.nombre_sub'
			 )
		 ->where('p.id','=',$producto_id)->where('p.estado','=',1)->first();
		 $preguntas_null = Pregunta::where('empresa_id','=',$empresa->id)->where('respuesta','=', NULL)->orderBy('created_at','desc')->get();
		 $num_preguntas_null = $preguntas_null->count();
		$sede = Sede::where('empresa_id','=', $empresa->id)->get();
		$subcategories = Subcategoria::where('categoria_id', '=', $producto->categoria)->get();
			


		return View::make('empresa.editar-item')
			->with('num_nulls', $num_preguntas_null)
			->with('user', $user)
			->with('sedes', $sede)
			->with('categorias',Categoria::all())
			->with('subcategorias',$subcategories)
			->with('preguntas_null', $preguntas_null)
			->with('empresa', $empresa)
			->with('subcategories', $subcategories)
			->with('productos', $producto);

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


	public function getVentasEmpresa()
	{
		if( !Auth::check() || Auth::user()->tipo != 2)
		{
			return Redirect::to('/');
		}
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

					$ventas = DB::table('compra as co')->join('producto as p','p.id','=','co.id_producto')
							->join('almacen as a','a.producto','=','p.id')
							->join('sedes as s','a.sede','=','s.id')
							->join('empresas as e', 's.empresa_id','=','e.id')
							->join('users as u','u.id','=','co.id_comprador')
							->join('info_shipping as is','is.id_user','=','u.id')
							->join('ciudades as ci','ci.id','=','is.ciudad')
							->select('co.id AS id_compra',
									'co.cantidad AS cantidad_orden',
									'co.valor_unitario',
									'co.valor_total',
									'co.estado',
									'a.precio_detal',
				 					'a.cantidad',
				 					'p.nombre AS producto_nombre',
									'p.imagen',
									'p.img1',
									'p.img2',
									'p.img3',
									'p.id',
									'p.estado',
									'u.username AS nombre_comprador',
									'u.email AS email_comprador',
									'is.direccion AS direccion_comprador',
									'is.nombre AS nombre_envio',
									'is.apellido AS apellido_envio',
									'is.barrio AS barrio_comprador',
									'is.telefono AS telefono_comprador',
									'is.notas AS notas_comprador',
									'ci.ciudad AS nombre_ciudad'


								)->where('co.id_empresa','=',$empresa->id)->where('co.estado','=',0)->orderBy('co.id','desc')->get();
							$numVentas = count($ventas);

			return View::make('empresa.ventas')
			->with('ventas', $ventas)
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
		
		$productos = Producto::where('empresas.id', '=', $empresa->id)->where('producto.estado', '=', 1)->join('almacen', 'producto.id', '=', 'almacen.producto')
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
													'empresas.razon_social AS empresa_name',
													'empresas.nombre_publico AS empresa_publico',
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
	
	public function eliminarProducto() {
	
		$id = Auth::user()->id;
		
		$product_id = Input::get('id');
		
		$producto = array();
		$producto['estado'] = 0;
		Producto::where('id', $product_id)->update($producto);
		
		return Redirect::to('/mega/editar-productos')->with('message-alert','Se ha eliminado el producto satisfactoriamente.');
	}
	
	public function postEditarProductoAction() {

		$data = Input::all();
			$rules =[
				'product_id'						=>	'required|integer',
				'product_name' 						=>	'required|max:200',
				'description' 						=>	'required|min:5|max:4000',
				'category' 							=>	'required|integer',
				'subcat' 							=>	'required|integer',
				'product_price'						=>	'required|numeric',
				'product_amount'					=>	'required|numeric',
				'imagen' 							=>	'image|mimes:jpeg,jpg,bmp,png,gif'

			];
			$validation = Validator::make($data, $rules);

			if($validation->fails())
			{
				return Redirect::back()->withInput()->with('message-alert','Revisa los errores en el formulario')->withErrors($validation->messages());
			}
	
		$id = Auth::user()->id;
		$oldPro = Producto::where('id','=',Input::get('product_id'))->first();
		
		$producto = array();
		$producto['nombre'] = Input::get('product_name');
		$producto['id'] = Input::get('product_id');
		$producto['categoria'] = Input::get('category');
		$producto['slug']= Input::get('seo');
		$producto['subcat_id'] = Input::get('subcat');
		$producto['descripcion'] = Input::get('description');
		
		$imagen = Input::file('imagen');
		$imagen2 = Input::file('imagen2');
		$imagen3 = Input::file('imagen3');
		
		if(isset($imagen)){
			File::delete($oldPro->imagen);
			$codigoIMG = str_random(13);
			$filename = date('Y-m-d-H-m-s')."-".$codigoIMG.".jpg";
			Image::make($imagen->getRealPath())->resizeCanvas(320, 300, null, true, '#fff')->save(public_path().'/img/products/'.$filename);
			//Image::make($imagen->getRealPath())->resize(null,850 , function($constraint){ $constraint->aspectRatio();})->save(public_path().'/img/products/'.$filename);
			//grab(1014, 1200)
			$producto['imagen'] = 'img/products/'.$filename;
		}
		
		if(isset($imagen2)){
			File::delete($oldPro->img1);
			$codigoIMG = str_random(13);
			$filename = date('Y-m-d-H-m-s')."-".$codigoIMG.".jpg";
			Image::make($imagen2->getRealPath())->resizeCanvas(400, 400, null, true, '#fff')->save(public_path().'/img/products/'.$filename);
			//Image::make($imagen2->getRealPath())->resize(null,850 , function($constraint){ $constraint->aspectRatio();})->save(public_path().'/img/products/'.$filename);
			
			$producto['img1'] = 'img/products/'.$filename;
		}
		
		if(isset($imagen3)){
			File::delete($oldPro->img2);
			$codigoIMG = str_random(13);
			$filename = date('Y-m-d-H-m-s')."-".$codigoIMG.".jpg";
			Image::make($imagen3->getRealPath())->resizeCanvas(400, 400, null, true, '#fff')->save(public_path().'/img/products/'.$filename);
			//Image::make($imagen3->getRealPath())->resize(null,850 , function($constraint){ $constraint->aspectRatio();})->save(public_path().'/img/products/'.$filename);
			
			$producto['img2'] = 'img/products/'.$filename;
		}
		
		$almacen = array();
		$almacen['sede'] = Input::get('sede');
		$almacen['cantidad'] = Input::get('product_amount');
		$almacen['precio_detal'] =Input::get('product_price');
		
		Almacen::where('producto', Input::get('product_id'))->update($almacen);
		
		Producto::where('id', Input::get('product_id'))->update($producto);
		
		//return Redirect::to('/mega/editar-productos')->with('message-alert','Se ha actualizado el producto satisfactoriamente.');
		return Redirect::to('/adminpanel/productos/')->with('message-alert','Se ha actualizado el producto satisfactoriamente.');
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
				return Redirect::to('/mega/nueva-sede')->with('message-alert','Sede Creada');
			}else{
				return Redirect::to('/mega/nueva-sede')->with('message-alert','No se ha podido crear tu sede');
			}

		}else{
			return Redirect::to('/mega/nueva-sede')->withErrors($validator)->withInput()->with('message-alert','Errores en el formulario');
		}
	}

	public function getNuevaEmpresa(){

		
		return View::make('empresa.nueva')
			->with('ciudad', Ciudad::all());
	}

	public function getCambiarImagen()
	{
		//3155077394
		//3134755187
		$id = Auth::user()->id;

		$user = User::where('id',"=",$id);
		$empresa = Empresa::where("user_id","=",$id);

		if($user->count() && $empresa->count())
		{
			$user = $user->first();
			$empresa = $empresa->first();
			$creada = strtotime($empresa->created_at);
			$nextSummerOlympics = Carbon::createFromTimeStamp($creada)->addMonths(3);
			$hoy = Carbon::now();
			$dif = $hoy->diffInDays($nextSummerOlympics,false);
			
			$preguntas_null = Pregunta::where('empresa_id','=',$empresa->id)->where('respuesta','=', NULL)->orderBy('created_at','desc')->get();
			$num_preguntas_null = $preguntas_null->count();
			$slides = Archivo::where('empresa_id','=',$empresa->id)->get();
			$numero_slides = count($slides);
				
			return View::make('empresa.cambiarImg')
			
			->with('user', $user)
			->with('slides',$slides)
			->with('numero_slides',$numero_slides)
			->with('num_nulls', $num_preguntas_null)
			->with('preguntas_null', $preguntas_null)
			->with('nextSummerOlympics',$nextSummerOlympics)
			->with('dif',$dif)
			->with('empresa', $empresa);
		}

		return Redirect::to('/mega/perfil')
			->with('message-alert','error al ingresar ');
		
	}

	public function postCambiarBanner()
	{
		$validator = Validator::make(Input::all(),
				array(
						'nuevo_banner' => 'required|image|mimes:jpeg,jpg,bmp,png,gif'


					)

			);
		if($validator->passes())
		{
			$id = Auth::user()->id;
			$empresa = Empresa::find(Input::get('id_empresa'));

			if($empresa)
			{
				//File::delete($empresa->banner);
				$banner = Input::file('nuevo_banner');
				$codigoIMG = str_random(13);
				$filename = date('Y-m-d-H-m-s')."-".$codigoIMG."-"."banner-".$empresa->nombre_publico.".jpg";
				//Image::make($logo->getRealPath())->resize(null, 250, function($constraint){ $constraint->aspectRatio();})->save(public_path().'/img/empresas/'.$filename);
				//Image::make($banner->getRealPath())->resizeCanvas(850, 300, 'center', true, 'rgba(255, 255, 255, 0)')->save(public_path().'/img/empresas/banners'.$filename);
				Image::make($banner->getRealPath())->resize(850, null, function($constraint){ $constraint->aspectRatio();})->save(public_path().'/img/empresas/banners'.$filename);
				$empresa->banner = 'img/empresas/banners'.$filename;
				$empresa->save();
				return Redirect::to('/mega/cambiar-imagen')
					->with('message-alert','Imagen Actualizada exitosamente');

			}
			else
			{
				return Redirect::to('/mega/cambiar-imagen')
					->with('message-alert','Error al actualizar imagen');
			}
			

		}
		else
		{
			return Redirect::to('/mega/cambiar-imagen')
				->with('message-alert','Se presentaron Problemas al actualizar la imagen')
				->withErrors($validator);
		}
	}


	public function postCambiarImagen()
	{
		$validator = Validator::make(Input::all(),
				array(
						'id_empresa' => 'required|integer',
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
				$filename = date('Y-m-d-H-m-s')."-".$codigoIMG."-"."logo-".$empresa->nombre_publico.".jpg";
				//Image::make($logo->getRealPath())->resize(null, 250, function($constraint){ $constraint->aspectRatio();})->save(public_path().'/img/empresas/'.$filename);
				Image::make($logo->getRealPath())->grab(468,249)->save(public_path().'/img/empresas/'.$filename);
				$empresa->logo = 'img/empresas/'.$filename;
				$empresa->save();
				return Redirect::to('/adminpanel')
					->with('message-alert','Logo Actualizado exitosamente');

			}
			else
			{
				return die("ERROR");
			}
			

		}
		else
		{
			return Redirect::back()->withInput()->with('message-alert','Revisa los errores en el formulario')->withErrors($validator->messages());
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

		$data = Input::all();
			$rules =[
			'razon_social'	=>	'required',
			
			'direccion_principal' => 'required|min:5|max:150',
			'descripcion_breve' => 'min:5|max:250',
			'descripcion_larga' => 'min:5|max:2500',
			'telefono' =>		'required'

			];
			$validator = Validator::make($data, $rules);
		if($validator->passes())
		{
			$id_user = Auth::user()->id;

			$empresa = Empresa::find(Input::get('id_empresa'));
				if($empresa)
				{
					$empresa->razon_social = Input::get('razon_social');
					$empresa->direccion_principal = Input::get('direccion_principal');
					$empresa->telefono = Input::get('telefono');
					
					
					$empresa->desc_breve = Input::get('descripcion_breve');
					$empresa->desc_larga = Input::get('descripcion_larga');

					$empresa->save();
					return Redirect::to('/adminpanel/info')
					->with('message-alert','Actualización Correcta');
				}

			
					return Redirect::back()->withInput()->with('message-alert','Error al actualizar')->withErrors($validator->messages());

		
			
		
		}
	return Redirect::back()->withInput()->with('message-alert','Revisa los errores en el formulario')->withErrors($validator->messages());
		

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
				return Redirect::to('/mega/nueva-sede')->with('message-alert','Actualización exitosa');
			}

		}else{
		
			return Redirect::to('/mega/nueva-sede')->withErrors($validator)->with('message-alert','Error al actualizar la sede');
		}

	}

	public function postCrear(){
		$validator	=	Validator::make(Input::all(), Empresa::$rules);

		if($validator->passes()){
			$empresa = new Empresa();

			$empresa->user_id = Input::get('user_id');
			$empresa->sector_id = 0;
			$empresa->razon_social = Input::get('razon_social');

			$empresa->direccion_principal = Input::get('direccion_principal');
			$empresa->telefono = Input::get('telefono');
			$codigoIMG = str_random(13);
			if (isset($_POST['logo'])) {
				$logo = Input::file('logo');
				$filename = date('Y-m-d-H-m-s')."-".$codigoIMG."-"."logo-".Input::get('nombre_publico').".jpg";
				Image::make($logo->getRealPath())->grab(468,249)->save(public_path().'/img/empresas/'.$filename);
				$empresa->logo = 'img/empresas/'.$filename;		
			}
			else{
				$default = 'img/empresas/default-empresa.jpg';
				$empresa->logo = $default;
			}
			$empresa->ciudad_id = Input::get('ciudad');
			$empresa->barrio = 0;
			$empresa->estado = 0;
			$empresa->nombre_publico = Input::get('nombre_publico');
			$empresa->desc_breve = "";
			$empresa->desc_larga = Input::get('descripcion_larga');

		




			if($empresa->save()){

					$sede = new Sede;
					$sede->empresa_id 		=	$empresa->id;
					$sede->ciudad_id		=	$empresa->ciudad_id;
					$sede->direccion 		= 	$empresa->direccion_principal;
					$sede->telefono 		=	$empresa->telefono;
					$sede->nombre_publico 	=	$empresa->nombre_publico;




					/*$cuadricula = new Cuadricula();
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

			$cuadricula->save();*/
					if($sede->save())
					{
						return Redirect::to('/adminpanel')
							->with('message-alert', 'Felicidades has creado exitosamente tu empresa');
					}
			}
		}

		return Redirect::to('/empresa')
				->with('message-alert','Hubo Problemas al crear la empresa. Inténtalo de nuevo ')
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