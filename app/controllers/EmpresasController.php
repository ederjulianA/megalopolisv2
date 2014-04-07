<?php

class EmpresasController  extends BaseController {

	public function getNuevaEmpresa(){

		return View::make('empresa.nueva');
	}
}