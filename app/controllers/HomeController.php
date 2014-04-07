<?php

class HomeController extends BaseController {



	public function getIndex()
	{
		return View::make('index');
	}

	public function getLogin(){
		if(Auth::check()){
			return Redirect::to('/');
		}
		return View::make('mega.login');
	}

}