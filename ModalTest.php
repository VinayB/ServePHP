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
		/* 
		 * Check if the user is logged
		 */
		require_once './classes/includes/global.inc.php';
		
		if (isset($_SESSION["logged_in"]))
		{
			echo '<title>Welcome ' .$_SESSION['user_name']. ' - Lets get the party started</title>';	
		}
		else 
		{
			echo '<title>Login to get get the party started</title>';
		}
		   
	?>
    <!-- Bootstrap core CSS -->
    <link href="./assets/bootstrap/3-0-2/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->




  </head>

  <body>
	
		<!-- Button to trigger modal -->
		<a href="#myModal" role="button" class="btn" data-toggle="modal">Launch demo modal</a>
		

		
		<!-- Modal -->
		<div class="modal" id="myModal">
			<form class="form-horizontal well" data-async data-target="#myModal" method="POST">

			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						&times;</button>
						<h4 class="modal-title">Modal Title Goes Here</h4>
					</div>
					<div class="modal-body">
					<div class="input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-user"></span>
								</span>
								<input class="required form-control" type="text" 
										name="F_Name" 
										required />
							</div>
					</div>
					<div class="modal-footer">
						<a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
						<a href="#" class="btn btn-primary">Validate</a>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div>
		</form>
</div>


	<!-- Standard Footer page for logged in user -->
	<?php include('./includePHP/footer.php'); ?>
   <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<!-- Bootstrap Core Javascript -->
	<?php include('./includePHP/BootStrapCoreJS.php');?> 
	





 </body>
</html>
