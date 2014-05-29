<?php

class PromocionesController extends BaseController {

	public function postNuevaPromo(){
			$validator = Validator::make(Input::all(),
				array(
						'sede_id' => 'integer',
						'categoria' => 'integer',
						'titulo' => 'required|min:3|max:100',
						'desc_corta' => 'required|min:5|max:200',
						'desc_larga'=> 'required|min:5 max:4000',
						'img_promo'=> 'image|mimes:jpeg,jpg,bmp,png,gif'
					)
			);

			if($validator->passes()){

				$promo = new Promociones;
				$promo->sede_id = Input::get('sede_id');
				$promo->categoria_id = Input::get('categoria');
				$promo->titulo = Input::get('titulo');
				$promo->sin_descuento = Input::get('sin_descuento');
				$promo->con_descuento = Input::get('con_descuento');

				$valor_descuento =($promo->sin_descuento - $promo->con_descuento);
				$porcentaje_descuento = round(($valor_descuento * 100)/ $promo->sin_descuento);
				$promo->porcentaje = $porcentaje_descuento;

				$promo->titulo_seo  =Input::get('titulo-seo');
				$promo->descripcion_corta = Input::get('desc_corta');
				$promo->descripcion_larga =Input::get('desc_larga');
				$codigoIMG = str_random(13);
				$logo = Input::file('img');

				

				
				$filename = date('Y-m-d-H')."-".$codigoIMG."-".$logo->getClientOriginalName();
				Image::make($logo->getRealPath())->resize(468, 249)->save(public_path().'/img/promociones/'.$filename);
				$promo->img = 'img/promociones/'.$filename;

				if($promo->save()){
					return Redirect::to('/nueva-sede')->with('message-alert','Promo creada');
				}else{
					return Redirect::to('/nueva-sede')->with('message-alert','Error al crear promo');
				}

			}else{
				return Redirect::to('/nueva-sede')->withErrors($validator)->withInput()->with('message-alert','Error al crear la nueva promo');
			}
	}

	public function getEditarPromo($idPromo)
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

			$promo = DB::table('promociones as pr')->join('sedes as s','pr.sede_id','=','s.id')
			->select('pr.titulo',
					'pr.id',
					'pr.descripcion_corta',
					'pr.titulo_seo',
					'pr.sin_descuento',
					'pr.con_descuento',
					'pr.descripcion_corta',
					'pr.descripcion_larga',
					'pr.img',
					'pr.estado'

				)
			->where('pr.id','=',$idPromo)->first();
				
			return View::make('empresa.editar-promos')
			
			->with('user', $user)
			->with('promo',$promo)
			->with('num_nulls', $num_preguntas_null)
			->with('preguntas_null', $preguntas_null)
			->with('empresa', $empresa);
		}
	}


	public function postEditarPromo()
	{
		if( !Auth::check() || Auth::user()->tipo != 2)
		{
			return Redirect::to('/');
		}

			$validator = Validator::make(Input::all(),
				array(
						'sede_id' => 'integer',
						'categoria' => 'integer',
						'titulo' => 'required|min:3|max:100',
						'desc_corta' => 'required|min:5|max:200',
						'desc_larga'=> 'required|min:5 max:4000'
						
					)
			);

			if($validator->passes())
			{
				$promocion = Promociones::where('id','=',Input::get('promo_id'))->first();
				$nuevaIMG = Input::file('img-nueva');

				if(!isset($nuevaIMG) ){
					$promocion->estado = Input::get('estado_promo');
					$promocion->titulo = Input::get('titulo');
					$promocion->titulo_seo = Input::get('titulo-seo');
					$promocion->sin_descuento = Input::get('sin_descuento');
					$promocion->con_descuento = Input::get('con_descuento');
					$valor_descuento =($promocion->sin_descuento - $promocion->con_descuento);
					$porcentaje_descuento = round(($valor_descuento * 100)/ $promocion->sin_descuento);
					$promocion->porcentaje = $porcentaje_descuento;
					$promocion->descripcion_corta = Input::get('desc_corta');
					$promocion->descripcion_larga = Input::get('desc_larga');

						if($promocion->save()){
							return Redirect::to('/nueva-sede')->with('message-alert','Actualizacion de promo exitosa');
						}else{
							return Redirect::to('/nueva-sede')->with('message-alert','Error al actualizar la sede');
						}
				}else if(isset($nuevaIMG)){
						File::delete('public/'.$promocion->img);
						$codigoIMG = str_random(13);
						$logo = Input::file('img-nueva');

				

				
						$filename = date('Y-m-d-H')."-".$codigoIMG."-"."promo-".$promocion->titulo_seo.".jpg";
						Image::make($logo->getRealPath())->resize(500, 500)->save(public_path().'/img/promociones/'.$filename);
						$promocion->img = 'img/promociones/'.$filename;

						$promocion->estado = Input::get('estado_promo');
						$promocion->titulo = Input::get('titulo');
						$promocion->titulo_seo = Input::get('titulo-seo');
						$promocion->sin_descuento = Input::get('sin_descuento');
						$promocion->con_descuento = Input::get('con_descuento');
						$valor_descuento =($promocion->sin_descuento - $promocion->con_descuento);
						$porcentaje_descuento = round(($valor_descuento * 100)/ $promocion->sin_descuento);
						$promocion->porcentaje = $porcentaje_descuento;
						$promocion->descripcion_corta = Input::get('desc_corta');
						$promocion->descripcion_larga = Input::get('desc_larga');

						if($promocion->save()){
							return Redirect::to('/nueva-sede')->with('message-alert','Actualizacion de promo exitosa');
						}else{
							return Redirect::to('/nueva-sede')->with('message-alert','Error al actualizar la sede');
						}



				}
			}


	}

	public function getPromos($id){
		$promo = Promociones::find($id);

		if($promo->count()){
			return View::make('empresa.promos')->with('promo',$promo);
		}

	}
}