<?php

class PreguntasController extends BaseController {

	public function postResponderPregunta(){
		$pregunta = Pregunta::where('id','=', Input::get('pregunta_id'))->first();

		if($pregunta->count()){
			$pregunta->respuesta = Input::get('respuesta');

			if($pregunta->save())
			{
				return Redirect::to('/mega/perfil')->with('message-alert','Pregunta Respondida');
			}else{
					return Redirect::to('/mega/perfil')->with('message-alert','Hubieron Errores al Responder la pregunta');
			}	
		}
	}


}

