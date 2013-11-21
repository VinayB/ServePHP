<?php

require_once './classes/includes/global.inc.php';

$FName = "";
$LName ="";
$email = "";
$password = "";
$confPassword = '';
$error = "";	

	
//check to see if the Login form is submitted
if(isset($_POST['btn_Signup'])) {

	//retrieve the $_POST variables
	
	$FName = $_POST['F_Name'];
	$LName = $_POST['L_Name'];
	$email = $_POST['Email'];
	$password = $_POST['Passwd'];
	$confPassword = $_POST['ConfirmPwd'];

	$db = new EzeeDB();

	//Create an array as "[ColumnName][ValueToBeStoredInColumn]
	$signupDetails = array(
		    "First_Name" => "'$FName'" ,
		    "Last_Name" => "'$LName'",
			"Email" => "'$email'",
			"Password" => "'$password'",
			"User_Name" => "'$FName '"."'$LName'",
			"Joining_Date" => date("Y-m-d")
		);
	
	$db->insert($signupDetails, "Users");
		
	$userTools = new UserTools();
	
	// Check if login is successful
	if ($userTools->deprec_login($email, $password)) {
	
		//redirect them to a welcome page
	    header("Location: welcome.php");
	    
	    exit;
	    
	}
	else
	{
		$error = "Signup error";
	}
}
?>
