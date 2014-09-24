<?php

use Intervention\Image\Image;

class SedesController extends BaseController{


	public function getCatalogoMenor($empresa, $nombre_publico)
	{
			$sede = Sede::where('nombre_publico',"=", $nombre_publico)->where('empresa_id','=',$empresa)->get();


		if($sede->count()){
			$sede = $sede->first();
			$empresaid = $sede->empresa->id;
			$empresa = Empresa::where('id','=',$empresaid)->first();

			if($empresa->estado==0){
				return Redirect::to('/empresa/'.$empresa->nombre_publico);
			}

			$suscriptores = DB::table('user_subs as us')->join('empresas as e','us.empresa','=','e.id')
			->select('e.id')
			->where('us.empresa','=', $empresaid)->get();

			$num_suscriptores = count($suscriptores);
			$num_promos = $sede->promocion->count();


			$productos = Producto::where('sede','=',$sede->id)->join('almacen', 'producto.id', '=', 'almacen.producto')
								
													->join('categorias', 'producto.categoria', '=', 'categorias.id')
													->select('producto.nombre AS producto_nombre',
													'almacen.precio_detal',
													'producto.imagen',
													'producto.imgSmall',
													'producto.categoria',
													'producto.slug',
													'producto.id',
													'producto.descripcion AS producto_descripcion',
													'categorias.id AS id_categoria',
													'categorias.nombre AS categoria_nombre',
													'almacen.cantidad')->where('estado','=',1)->orderBy('almacen.precio_detal','asc')->paginate(9);
			$num_productos = $productos->count();
			
			foreach($productos as $key => $producto) {
			
				$tags = Tag::where('producto','=',$producto->id)->get();
				$producto->tags = $tags;
				
				
			}
			$cat2 = DB::table('categorias as c')->join('producto as p','p.categoria','=','c.id')
				->join('almacen as a','a.producto','=','p.id')
				->join('sedes as s','a.sede','=','s.id')
				->select('c.id AS id_categoria_cat',
						'c.nombre AS nombre_categoria_cat',
						'c.slug AS slug_cat',
						's.id'
					)->where('s.id','=',$sede->id)->distinct()->get();
				
			

			return View::make('catalogoMenor')->with('numSusc', $num_suscriptores)
			->with('sede',$sede)
			->with('categorias',$cat2)
			//->with('categorias', Categoria::all())
			->with('num_promos', $num_promos)
			->with('productos', $productos)
			->with('num_productos',$num_productos);
		}else{
			return Redirect::to('/')->with('message-alert','No hemos encontrado el catalogo solicitado');
		}
	}


	public function getCatalogoMayor($empresa, $nombre_publico)
	{
		$sede = Sede::where('nombre_publico',"=", $nombre_publico)->where('empresa_id','=',$empresa)->get();


		if($sede->count()){
			$sede = $sede->first();
			$empresaid = $sede->empresa->id;
			$empresa = Empresa::where('id','=',$empresaid)->first();

			if($empresa->estado==0){
				return Redirect::to('/empresa/'.$empresa->nombre_publico);
			}

			$suscriptores = DB::table('user_subs as us')->join('empresas as e','us.empresa','=','e.id')
			->select('e.id')
			->where('us.empresa','=', $empresaid)->get();

			$num_suscriptores = count($suscriptores);
			$num_promos = $sede->promocion->count();


			$productos = Producto::where('sede','=',$sede->id)->join('almacen', 'producto.id', '=', 'almacen.producto')
								
													->join('categorias', 'producto.categoria', '=', 'categorias.id')
													->select('producto.nombre AS producto_nombre',
													'almacen.precio_detal',
													'producto.imagen',
													'producto.imgSmall',
													'producto.categoria',
													'producto.slug',
													'producto.id',
													'producto.descripcion AS producto_descripcion',
													'categorias.id AS id_categoria',
													'categorias.nombre AS categoria_nombre',
													'almacen.cantidad')->where('estado','=',1)->orderBy('almacen.precio_detal','desc')->paginate(9);
			$num_productos = $productos->count();
			
			foreach($productos as $key => $producto) {
			
				$tags = Tag::where('producto','=',$producto->id)->get();
				$producto->tags = $tags;
				
				
			}
			$cat2 = DB::table('categorias as c')->join('producto as p','p.categoria','=','c.id')
				->join('almacen as a','a.producto','=','p.id')
				->join('sedes as s','a.sede','=','s.id')
				->select('c.id AS id_categoria_cat',
						'c.nombre AS nombre_categoria_cat',
						'c.slug AS slug_cat',
						's.id'
					)->where('s.id','=',$sede->id)->distinct()->get();
				
			

			return View::make('catalogoMayor')->with('numSusc', $num_suscriptores)
			->with('sede',$sede)
			->with('categorias',$cat2)
			//->with('categorias', Categoria::all())
			->with('num_promos', $num_promos)
			->with('productos', $productos)
			->with('num_productos',$num_productos);
		}else{
			return Redirect::to('/')->with('message-alert','No hemos encontrado el catalogo solicitado');
		}
	}

