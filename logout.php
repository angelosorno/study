<?php

//logout.php

include('php/conf_log_g.php');

//Reset OAuth access token
$google_client->revokeToken();

//Destroy entire session data.
session_destroy();

//redirect page to index.php
header('location: login.php');

?>
