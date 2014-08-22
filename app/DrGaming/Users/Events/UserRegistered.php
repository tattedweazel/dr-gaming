<?php namespace DrGaming\Users\Events;


use DrGaming\Users\User;

class UserRegistered {

	/**
	 * @var
	 */
	public $user;

	/**
	 * @param $user
	 */
	function __construct(User $user)
	{
		$this->user = $user;
	}
} 