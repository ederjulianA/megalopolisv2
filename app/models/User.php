<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {



	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	protected $fillable = array('username', 'email');

	public static $rules = array(
			'username'				=>		'required|min:2|max:25|',
			'email'					=>		'required|email|unique:users',
			'password'				=>	'required|alpha_num|between: 8,12|confirmed',
			'password_confirmation'	=>	'required|alpha_num|between:8,12',
			'tipo'					=>	'required|integer',
			'img'		 			 =>'required|image|mimes:jpeg,jpg,bmp,png,gif'
			);

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	public function empresa(){
		return $this->hasOne('Empresa','user_id');
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	/*public function getReminderEmail()
	{
		return $this->email;
	}*/

}