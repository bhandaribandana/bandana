<?php require_once('../includes/config.php'); 

	session_start();				//start session
	session_destroy();			//destroying logged in session 

	header("Location: ".SITEURL."admin/");
	die();
?>