	public function getCatalogo($empresa, $nombre_publico){

		$sede = Sede::where('nombre_publico',"=", $nombre_publico)->where('empresa_id','=',$empresa)->get();


		if($sede->count()){
			$sede = $sede->first();
			$empresaid = $sede->empresa->id;
			$empresa = Empresa::where('id','=',$empresaid)->first();

			if($empresa->estado==0){
				return Redirect::to('/')->with('message-alert','Esta empresa no esta disponible. Disculpa las molestias.');
			}

			$suscriptores = DB::table('user_subs as us')->join('empresas as e','us.empresa','=','e.id')
			->select('e.id')
			->where('us.empresa','=', $empresaid)->get();

			$num_suscriptores = count($suscriptores);
			$num_promos = $sede->promocion->count();


			$productos = Producto::where('sede','=',$sede->id)->join('almacen', 'producto.id', '=', 'almacen.producto')
								
													->join('categorias', 'producto.categoria', '=', 'categorias.id')
													->select('producto.nombre AS producto_nombre',
													'almacen.precio_detal',
													'producto.imagen',
													'producto.imgSmall',
													'producto.categoria',
													'producto.slug',
													'producto.id',
													'producto.descripcion AS producto_descripcion',
													'categorias.id AS id_categoria',
													'categorias.nombre AS categoria_nombre',
													'almacen.cantidad')->where('estado','=',1)->paginate(9);
			$num_productos = $productos->count();
			
			foreach($productos as $key => $producto) {
			
				$tags = Tag::where('producto','=',$producto->id)->get();
				$producto->tags = $tags;
				
				
			}
			$cat2 = DB::table('categorias as c')->join('producto as p','p.categoria','=','c.id')
				->join('almacen as a','a.producto','=','p.id')
				->join('sedes as s','a.sede','=','s.id')
				->select('c.id AS id_categoria_cat',
						'c.nombre AS nombre_categoria_cat',
						'c.slug AS slug_cat',
						's.id'
					)->where('s.id','=',$sede->id)->distinct()->get();
				
			

			return View::make('catalogo')->with('numSusc', $num_suscriptores)
			->with('sede',$sede)
			->with('categorias',$cat2)
			//->with('categorias', Categoria::all())
			->with('num_promos', $num_promos)
			->with('productos', $productos)
			->with('num_productos',$num_productos);
		}else{
			return Redirect::to('/')->with('message-alert','No hemos encontrado el catalogo solicitado');
		}
	}

	public function getCatalogoCat($empresa,$nombre_publico,$slug)
	{
			$sede = Sede::where('nombre_publico',"=", $nombre_publico)->where('empresa_id','=',$empresa)->get();
			$cateActual = Categoria::where('slug','=',$slug)->first();


		if($sede->count()){
			$sede = $sede->first();
			$empresaid = $sede->empresa->id;
			$empresa = Empresa::where('id','=',$empresaid)->first();

			if($empresa->estado==0){
				return Redirect::to('/')->with('message-alert','Esta empresa no esta disponible. Disculpa las molestias.');
			}

			$suscriptores = DB::table('user_subs as us')->join('empresas as e','us.empresa','=','e.id')
			->select('e.id')
			->where('us.empresa','=', $empresaid)->get();

			$num_suscriptores = count($suscriptores);
			$num_promos = $sede->promocion->count();


			$productos = Producto::where('sede','=',$sede->id)->join('almacen', 'producto.id', '=', 'almacen.producto')
								
													->join('categorias', 'producto.categoria', '=', 'categorias.id')
													->select('producto.nombre AS producto_nombre',
													'almacen.precio_detal',
													'producto.imagen',
													'producto.imgSmall',
													'producto.categoria',
													'producto.slug',
													'producto.id',
													'producto.descripcion AS producto_descripcion',
													'categorias.id AS id_categoria',
													
													
													'almacen.cantidad')->where('categorias.slug','=',$slug)->where('estado','=',1)->paginate(9);
			$num_productos = $productos->count();
			
			foreach($productos as $key => $producto) {
			
				$tags = Tag::where('producto','=',$producto->id)->get();
				$producto->tags = $tags;
				
				
			}
			$cat2 = DB::table('categorias as c')->join('producto as p','p.categoria','=','c.id')
				->join('almacen as a','a.producto','=','p.id')
				->join('sedes as s','a.sede','=','s.id')
				->select('c.id AS id_categoria_cat',
						'c.nombre AS nombre_categoria_cat',
						'c.slug AS slug_cat',
						's.id'
					)->where('s.id','=',$sede->id)->distinct()->get();
				
			

			return View::make('catalogoCategoria')->with('numSusc', $num_suscriptores)
			->with('sede',$sede)
			->with('categorias',$cat2)
			->with('cateActual',$cateActual)
			//->with('categorias', Categoria::all())
			->with('num_promos', $num_promos)
			->with('productos', $productos)
			->with('num_productos',$num_productos);
		}else{
			return Redirect::to('/')->with('message-alert','No hemos encontrado el catalogo solicitado');
		}

	}

