<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

<?php
	require_once 'classes/includes/global.inc.php';
 
	if (isset($_SESSION['logged_in']))
		{
			echo '<title>Welcome ' .$_SESSION['user_name']. ' - Lets get the party started</title>';	
	}
	else 
	{
		echo '<title>Login to get get the party started</title>';
	}
?>
  
    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  
  
      <div class="container">
      	<div class="navbar navbar-default" role="navigation">
      		
      		<?php 
	      		include('includePHP/header.php');
      		?>
 		
        </div>
		<?php include('partial/pricing-mid.php'); ?>
	</div> <!-- Container -->
	
	<?php include('includePHP/footer.php'); ?>
	<!-- Bootstrap Core Javascript -->
	<?php include('includePHP/BootStrapCoreJS.php');?> 
	
	 </body>
</html>
