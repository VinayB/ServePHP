<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="./assets/ico/favicon.png">

  	<?php 
  		
  		require_once './classes/includes/global.inc.php';
		
		/* 
		 * Check if the user is logged
		 *  Convert this to be a part of utility function
		 */
		if (isset($_SESSION['logged_in']))
		{
			echo '<title>Welcome ' .$_SESSION['user_name']. '! - Lets get the party started</title>';	
		}
		else 
		{
			echo '<title>Login to get get the party started</title>';
		}
		   
	?>


    
 	<!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato:400,700'>
        <link rel="stylesheet" href="./assets/bootstrap/3-0-2/css/bootstrap.min.css">
        <link rel="stylesheet" href="./assets/styleComingSoon.css">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
      <div class="container">
      	<div class="navbar navbar-default" role="navigation">
      		<?php include('./includePHP/header.php');?>
        </div>
		<?php include('./partial/soon-partial-mid.php'); ?>
	</div> <!-- Container -->
	
	<?php include('./includePHP/footer.php'); ?>
	<!-- Bootstrap Core Javascript -->
	<?php include('./includePHP/BootStrapCoreJS.php');?> 
	
	  <script src="./assets/js/jquery.backstretch.min.js"></script>
        <script src="./assets/js/jquery.countdown.js"></script>
        <script src="./assets/js/scripts.js"></script>
	
	 </body>
</html>
