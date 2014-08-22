<?php

use DrGaming\Forms\SignInForm;

class SessionsController extends \BaseController {

	/**
	 * @var SignInForm
	 */
	private $signInForm;

	function __construct(SignInForm $signInForm)
	{
		$this->signInForm = $signInForm;
		$this->beforeFilter('guest', ['except' => 'destroy']);
	}

	/**
	 * Show the form for creating a new session.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sessions.create');
	}

	/**
	 * Store a newly created session in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$formData = Input::only('email', 'password');
		$this->signInForm->validate($formData);
		if (Auth::attempt($formData)){
			return Redirect::intended('/');
		}
		else {
			Flash::error('Incorrect email or password');
			return Redirect::back()->withInput();
		}
	}

	/**
	 * Remove the specified session from storage.
	 *
	 * @return Response
	 */
	public function destroy()
	{
		Auth::logout();

		return Redirect::home();
	}


}
