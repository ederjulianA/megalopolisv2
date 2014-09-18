<?php

class PreguntasController extends BaseController {

	public function postResponderPregunta(){
		$pregunta = Pregunta::where('id','=', Input::get('pregunta_id'))->first();

		if($pregunta->count()){
			$pregunta->respuesta = Input::get('respuesta');
			$pregunta->estado = 1;
			$pre = $pregunta->pregunta;
			$res = Input::get('respuesta');
			$user = User::where('id','=',Input::get('user_id'))->first();
			$usuario = $user->username;

			Mail::send('emails.auth.respuestaMega', array('link' => URL::route('perfil-preguntas'),'usuario'=>$usuario,'pregunta'=>$pre, 'respuesta'=>$res), function($message) use ($user){
						$message->to($user->email, $user->username)->subject('Respuesta a tu pregunta en Megalopolis');
					});

			if($pregunta->save())
			{
				return Redirect::to('/mega/perfil')->with('message-alert','Pregunta Respondida');
			}else{
					return Redirect::to('/mega/perfil')->with('message-alert','Hubieron Errores al Responder la pregunta');
			}	
		}
	}


}

