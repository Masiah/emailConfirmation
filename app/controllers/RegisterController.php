<?php

class RegisterController extends BaseController
{


	public function getHome()
	{
		return View::make('home');
	}

	public function getRegister()
	{
		return View::make('register');
	}

	public function getMessage()
	{
		return View::make('message');
	}

	public function postCreate()
	{

		$validation = Validator::make(Input::all(), User::$rules);

		if ($validation->fails()) {
			return Redirect::back()->withInput()->withErrors($validation);
		}

		$confirmation_code = str_random(15);
		$user = new User;

		$user->firstName = Input::get('firstName');
		$user->lastName = Input::get('lastName');
		$user->email = Input::get('email');
		$user->gender = Input::get('gender');
		$user->confirmation_code = $confirmation_code;
		$user->password = Input::get('password');

		$user->save();


		Mail::queue('emails.verify', array('confirmation_code' => $confirmation_code, 'email' => Input::get('email')), function ($message) {
			$message->to(Input::get('email'), Input::get('firstName'))
				->subject('Verify your email address');
		});


		return Redirect::to('users/message');
	}


	public function confirm($confirmation_code)
	{
		if (!$confirmation_code) {
			//throw new InvalidConfirmationCodeException;
		}

		$user = User::whereConfirmationCode($confirmation_code)->first();

		if (!$user) {
			//throw new InvalidConfirmationCodeException;
		}

		$user->confirmed = 1;
		$user->confirmation_code = null;
		$user->save();

		return Redirect::to('users/password')
			->with('message', 'You have successfully verified your account.Provide your password');;
	}

	public function getLog()
	{

		Return View::make('login');
	}

	public function postLogin()
	{
		$rules = [
			'email' => 'required|exists:users',
			'password' => 'required'
		];

		$input = Input::only('email', 'password');

		$validator = Validator::make($input, $rules);

		if ($validator->fails()) {
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$credentials = [
			'email' => Input::get('email'),
			'password' => Input::get('password'),
			'confirmed' => 1
		];

		if ( ! Auth::attempt($credentials))
		{
			return Redirect::back()
				->withInput()
				->withErrors([
					'credentials' => 'We were unable to sign you in.'
				]);
		}


		return Redirect::to('/')
			->with('message','Successfully logged in');
	}





}
