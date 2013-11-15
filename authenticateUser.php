<?php
//authenticateUser.php

require_once './classes/includes/global.inc.php';
//require_once 'classes/DB/UserTools.class.php';

$email = "";
$password = "";
$error = "";	
	
//check to see if the Login form is submitted
if(isset($_POST['btn_Login'])) {

	//retrieve the $_POST variables
	$email = $_POST['Email'];
	$password = $_POST['Password'];
	
	$userTools = new UserTools();
	
	// Check if login is successful
	if ($userTools->login($email, $password)) {
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
