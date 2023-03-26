<?php
	//Database Setting
	$DB_HOST = 'localhost';  //Database host  :]
	$DB_USER = 'myfypdbadmin'; //Database user
	$DB_PASS = 'dbadmin123whataday?'; //Datbase Password
	$DB_NAME = 'fyp2023'; //Database Name XD

	$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

	if(!$conn){
		echo "Connection Failed";
	}

?>