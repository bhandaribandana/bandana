<?php
//Defining Server Constants

	define("DBSERVER","localhost",true);
	define("DBUSER","root");
	define("DBPASSW","");
	define("DBNAME","ams",true);
	define("SYSTEM_EMAIL","info@apex.edu.np");
	define("SITEURL", "http://localhost/airlines/",true);
	define("SITEROOTDOC",$_SERVER['DOCUMENT_ROOT']."/airlines/");
    
	define("ADMINPATH",SITEURL."admin/");
	define("VISIBLEIMAGE",SITEURL."uploads/");
	date_default_timezone_set("Asia/Bangkok");
?>
