<?php 
$I = new AcceptanceTester($scenario);
$I->am('Customer');
$I->wantTo('Open login page');
$I->amOnPage('/login');

# check if register option is there or not for new user
$I->see(' Neu bei Home24?');

$I->wantTo('Login to the account!');
$I->fillField('E-Mail', 'stylosumit@gmail.com');
$I->fillField('password', '4testpurpose');
$I->click('Anmelden');
$I->see('Mein Kundenkonto');

# verify if the page has search option field
$I->seeElement('#search');

# fill search input field
$I->fillField('#search', 'Blue Shirt');
$I->seeInField('#search', 'Blue Shirt');

# check for newsletter subscription
$I->fillField('#newsletter', 'testuser@gmail.com');
$I->click('form#newsletter-validate-detail button.action.subscribe.primary');
$I->waitForElementVisible('#maincontent div.messages div.message-success');
$I->see('Bitte bestätigen Sie Ihre Newsletteranmeldung. Ihnen wurde ein Aktivierungslink per E-Mail zugeschickt. Bitte klicken Sie auf diesen Link, um die Newsletteranmeldung abzuschließen.', '#maincontent div.messages div.message-success');

