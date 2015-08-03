<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'users';

	protected $hidden = array('password', 'remember_token');

	protected $fillable=array('firstName','lastName','email'/*,'mobileNumber'*/,'gender');

	public static $rules=array(

		'firstName'=>'required|min:2|alpha',
		'lastName'=>'required|min:2|alpha',
		'email'=>'required|unique:users|email',

		/*'mobileNumber'=>'required|between:10,15',*/
		'gender'=>'required',
		'password'=>'required|min:8|confirmed',
		'password_confirmation'=>'required|min:8'

	);

}
