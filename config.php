<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("56842495335-lpqlb05daeabp0knldj8cihsc6ql969m.apps.googleusercontent.com");
	$gClient->setClientSecret("w4-Rs5_6q-lrKM2gRSs4LGSs");
	$gClient->setApplicationName("RTI login");
	$gClient->setRedirectUri("http://localhost/finalproject/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
