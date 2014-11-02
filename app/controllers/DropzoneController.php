<?php

class DropzoneController  extends BaseController {

	public function PostFiles(){
		$fileInput =Input::file('file');

		if(Input::hasFile('file'))

		{
			$codigoIMG2 = str_random(13);
			$fileName = date('Y-m-d-H-m-s')."-".$codigoIMG2.".jpg";;
			$path = '/img/filesSlide/';
			$fileType=$fileInput->guessExtension();
			$fileSize=$fileInput->getClientSize()/1024;

			$id= Auth::user()->empresa->id;

			$empresa =Empresa::find($id);

			$file 			=	new Archivo;
			$file->nombre	=	$fileName;
			$file->ruta 	=	$path;
			$file->tipo		=	$fileType;
			$file->tamano	=	$fileSize;

			$file->empresa()->associate($empresa);

			if($fileInput->move(public_path().$path,$fileName))
			{
				$file->save();
			}
		}
	}


	public function postBorrarslide(){
		if (isset($_POST['id_slide']))
		{
			$idSlide = $_POST['id_slide'];
			$file = Archivo::where('id','=',$idSlide)->first();
				if($file->count())
				{
					File::delete($file->ruta.$file->nombre);
					if($file->delete())
					{
						return Redirect::to('/mega/cambiar-imagen')->with('message-alert','Imagen Borrada Exitosamente.');
					}
					
				}
		}
	}
}