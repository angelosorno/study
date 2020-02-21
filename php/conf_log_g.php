<?php

     //config.php

     //Include Google Client Library for PHP autoload file
     require_once './vendor/autoload.php';

     //Make object of Google API Client for call Google API
     $google_client = new Google_Client();

     //Set the OAuth 2.0 Client ID
     $google_client->setClientId('629122505152-bq9geckrn7ppkcetq4cmuor8iicg2d2g.apps.googleusercontent.com');

     //Set the OAuth 2.0 Client Secret key
     $google_client->setClientSecret('aayMvaWjc_J2ceYlp0UCemws');

     //Set the OAuth 2.0 Redirect URI
     $google_client->setRedirectUri('http://app.idmji.org/');

     //
     $google_client->addScope('email');

     $google_client->addScope('profile');

     //start session on web page
     session_start();

     ?>
