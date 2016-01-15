<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('See the landing page is up');
$I->amOnPage('/');
$I->see('Our CRM');
