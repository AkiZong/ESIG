<?php
	if(!isset($_POST['name']) || $_POST['name'] == "")
	{
		echo "A name was not entered!";
		return false;
	}
	else {
		$name = $_POST['name'];
	}
	
	if(!isset($_POST['email']) || $_POST['email'] == "")
	{
		echo "An email was not entered!";
		return false;
	}
	else if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$_POST['email']))
	{
		echo 'Invalid email Address!';
		return false;	
	}
	else {
		$email = $_POST['email'];
	}
	
	if(!isset($_POST['company']) || $_POST['company'] == "")
	{
		echo "A company was not entered!";
		return false;
	}
	else {
		$company = $_POST['company'];
	}
	
	if(!isset($_POST['message']) || $_POST['message'] == "")
	{
		echo "A message was not entered!";
		return false;
	}
	else if($_POST['message'].length > 2000)
	{
		echo "The message cannot exceed 1000 characters!";
		return false;
	}
	else {
		$message = $_POST['message'];
	}

	
	$to = "kevin.okal@emergingstar.ca";
	$subject = "Contact Us";
	$txt = 'Name: ' . $name . PHP_EOL . 'Company: ' . $company . PHP_EOL . $message;
	$headers = "From: ". $email;

	if(mail($to,$subject,$txt,$headers))
	{
		echo "Your message has been sent!";
		return true;
	}
	else {
		echo "Your message could not be sent!";
		return false;
	}
?> 