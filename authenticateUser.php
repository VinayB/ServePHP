<?php
//authenticateUser.php

require_once './classes/includes/global.inc.php';

$email = "";
$password = "";
$error = "";	
$dbhost ="";
	
//check to see if the Login form is submitted
if(isset($_POST['btn_Login'])) {

	//retrieve the $_POST variables
	$email = $_POST['Email'];
	$password = $_POST['Password'];
	
	// This is temporary. Need to remove it in production ready code
	$dbhost = $_POST['DbHost'];
	
	$userTools = new UserTools();
	
	// Check if login is successful
	if ($userTools->login($email, $password, $dbhost)) {
		
		echo 'After calling userTools->login function';
		
		//redirect them to a welcome page
	    header("Location: welcome.php");
	    
	    exit;
	    
	}
	else
	{
		$error = "Incorrect e-mail or password. Please try again";
	}
}
?>
