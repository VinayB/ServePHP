<?php
// Code inherited from 
// http://buildinternet.com/2009/12/creating-your-first-php-application-part-1/
// 7-May-2012
class EzeeDB {

	protected $db_host = 'EzeeTest.db.11533594.hostedresource.com';
	protected $db_user = 'EzeeTest';
	protected $db_pass = 'Vinuta@138';
    protected $db_name = "EzeeTest";
	
	
	//open a connection to the database. Make sure this is called
	//on every page that needs to use the database.
	public function connect() {
    	
		$connection = mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
		
		if (!$connection) {
		    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
            exit;
		}
		
		return $connection;
	}
	
	
	
	//takes a mysql row set and returns an associative array, where the keys
	//in the array are the column names in the row set. If singleRow is set to
	//true, then it will return a single row instead of an array of rows.
	public function processRowSet($rowSet, $singleRow=false)
	{
		$resultArray = array();
		while($row = mysqli_fetch_assoc($rowSet))
		{
			array_push($resultArray, $row);
		}

		if($singleRow === true)
			return $resultArray[0];

		return $resultArray;
	}

	//Select rows from the database.
	//returns a full row or rows from $table using $where as the where clause.
	//return value is an associative array with column names as keys.
	public function select($table, $where) {
				
		$sql = "SELECT * FROM $table WHERE $where ";

		//$result = mysqli_query($connection, $sql);
		$result = mysqli_query($this->connect(), $sql);
				
		if (!$result) {
				unset($_SESSION["user"]);
				unset($_SESSION["login_time"]);
				unset($_SESSION["logged_in"]);
				session_destroy();

				die('Invalid query: from select - ' .$sql . mysqli_error($this->connect()));
		}
		
		if(mysqli_num_rows($result) == 1)
			return $this->processRowSet($result, true);

		return $this->processRowSet($result);
	}

	
		//Select rows from the database.
	//returns a full row or rows from $table using $where as the where clause.
	//return value is an associative array with column names as keys.
	public function selectAll($table) {
		/*
		$connection = mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
		
		if (!$connection) {
		    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
		}
		*/
		
		$sql = "SELECT * FROM $table";
		//$result = mysqli_query($connection, $sql);
		$result = mysqli_query($this->connect(), $sql);
				
		if(mysqli_num_rows($result) == 1)
			return $this->processRowSet($result, true);

		return $this->processRowSet($result);
		
	}
	
	
	//Updates a current row in the database.
	//takes an array of data, where the keys in the array are the column names
	//and the values are the data that will be inserted into those columns.
	//$table is the name of the table and $where is the sql where clause.
	public function update($data, $table, $where) {
		/*
		$connection = mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
		
		if (!$connection) {
		    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
		}
		*/
		
		foreach ($data as $column => $value) {
			$sql = "UPDATE $table SET $column = $value WHERE $where";
			
			//mysqli_query($connection, $sql) or die(mysqli_error());
			mysqli_query($this->connect(), $sql) or die(mysqli_error());
			
		}
		return true;
	}

	//Inserts a new row into the database.
	//takes an array of data, where the keys in the array are the column names
	//and the values are the data that will be inserted into those columns.
	//$table is the name of the table.
	public function insert($data, $table) {
/*
		$connection = mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
		
		if (!$connection) {
		    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
		}
	*/	
		$columns = "";
		$values = "";

		foreach ($data as $column => $value) {
			$columns .= ($columns == "") ? "" : ", ";
			$columns .= $column;
			$values .= ($values == "") ? "" : ", ";
			$values .= $value;
		}

		$sql = "INSERT INTO $table ($columns) VALUES ($values)";
		
		//mysqli_query($connection, $sql) or die(mysqli_error());
		mysqli_query($this->connect(), $sql) or die(mysqli_error());

		//return the ID of the user in the database.
		return mysqli_insert_id();

	}
	

}

?>