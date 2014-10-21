<?php
use Goodby\CSV\Import\Standard\Lexer;
use Goodby\CSV\Import\Standard\Interpreter;
use Goodby\CSV\Import\Standard\LexerConfig;




class CsvController  extends BaseController {

	public function getDistribuidorProducto($empresa, $id)

	{
		$N_empresa = Empresa::where('nombre_publico','=',$empresa)->first();

 				if($N_empresa->estado == 0)
 				{
 					return Redirect::to('/')->with('message-alert','La empresa no esta disponible');
 				}

 			$producto = Mantis::where('empresa_id','=',$N_empresa->id)->where('cod','=',$id)->where('estado','=',1)->first();
 			$todasSedes = Sede::where('empresa_id','=', $N_empresa->id)->get();
										$totalSedes = $todasSedes->count();	
 			
 			return View::make('mantis.detalle')->with('sedes',$todasSedes)->with('num_sedes',$totalSedes)->with('empresa',$N_empresa)->with('producto',$producto);	
	}



	public function getDistribuidor($empresa)
	{
		$plantilla = 2;
 		
 			

 			$N_empresa = Empresa::where('nombre_publico','=',$empresa)->first();

 				if($N_empresa->estado == 0)
 				{
 					return Redirect::to('/')->with('message-alert','La empresa no esta disponible');
 				}

 			$productos = Mantis::where('empresa_id','=',$N_empresa->id)->get();
 			$todasSedes = Sede::where('empresa_id','=', $N_empresa->id)->get();
										$totalSedes = $todasSedes->count();	
 			
 			return View::make('mantis.mantisCatalogo')->with('products', Cart::contents())->with('sedes',$todasSedes)->with('num_sedes',$totalSedes)->with('empresa',$N_empresa)->with('productos',$productos);	
	}

	public function getSync()
	{
		$id = Auth::user()->id;

		$user = User::where('id',"=",$id);
		$empresa = Empresa::where("user_id","=",$id);
		

		if($user->count() && $empresa->count())
		{
			$user = $user->first();
			$empresa = $empresa->first();	
			$sede = Sede::where("empresa_id","=", $empresa->id)->get();
			$preguntas_null = Pregunta::where('empresa_id','=',$empresa->id)->where('respuesta','=', NULL)->orderBy('created_at','desc')->get();
			$num_preguntas_null = $preguntas_null->count();

			return View::make('mantis.index')
			->with('user', $user)
			->with('sedes', $sede)
			->with('num_nulls', $num_preguntas_null)
			->with('preguntas_null', $preguntas_null)
			->with('ciudades', Ciudad::all())
			->with('categorias', Categoria::all())
			->with('empresa', $empresa);
		}

		return Redirect::to('/mega/perfil')
			->with('message-alert','error al ingresar ');
	}


	public function postUpload()
	{

		 if (Input::hasFile('file')){

	        $csv = Input::file('file');


			$pdo = DB::connection()->getPdo();
			//$pdo->query('CREATE TABLE IF NOT EXISTS mantis (cod VARCHAR(250), `nombre` VARCHAR(255), cod_categoria VARCHAR(255), nombre_categoria VARCHAR(250), cod_subcategoria VARCHAR(250), empresa_id INT, precio INT, imagen VARCHAR(250), descuento INT, created_at DATE, updated_at DATE, estado INT');
			

			$config = new LexerConfig();
			$lexer = new Lexer($config);

			$interpreter = new Interpreter();
			$interpreter->unstrict();

			$interpreter->addObserver(function(array $columns) use ($pdo) {
				$stmt = $pdo->prepare('REPLACE INTO mantis (cod, nombre, cod_categoria, nombre_categoria, cod_subcategoria, empresa_id, precio, imagen, descuento, created_at, updated_at, estado) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )');
			    	$stmt->execute($columns);
				/*$select_stmt = $pdo->prepare('SELECT id FROM producto2 WHERE id = ?');
				$select_stmt->execute([ $columns[0] ]);
				
				$id = $select_stmt->fetchColumn();
				if(!$id)
				{
					$stmt = $pdo->prepare('INSERT INTO producto2 (id, nombre, precio) VALUES (?, ?, ?)');
			    	$stmt->execute($columns);
				}else{
					$update_stmt = $pdo->prepare('UPDATE producto2 SET nombre = ?, precio = ? WHERE id = ?');
					$update_stmt->execute($columns);
				}*/
				
				
			    
			});

			$lexer->parse($csv, $interpreter);
			return Redirect::to('/mega/sync');
			}


	}



}