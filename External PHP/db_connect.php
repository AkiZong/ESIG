<?php
	include_once 'include.php';

	$DBH = new PDO("mysql:host=$host;dbname=$db_name", $username, $password); //Connect to the database
	$DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );