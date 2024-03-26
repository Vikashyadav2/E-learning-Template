
<?php

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('473273787440-snc1arg3gkb24ah40dqmem07i0aum3tn.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/test/user.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();

?>