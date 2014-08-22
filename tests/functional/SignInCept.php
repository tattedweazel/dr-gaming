<?php 
$I = new FunctionalTester($scenario);

$I->am('a dr-gaming member');
$I->wantTo('sign in to my dr-gaming account');

$I->signIn();

$I->seeCurrentUrlEquals('');
$I->dontSee('Join us');
$I->assertTrue(Auth::check());