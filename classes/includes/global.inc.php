<?php

//require_once 'classes/DB/User.class.php';
require_once 'classes/DB/UserTools.class.php';
//require_once 'classes/DB/EzeeDB.class.php';
	

//initialize UserTools object
$userTools = new UserTools();

//start the session
session_start();
	
/*
 * checking to see if they’re logged in & refresh session variables if logged in
 * For example, if a user changes a setting like their email address, the session will still have the old email address. This ensure that the session will always be up-to-date.
 * 
*/
if (isset($_SESSION["logged_in"])) {
	//Refresh $_SESSION['user'] so that it reflects the most current data we have for that user
	//$user = unserialize($_SESSION['user']);
	//$_SESSION['user'] = serialize($userTools->get($user->id));
	
	// TO-DO - Will see what else needs to be added here later	
}

?>