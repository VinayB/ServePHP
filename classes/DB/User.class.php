<?php

//User.class.php
// Courtsey original post at
// http://buildinternet.com/2009/12/creating-your-first-php-application-part-2/

require_once 'EzeeDB.class.php';
require_once 'dbfns.class.php';

class User {

	public $id;
	public $username;
	public $hashedPassword;
	public $email;

	//Constructor is called whenever a new object is created.
	//Takes an associative array with the DB row as an argument.
	function __construct($data) {
		$this->id = (isset($data['User_id'])) ? $data['User_id'] : "";
		$this->username = (isset($data['User_Name'])) ? $data['User_Name'] : "";
		$this->hashedPassword = (isset($data['Password'])) ? $data['Password'] : "";
		$this->email = (isset($data['Email'])) ? $data['Email'] : "";
	}

	public function save($isNewUser = false) {
		//create a new database object.
		$db = new EzeeDB();

		//if the user is already registered and we're
		//just updating their info.
		if(!$isNewUser) {
			//set the data array
			$data = array(
				"username" => "'$this->username'",
				"password" => "'$this->hashedPassword'",
				"email" => "'$this->email'"
			);

			//update the row in the database
			$db->update($data, 'Users', 'User_id = '.$this->id);
		}else {
		//if the user is being registered for the first time.
			$data = array(
				"username" => "'$this->username'",
				"password" => "'$this->hashedPassword'",
				"email" => "'$this->email'",
				"join_date" => "'".date("Y-m-d H:i:s",time())."'"
			);

			$this->id = $db->insert($data, 'users');
			$this->joinDate = time();
		}
		return true;
	}

}

?>
