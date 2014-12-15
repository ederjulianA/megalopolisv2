<?php
	

	class Admin2Controller  extends BaseController {

			protected $miEmpresa;
			protected $producto;
			protected $category;
			protected $archivo;
			protected $preguntasNull;

			public function __construct(Empresa $miEmpresa, Producto $producto, Categoria $category, Archivo $archivo, Pregunta $preguntasNull)

			{
				$this->miEmpresa 	= $miEmpresa;
				$this->producto 	= $producto;
				$this->category 	= $category;
				$this->archivo 		= $archivo;
				$this->preguntasNull= $preguntasNull;
			}
			
			public function getIndex()
			{
				$id_user = Auth::user()->id;
				//$empresa = Empresa::where('user_id','=',$id_user)->first();
				$empresa 			= 	$this->miEmpresa->getEmpresa($id_user);
				$preguntas_null		=	$this->preguntasNull->getQuestionsNull($empresa->id);
				$num_preg_null 		=	count($preguntas_null);
				if($empresa)
				{
					return View::make('admin2.index', compact('empresa','preguntas_null','num_preg_null'));
				} 
			}

			public function getAllProducts()
			{
				$id_user = Auth::user()->id;
				$empresa = $this->miEmpresa->getEmpresa($id_user);
				$preguntas_null		=	$this->preguntasNull->getQuestionsNull($empresa->id);
				$num_preg_null 		=	count($preguntas_null);
				$productos = $this->producto->getAll($empresa->id);
				return View::make('admin2.productos', compact('productos','empresa','preguntas_null','num_preg_null'));
			}



			public function getNewProduct()
			{
				$id_user 		= Auth::user()->id;
				
				$empresa 		= $this->miEmpresa->getEmpresa($id_user);
				$preguntas_null		=	$this->preguntasNull->getQuestionsNull($empresa->id);
				$num_preg_null 		=	count($preguntas_null);
				$sedes 			= $this->miEmpresa->getSedes($empresa->id);
				$categories 	= $this->category->getAll();

				
				return View::make('admin2.nuevoproducto', compact('empresa','categories','sedes','preguntas_null','num_preg_null'));
			}

			public function getEditProduct($id)
			{
				$id_user 		= Auth::user()->id;
				
				$empresa 		= $this->miEmpresa->getEmpresa($id_user);
				$preguntas_null		=	$this->preguntasNull->getQuestionsNull($empresa->id);
				$num_preg_null 		=	count($preguntas_null);
				$sedes 			= $this->miEmpresa->getSedes($empresa->id);
				$categories 	= $this->category->getAll();
				$producto 		= $this->producto->getProductoById($id);
				$subcategories	= $this->category->getAllSubcats($producto->categoria_id);

				
				return View::make('admin2.editarproducto', compact('empresa','categories','sedes','producto','subcategories','preguntas_null','num_preg_null'));
			}

			public function getLogo()
			{
				$id_user 		= Auth::user()->id;
				
				$empresa 		= $this->miEmpresa->getEmpresa($id_user);
				$preguntas_null		=	$this->preguntasNull->getQuestionsNull($empresa->id);
				$num_preg_null 		=	count($preguntas_null);

				return View::make('admin2.logo', compact('empresa','preguntas_null','num_preg_null'));
			}

			public function getTema()
			{
				$id_user 			= Auth::user()->id;
				$empresa 			= $this->miEmpresa->getEmpresa($id_user);
				$preguntas_null		=	$this->preguntasNull->getQuestionsNull($empresa->id);
				$num_preg_null 		=	count($preguntas_null);
				$slides 			= $this->archivo->getAllSlides($empresa->id);
				$numero_slides		= $this->archivo->getNumSlides($empresa->id);
				
				

				return View::make('admin2.tema', compact('empresa','slides','numero_slides','preguntas_null','num_preg_null'));
			}

			public function getInfo()
			{
				$id_user 			= Auth::user()->id;
				$empresa 			= $this->miEmpresa->getEmpresa($id_user);
				$preguntas_null		=	$this->preguntasNull->getQuestionsNull($empresa->id);
				$num_preg_null 		=	count($preguntas_null);
				return View::make('admin2.info', compact('empresa','preguntas_null','num_preg_null'));

			}

			public function getPassword()
			{
				$id_user 			= Auth::user()->id;
				$empresa 			= $this->miEmpresa->getEmpresa($id_user);
				$preguntas_null		=	$this->preguntasNull->getQuestionsNull($empresa->id);
				$num_preg_null 		=	count($preguntas_null);
				return View::make('admin2.password', compact('empresa','preguntas_null','num_preg_null'));
			}

			public function getChatUnico($id)
			{
				$id_user 			= Auth::user()->id;
				$empresa 			= $this->miEmpresa->getEmpresa($id_user);
				$preguntas_null		=	$this->preguntasNull->getQuestionsNull($empresa->id);
				$num_preg_null 		=	count($preguntas_null);
				$chat 				= $this->preguntasNull->getChat($id);
				if($chat)
				{
					return View::make('admin2.chatUnico', compact('empresa','preguntas_null','num_preg_null','chat'));
				}

				return Redirect::to('/adminpanel/preguntas')->with('message-alert','Problemas al buscar pregunta. Lo sentimos :(');
				
			}

			public function getChats()
			{
				$id_user 			= 	Auth::user()->id;
				$empresa 			= 	$this->miEmpresa->getEmpresa($id_user);
				$preguntas_null		=	$this->preguntasNull->getQuestionsNull($empresa->id);
				$num_preg_null 		=	count($preguntas_null);

				$allChats 			= 	$this->preguntasNull->getAllChats($empresa->id);
				return View::make('admin2.chats', compact('empresa','preguntas_null','num_preg_null','allChats'));
			}

			public function getMapa()
			{
				$id_user 			= 	Auth::user()->id;
				$empresa 			= 	$this->miEmpresa->getEmpresa($id_user);
				$preguntas_null		=	$this->preguntasNull->getQuestionsNull($empresa->id);
				$num_preg_null 		=	count($preguntas_null);
				return View::make('admin2.map', compact('empresa','preguntas_null','num_preg_null'));
			}





			//POST FUNCTIONS ###################################################################

			public function postChatUnico()
			{
				if(isset($_POST['id_pregunta']))
				{
					$data = Input::all();
					$rules = [
						'respuesta' => 'required|min:2'
					];

					$validator = Validator::make($data, $rules);

					if($validator->fails())
					{
						return Redirect::back()->withInput()->with('message-alert','Revisa los errores en el formulario')->withErrors($validator->messages());
					}

					$pregunta = Pregunta::where('id','=',Input::get('id_pregunta'))->first();
					$pregunta->respuesta = Input::get('respuesta');
					if($pregunta->save())
					{
						return Redirect::to('/adminpanel/preguntas')->with('message-alert','Pregunta Respondida.');
					}
				}
			}


			public function postGuardarMapa()
			{
				$data = Input::all();

				$rules = [
					'direccion' => 'required'
				];

				$validator = Validator::make($data, $rules);
				if($validator->fails())
					{
						return Redirect::back()->withInput()->with('message-alert','Revisa los errores en el formulario')->withErrors($validator->messages());
					}

				$empresa = Empresa::where('id','=', Input::get('id_empresa'))->first();
				$empresa->dir_mapa	=	Input::get('direccion');
				$empresa->latitude	=	Input::get('lat');
				$empresa->longitude	=	Input::get('lng');

				if($empresa->save())
				{
					return Redirect::back()->with('message-alert','Se ha actualizado tu mapa');
				}	

			}
	}