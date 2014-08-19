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