	public function postCrearproducto() {
	
		$producto = new Producto();
		$producto->nombre = Input::get('product_name');
		$producto->descripcion = Input::get('description');
		$producto->categoria = Input::get('category');
		$producto->subcat_id = Input::get('subcat');
		$producto->slug = Input::get('seo');
		$file = Input::file('imagen');
		$file2 = Input::file('imagen2');
		$file3 = Input::file('imagen3');

		if(isset($file2)){
			$codigoIMG2 = str_random(13);
			$filename2 = date('Y-m-d-H-m-s')."-".$codigoIMG2.".jpg";
		//Image::make($file2->getRealPath())->resize(450, null, function($constraint){ $constraint->aspectRatio();})->save(public_path().'/img/products/img-lista/'.$filename2);
		//Image::make($file2->getRealPath())->resize(null,850 , function($constraint){ $constraint->aspectRatio();})->save(public_path().'/img/products/img-lista/'.$filename2);
			Image::make($file2->getRealPath())->resizeCanvas(400, 400, null, true, '#fff')->save(public_path().'/img/products/img-lista/'.$filename2);
		$producto->img1 = 'img/products/img-lista/'.$filename2;

		}

		if(isset($file3)){
			$codigoIMG3 = str_random(13);
			$filename3 = date('Y-m-d-H-m-s')."-".$codigoIMG3.".jpg";
		//Image::make($file2->getRealPath())->resize(450, null, function($constraint){ $constraint->aspectRatio();})->save(public_path().'/img/products/img-lista/'.$filename2);
		//Image::make($file3->getRealPath())->resize(null,850 , function($constraint){ $constraint->aspectRatio();})->save(public_path().'/img/products/img-lista/'.$filename3);
			Image::make($file3->getRealPath())->resizeCanvas(400, 400, null, true, '#fff')->save(public_path().'/img/products/img-lista/'.$filename3);
		$producto->img2 = 'img/products/img-lista/'.$filename3;

		}
		
		$codigoIMG = str_random(13);
		$filename = date('Y-m-d-H-m-s')."-".$codigoIMG.".jpg";
		Image::make($file3->getRealPath())->resizeCanvas(400, 400, null, true, '#fff')->save(public_path().'/img/products/'.$filename);
		//Image::make($file->getRealPath())->resize(null,850 , function($constraint){ $constraint->aspectRatio();})->save(public_path().'/img/products/'.$filename);
		//Image::make($file->getRealPath())->resize(720, 480, true)->save(public_path().'/img/products/'.$filename);

			
		
		$producto->imagen = 'img/products/'.$filename;
		//$producto->imgSmall = 'img/products/img-lista/'.$filename;
		
		$producto->save();
		
		$tags = Input::get('tags');
		
		$tags = explode(',', $tags);
		
		foreach($tags as $key => $value) {
			
			$tag = new Tag();
			$tag->producto = $producto->id;
			$tag->etiqueta = $value;
			if($tag->save()) {
			
			}
		}
		$sus = Suscripcion::where('empresa', '=', Input::get('empresa_id'))->update(array('pro_id' => $producto->id,'pro_name'=>$producto->nombre));
		
		$almacen = new Almacen();
		$almacen->producto = $producto->id;
		$almacen->sede = Input::get('sede');
		$almacen->precio_detal = Input::get('product_price');
		$almacen->cantidad = Input::get('product_amount');
		
		if($almacen->save()) {
		
			return Redirect::to('/mega/perfil')->with('message-alert','Se ha creado el producto satisfactoriamente');
		}
	}
}