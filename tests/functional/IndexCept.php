<?php
$I = new TestGuy($scenario);
$I->wantTo('test index page is working');

$I->amOnPage('/');
$I->canSee('Congratulations!');

$I->amOnPage('/index/foo');
$I->canSee('Session: bar');
$I->canSee('Cookies: bar');
