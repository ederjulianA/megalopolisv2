<?php

class HomeController extends BaseController {



	public function getIndex()
	{
		return View::make('index');
	}

	public function getLogin(){
		return View::make('mega.login');
	}

}