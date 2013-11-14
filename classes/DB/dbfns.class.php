<?php
	//open a connection to the database. Make sure this is called
	//on every page that needs to use the database.
	function connect() {
		
		$db_host = "EzeeTest.db.11533594.hostedresource.com";
	    $db_user = "EzeeTest";
	  	$db_pass = 'Vinuta@138';
    	$db_name = "EzeeTest";
    	
		$connection = new mysqli($db_host, $db_user, $db_pass, $db_name );
		
		if (!$connection) {
		    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
            exit;
		}
		
		return $connection;
	}

