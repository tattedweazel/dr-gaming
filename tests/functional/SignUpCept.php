<?php

$I = new FunctionalTester($scenario);
$I->am('a guest');
$I->wantTo('sign up for a dr-gaming account');

$I->amOnPage('/');
$I->click('Join us');
$I->seeCurrentUrlEquals('/register');

$I->fillField('Username', 'AwesomeSauce');
$I->fillField('Email', 'awesome@sauce.com');
$I->fillField('Password', 'awesomesauce');
$I->fillField('Password Confirmation', 'awesomesauce');
$I->click('Go');

$I->seeCurrentUrlEquals('');
$I->see('Welcome aboard.');
$I->seeRecord('users', [
	'username' => 'AwesomeSauce',
	'email' => 'awesome@sauce.com'
]);


$I->assertTrue(Auth::check());