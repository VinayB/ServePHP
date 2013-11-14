<?php
//UserTools.class.php

require_once 'User.class.php';
require_once 'EzeeDB.class.php';

class UserTools {

	//Log the user in. First checks to see if the
	//username and password match a row in the database.
	//If it is successful, set the session variables
	//and store the user object within.
	public function login($email, $password)
	{
		// When we store the pwd from UI, we need to uncomment this
		//$hashedPassword = md5($password);
		$db = new EzeeDB();
		
		$result = mysqli_query($db->connect(), "SELECT * FROM Users WHERE Email = '$email' AND Password = '$password'");
		
		if (!$result) {
			die('Invalid query: <<LOGIN>> - ' .$sql . mysqli_error($this->connect()));
		}
		
		if(mysqli_num_rows($result) == 1)
		{
			$userData = mysqli_fetch_assoc($result);
			
			$_SESSION["user_name"] = $userData["User_Name"]; 
			$_SESSION["login_time"] = time();
			$_SESSION["logged_in"] = 1;
			return true;
		}
		
		mysqli_free_result($result);

		mysqli_close($db->connect());
		
	}

	//Log the user out. Destroy the session variables.
	public function logout() {

		session_start(); 
		session_unset();
		session_destroy();
		
	}

	//Check to see if a username exists.
	//This is called during registration to make sure all user names are unique.
	public function checkUsernameExists($email) {
		$db = new EzeeDB();
		$result = mysqli_query($db->connect(), "SELECT User_id FROM Users WHERE Email =$email");
    	if(mysqli_num_rows($result) == 0)
    	{
			return false;
	   	}else{
	   		return true;
		}
	}

	//get a user
	//returns a User object. Takes the users id as an input
	public function get($id)
	{
		$db = new EzeeDB();
		$result = $db->select('Users', "User_id = $id");

		return new User($result);
	}

	public function getUser($email)
	{
		$db = new EzeeDB();
		$result = $db->select('Users', "Email = '$email'");

		return new User($result);
	}
	
}

?>
