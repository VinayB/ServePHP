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
	
	<!--  This is to show the icons in the Nav Bar This should go into an include file later -->
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	
	<!--  For Cards UI -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/bootplus/css/font/font-awesome.min.css">
	<link href="assets/bootplus/css/bootplus.css" rel="stylesheet">
    <link href="assets/bootplus/css/bootplus-responsive.css" rel="stylesheet">
    <!--  End For Cards UI -->

      <link href="assets/bootplus/css/docs.css" rel="stylesheet">
      <link href="assets/bootplus/js/google-code-prettify/prettify.css" rel="stylesheet">
	
	
    <!-- Custom styles for this template -->
    
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>
  	
  	<!--  Get the Top Navigation bar -->		
  	
  	<?php include('./includePHP/TopNav.php');?>
	<!-- Subhead
	================================================== -->
	<header class="jumbotron subhead" id="overview"> 
		<div class="container">
	  		<?php include('./includePHP/LoggedInCarousel.php');?>
	  	</div>
	</header>

	<!-- ======= Left Nav Start ========== -->
	<div class="container">
	<!--  Left Nav takes 2 columns out of bootstrap's 12 column layout -->
	<?php include('./includePHP/LoggedInLeftNav.php');?>

		<div class="row">
			<div class="span8 well">
				<form method="post" action="#" accept-charset="UTF-8" role="form">
					<fieldset>
						<textarea class="span6" id="new_post" name="new_post" placeholder="Type in your message " rows=5>
						</textarea>
						<button class="btn btn-info pull-right" type="submit">Post New Message</button>
					</fieldset>
				</form> <!--  Share form End -->
			</div>

			<!--  Use the remaining 9 columns of the bootstrap column layout for the content -->
			<div class="span9">
	
				<!-- 
				*	Within this span10, we will divide the available space into 12 column
				*	laout. i.e. We will have 2 columns of content, with each of span5 size 
				-->
				<?php 
				/*	We get the card details from the DB
				 * 	The Card Header - The subject or the Topic of the discussion, 
				 * 	Card details (or the body) - The message body
				 * 	Card posted by 	- Original Author of the message
				 * 	Card comments - Total nbr of comments, on expansion, all comments
				 * 	Card shares - Total nbr of shares, to whom it has been shared
				 * 	Card likes - Total nbr of likes, and who has liked it
				 * 	
				 * 	To-Do
				 * 	The card should be associated with the user and the society	
				 * 
				 */
					require_once '/classes/DB/ForumDetails.class.php';
					$dbForumDtls = new ForumDetails();
					$results = array();
					$results = $dbForumDtls->getForumPosts();
					$rowfluidIndicator = 0;
					
					foreach ($results as $row)
					{
						/*
						 * The below is done to manage two cards per row
						 */
						if ($rowfluidIndicator/2 == 0 OR $rowfluidIndicator == 0) 
						{
							echo '<div class="row-fluid">';
						}
						
						echo '<div class="span5">';	
						echo '	<div class="card">';
						/*echo '		<h5 class="card-heading simple">' .$row['CardHeader']. '</h5>';*/
						echo '		<div class="card-body">';
						echo '			<p><strong>' .$row['PostedBy']. '</strong> shared</p>';
						echo '			<p>' .$row['CardBody']. '</p>';
						echo '		</div>';
						echo '		<div class="card-actions pull-right">';
						echo ' 			<button class="btn"><i class="glyphicon glyphicon-share-alt"></i></button> ';
						echo ' 			<button class="btn"><i class="glyphicon glyphicon-thumbs-up"></i></button> ';
						echo ' 			<button class="btn"><i class="glyphicon glyphicon-comment"></i></button> ';
						echo '		</div>';
						 
						echo '<div class="card-comments">';
	         			echo '<div class="comments-collapse-toggle"><a data-toggle="collapse" data-target="#c1-comments" href="#c1-comments">34 comments <i class="icon-angle-down"></i></a>     </div>';
	         			echo '</div>';
						echo '</div>';
						
						if ($rowfluidIndicator/2 == 0 OR $rowfluidIndicator == 0) 
						{
							echo '</div>';
						}
						
						$rowfluidIndicator += 1;
					
					}
				?>
			</div> <!-- span10 End -->
		</div> <!--  row End -->
	</div> <!-- Container End -->
<!--  Main Content End  -->			
			
		
			<?php include('./includePHP/footer.php'); ?>
			<!-- Bootstrap Core Javascript -->
			<?php include('./includePHP/BootStrapCoreJS.php');?> 
		
	</body>
</html>
