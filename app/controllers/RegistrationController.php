<?php

use DrGaming\Forms\RegistrationForm;
use DrGaming\Registration\RegisterUserCommand;
use DrGaming\Core\CommandBus;

class RegistrationController extends BaseController {

	use CommandBus;

	/**
	 * @var RegistrationForm
	 */
	private $registrationForm;

	/**
	 * @param RegistrationForm $registrationForm
	 */
	public function __construct(RegistrationForm $registrationForm){

		$this->registrationForm = $registrationForm;

		$this->beforeFilter('guest');

	}

	/**
	 * Show the form for registering a user
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('registration.create');
	}


	/**
	 * Store a newly created user in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$this->registrationForm->validate(Input::all());

		extract(Input::only('username', 'email', 'password'));
		$user = $this->execute(
			new RegisterUserCommand($username, $email, $password)
		);

		Auth::login($user);

		Flash::success('Welcome aboard.');
		return Redirect::home();
	}

}
