<?php namespace Eder\Repositories;
use App\Models\Empresa;
	
	class EmpresaRepo extends BaseRepo {
		 public function getModel()
	    {
	        return new Empresa;
	    }	
	}