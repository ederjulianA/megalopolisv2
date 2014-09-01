<?php
class PasswordController extends BaseController {
 
  public function remind()
  {
    return View::make('password.remind');
  }

  public function request()
	{
	  $credentials = array('email' => Input::get('email'), 'password' => Input::get('password'));
	 
	  return Password::remind($credentials);
	}


	public function reset($token)
{
  return View::make('password.reset')->with('token', $token);
}


public function update()
{
  $credentials = array('email' => Input::get('email'),'password'=> Input::get('password'), 'password_confirmation'=> Input::get('password_confirmation'),'token'=> Input::get('token'));
 
  return Password::reset($credentials, function($user, $password)
  {
    $user->password = Hash::make($password);
 
    if($user->save())
 {
    return Redirect::to('login')->with('message-alert', 'Your password has been reset');

   }
  });
}



}