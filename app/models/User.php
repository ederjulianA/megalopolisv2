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
			'password'				=>	'required|alpha_num|min:6|confirmed',
			'password_confirmation'	=>	'required|alpha_num|min:6',
			'tipo'					=>	'required|integer',
			
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

	public function suscripcion()
	{
		return $this->belongsToMany('Empresa','user_subs');
	}

	

	public function empresa(){
		return $this->hasOne('Empresa','user_id');
	}
	public function shipping(){
		return $this->hasOne('Shipping');
	}

	public function producto(){
		return $this->belongsToMany('Producto','user_favoritos');
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

	public function getRememberToken()
{
    return $this->remember_token;
}

public function setRememberToken($value)
{
    $this->remember_token = $value;
}



public function getRememberTokenName()
{
    return 'remember_token';
}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

}