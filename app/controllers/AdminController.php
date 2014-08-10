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
		$categorias = Categoria::all();

		return View::make('admin.categorias')->with('categorias',$categorias);
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
