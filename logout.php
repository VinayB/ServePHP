//logout.php
<?php
	require_once './classes/DB/UserTools.class.php';
		
	$userTools = new UserTools();
	$userTools->logout();
	
	header("Location: index.php");
	
	exit;
	
	
?>
	