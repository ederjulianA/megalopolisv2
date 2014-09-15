<?php


Class PagosController  extends BaseController {

	public function getPagos()
	{
		if(!Auth::check() || Auth::user()->tipo != 2 )
		{
			return Redirect::to('/');
		}

		$id = Auth::user()->id;

		$user = User::where('id',"=",$id)->first();
		$empresa = Empresa::where("user_id","=",$id)->first();
		$preguntas_null = Pregunta::where('empresa_id','=',$empresa->id)->where('respuesta','=', NULL)->orderBy('created_at','desc')->get();
		$num_preguntas_null = $preguntas_null->count();
		$pagos = Pagos::all();

		return  View::make('empresa.pagos')->with('user', $user)->with('empresa', $empresa)->with('num_nulls', $num_preguntas_null)
			->with('preguntas_null', $preguntas_null)->with('pagos',$pagos);
	}


	public function addPago()
	{
		header('Content-type: text/javascript');

		if(isset($_POST['id_pago']) && isset($_POST['id_empresa']))
		{
			$estado = array('estado'=>1,'mensaje'=>'BIEN');

			$pago = new Pagosempresa;

			$pago->id_empresa 	= $_POST['id_empresa'];
			$pago->id_pago 		= $_POST['id_pago'];

			if($pago->save())
			{
				return Response::json($estado);
			}
		}
	}
}