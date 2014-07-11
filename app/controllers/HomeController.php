<?php

class HomeController extends BaseController {

	public function getCarlos (){
		$categorias=Categoria::all();
		$numCat=$categorias->count();
		$usuarios=User::where('tipo','=',2)->where('active','=',0)->get();
		return View::make('Carlos.andres')->with('categorias',$categorias)->with('numCategorias',$numCat)->with('usutip1',$usuarios);
	}

	public function getLanding2()
	{
		return View::make('landing2');
	}

	public function postListaMail()
	{
		$validator = Validator::make(Input::all(),
				array(
						'email' => 'required|email|unique:mails'
						
					)

			);

		if($validator->passes()){
			$mail = new Mails();

			$mail->email = Input::get('email');

			if($mail->save())
			{
				Mail::send('emails.auth.listaM', array('email' =>Input::get('email')), function($message) use ($mail){
						$message->to($mail->email)->subject('Suscripción a Megalopolis');
					});

				return Redirect::to('/landing2')->with('message-alert','Suscripción Exitosa.');
			}
		}

		return Redirect::to('/landing2')->with('message-alert','Error en el formulario.');
	}

	public function getIndex()

	{
		$empresas = Empresa::where('estado','=',1)->orderBy(DB::raw('RAND()'))->take(4)->get();
		return View::make('index')->with('empresas',$empresas);
	}

	public function getLogin(){
		if(Auth::check()){
			return Redirect::to('/');
		}
		return View::make('mega.login');
	}

	public function getRegistro(){
		if(Auth::check()){
			return Redirect::to('/');
		}
		return View::make('mega.registro');
	}

	public function getLanding()

	{
		$empresas = Empresa::where('estado','=',1)->orderBy(DB::raw('RAND()'))->take(4)->get();
		if($empresas->count())
		{
			return View::make('landing')->with('empresas',$empresas);
		}

	

	}

}