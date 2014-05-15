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
}