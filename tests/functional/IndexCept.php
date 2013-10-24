<?php
$I = new TestGuy($scenario);
$I->wantTo('test index page is working');
$I->amOnPage('/');
$I->canSee('Congratulations!');
