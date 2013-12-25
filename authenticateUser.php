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

	$userTools = new UserTools();
	
	// Check if login is successful
	if ($userTools->deprec_login($email, $password)) {
	
		//redirect them to a welcome page
	    //header("Location: welcome.php");
	    
	    header("Location: TestCards.php");
	    
	    exit;
	    
	}
	else
	{
		$error = "Incorrect e-mail or password. Please try again";
	}
}
?>
