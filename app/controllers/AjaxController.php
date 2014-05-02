<?php


Class AjaxController  extends BaseController {

	public function postBarrios()
	{
		header('Content-type: text/javascript');
		$ciudad_id = $_POST['ciudad_id'];
		$json = array(
			'success' => false,
			'resul' => 0
			);

		if(isset($_POST['ciudad_id']))
		{

			$ciudad_id = $_POST['ciudad_id'];
			
			$barrios = Barrio::where('ciudad_id','=',$ciudad_id)->orderBy('barrio','ASC')->get();
			
			//$barrios = Barrio::find(1);
			//$barrios->toArray();

			$json['success'] = true;
			$json['result'] = $ciudad_id + 5;
		}

		return Response::json($barrios);

	
		

		
	}

	public function postCategorias(){
		header('Content-type: text/javascript');

		$json = array('error' => 'Hubo un error');


		if(isset($_POST['id_cat']))
		{
			$id_cat = $_POST['id_cat'];

			$empresa = Empresa::where('sector_id','=', $id_cat)->with('sector')->get();



		


		}

			if($empresa->count())
			{
				$empresa->toArray();


				return Response::json($empresa);

			}else{
			return Response::json($json);

			}


	}
}