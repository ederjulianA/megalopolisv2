<?php

class AdminController  extends BaseController {

	public function getAdminIndex()
	{
		if(!Auth::check() || Auth::user()->isadmin != 1)
		{

			return Redirect::to('/');
		}
		$categorias = Categoria::all();
		return View::make('admin.index')->with('categorias',$categorias);
	}

	public function PostAdminProductosEditar()
	{
		$producto = Producto::where('id','=', Input::get('id'))->first();
		if($producto->count())
		{
			$producto->slug = Input::get('seo');
			if($producto->save())
			{
				return Redirect::to('/admin/productos')->with('message-alert','Se agrego seo slug correctamente');
			}else{
				return Redirect::to('/admin/productos')->with('message-alert','Error al agregar  seo slug :(');
			}
		}
	}

	public function getAdminProductos()
	{
		if(!Auth::check() || Auth::user()->isadmin != 1)
		{

			return Redirect::to('/');
		}

		$productos = Producto::where('slug','=',NULL)->get();
		return View::make('admin.productos')->with('productos',$productos);
	}

	public function getAdminProductosEditar($id)
	{
		if(!Auth::check() || Auth::user()->isadmin != 1)
		{

			return Redirect::to('/');
		}

		$producto = Producto::where('id','=',$id)->first();
		if($producto->count())
		{
			return View::make('admin.editar-producto')->with('producto',$producto);
		}
	}



	public function getUsers()
	{
		if(!Auth::check() || Auth::user()->isadmin != 1)
		{

			return Redirect::to('/');
		}

		$users = User::where('id','>',0)->orderBy('id','desc')->get();
		$numUsers = $users->count();

		return View::make('admin.users')->with('users',$users)->with('numUsers',$numUsers);
	}


	public function emailFiltroAjaxCall()
	{
		header('Content-type: text/javascript');
		$email = $_POST['email'];
		

		$user = User::where('email','=',$email)->first();
		
		$numero = count($user);

		if($numero > 0)
		{
			return Response::json($user);
		}else{
			$error = array('estado'=>0,'mensaje'=>'Error');
			return Response::json($error);
		}

			

		
	}


	public function editarUserPost()
	{
		if(!Auth::check() || Auth::user()->isadmin != 1)
		{

			return Redirect::to('/');
		}

		$user = User::where('id','=',Input::get('id_user'))->first();
		if($user->count())
		{
			$user->email = Input::get('email');
			$user->tipo = Input::get('tipoUser');
			$user->active = Input::get('ActiveUser');
			$user->code = "";

			if($user->save())
			{
				return Redirect::to('/admin/usuarios/editar_'.$user->id)->with('message-alert','Usuario Actualizado');
			}else{
				return Redirect::to('/admin/usuarios/editar_'.$user->id)->with('message-alert','Error al actualizar Usuario :(');
			}
		}

	}

	public function getEditarUser($id_user)
	{
		if(!Auth::check() || Auth::user()->isadmin != 1)
		{

			return Redirect::to('/');
		}

		$user = User::where('id','=',$id_user)->first();

		if($user->count()){
			return View::make('admin.editarUser')->with('user',$user);
		}

	}




	public function getAdminCategorias()
	{
		if(!Auth::check() || Auth::user()->isadmin != 1)
		{
			return Redirect::to('/');
		}
		$categorias = Categoria::where('id','>',0)->orderBy('nombre','asc')->get();

		return View::make('admin.categorias')->with('categorias',$categorias);
	}

	public function editarCategorias()
	{
		if(!Auth::check() || Auth::user()->isadmin != 1)
		{
			return Redirect::to('/');
		}

		$categoria = Categoria::where('id','=', Input::get('id_cat'))->first();
		$categoria->nombre = Input::get('cat_nombre');

		if($categoria->save()){
			return Redirect::to('/admin/categorias')->with('message-alert','Categoria Actualizada correctamente.');
		}else{
			return Redirect::to('/admin/categorias')->with('message-alert','Error al actualizar categoria.');
		}
	}


	public function editarSubCategorias()
	{
		if(!Auth::check() || Auth::user()->isadmin != 1)
		{
			return Redirect::to('/');
		}

		$subcategoria = Subcategoria::where('id','=', Input::get('id_subcat'))->first();
		$subcategoria->nombre_sub = Input::get('subcat_nombre');

		if($subcategoria->save()){
			return Redirect::to('/admin/categorias')->with('message-alert','Subcategoria Actualizada correctamente.');
		}else{
			return Redirect::to('/admin/categorias')->with('message-alert','Error al actualizar subcategoria.');
		}
	}



	public function postNuevaSubCat()
	{
		if(isset($_POST['subcatName']) && isset($_POST['id_categoria']))
		{
			$subcat = new Subcategoria;

			$subcat->categoria_id = $_POST['id_categoria'];
			$subcat->nombre_sub = $_POST['subcatName'];

			if($subcat->save())
			{
				return Redirect::to('/admin/categorias');
			}

		}else{
			return Redirect::to('/admin/categorias');
		}
	}

	public function postNuevaCat()
	{
		if(isset($_POST['categoria']))
		{
			$cat = new Categoria;
			$cat->nombre = $_POST['categoria'];

				if($cat->save())
				{
					return Redirect::to('/admin/categorias');
				}
		}else
		{
			return Redirect::to('/admin/categorias');
		}

	}



}
