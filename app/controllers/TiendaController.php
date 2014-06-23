<?php

class TiendaController  extends BaseController {

	public function getIndex()
	{
		$productos = Producto::where('estado','=',1)->get();
		return View::make('tienda.index')->with('productos',$productos)->with('categorias', Categoria::all());
	}
}