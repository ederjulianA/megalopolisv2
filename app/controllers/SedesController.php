<?php

class SedesController extends BaseController{

	public function getCatalogo($nombre_publico){

		$sede = Sede::where('nombre_publico',"=", $nombre_publico)->get();


		if($sede->count()){
			$sede = $sede->first();

			return View::make('catalogo')->with('sede',$sede);
		}else{
			return Redirect::to('/navegar')->with('message-alert','No hemos encontrado el catalogo solicitado');
		}
	}
}