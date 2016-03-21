<?php
	include_once 'db_connect.php';
	
	if($_GET['email'] == null && isset($_GET['email']))
	{
		echo 'No email was entered!';
		return false;
	}
	else {
		$email = $_GET['email'];
	}
	
	//Checks if email format is valid
	if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
	{
		echo 0;
		return false;
	}
	else {
			$query = 'SELECT COUNT(*) AS emails FROM newsletter WHERE email_address = "'.$email.'"';
			
			$STH = $DBH->query($query);
			
			$STH->setFetchMode(PDO::FETCH_ASSOC);
			
			$count = $STH->fetch();
			
			if($count['emails'] > 0)
			{
				echo 1;
				return true;
			}
			else {
				echo 2;
				return false;
			}
	}

	return true;
	
?>