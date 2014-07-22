<?php

use Intervention\Image\Image;

class SedesController extends BaseController{

	public function getCatalogo($nombre_publico){

		$sede = Sede::where('nombre_publico',"=", $nombre_publico)->get();


		if($sede->count()){
			$sede = $sede->first();
			$empresaid = $sede->empresa->id;

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
													'producto.id',
													'producto.descripcion AS producto_descripcion',
													'categorias.nombre AS categoria_nombre',
													'almacen.cantidad')->where('estado','=',1)->get();
			$num_productos = $productos->count();
			
			foreach($productos as $key => $producto) {
			
				$tags = Tag::where('producto','=',$producto->id)->get();
				$producto->tags = $tags;
			}

			return View::make('catalogo')->with('numSusc', $num_suscriptores)
			->with('sede',$sede)
			->with('categorias', Categoria::all())
			->with('num_promos', $num_promos)
			->with('productos', $productos)
			->with('num_productos',$num_productos);
		}else{
			return Redirect::to('/navegar')->with('message-alert','No hemos encontrado el catalogo solicitado');
		}
	}

	public function postCrearproducto() {
	
		$producto = new Producto();
		$producto->nombre = Input::get('product_name');
		$producto->descripcion = Input::get('description');
		$producto->categoria = Input::get('category');
		$producto->subcat_id = Input::get('subcat');
		$file = Input::file('imagen');
		$file2 = Input::file('imagen2');
		$file3 = Input::file('imagen3');

		if(isset($file2)){
			$codigoIMG2 = str_random(13);
			$filename2 = date('Y-m-d-H')."-".$codigoIMG2."-".$file2->getClientOriginalName();
		//Image::make($file2->getRealPath())->resize(450, null, function($constraint){ $constraint->aspectRatio();})->save(public_path().'/img/products/img-lista/'.$filename2);
		Image::make($file2->getRealPath())->resize(720, 480, true )->save(public_path().'/img/products/img-lista/'.$filename2);
		$producto->img1 = 'img/products/img-lista/'.$filename2;

		}

		if(isset($file3)){
			$codigoIMG3 = str_random(13);
			$filename3 = date('Y-m-d-H')."-".$codigoIMG3."-".$file3->getClientOriginalName();
		//Image::make($file2->getRealPath())->resize(450, null, function($constraint){ $constraint->aspectRatio();})->save(public_path().'/img/products/img-lista/'.$filename2);
		Image::make($file3->getRealPath())->resize(720, 480, true )->save(public_path().'/img/products/img-lista/'.$filename3);
		$producto->img2 = 'img/products/img-lista/'.$filename3;

		}
		
		$codigoIMG = str_random(13);
		$filename = date('Y-m-d-H')."-".$codigoIMG."-".$file->getClientOriginalName();
		//Image::make($file->getRealPath())->resize(null, 450, function($constraint){ $constraint->aspectRatio();})->save(public_path().'/img/products/'.$filename);
		Image::make($file->getRealPath())->resize(720, 480, true)->save(public_path().'/img/products/'.$filename);

			
		
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