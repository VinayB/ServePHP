       		<div class="navbar-header">
	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
      			<a class="navbar-brand" href="index.php">EzeeServe</a>  
        	</div>
        	<?php 
        	
        	/* If user is logged in show user details and Logout in NavBar */
        	if (isset($_SESSION["logged_in"]))
        	{
        		echo '<div class="pull-right">';
        		echo '<ul class="nav pull-right">';
        		echo '<li class="dropdown"><a href="#" data-toggle="dropdown"> Welcome, ' .$_SESSION['user_name']. '<b class="caret"></b></a>';
        		echo '<ul class="dropdown-menu">';
        		echo '<li><a href="#"><i class="glyphicon glyphicon-cog"></i> Preferences </a></li>';
        		echo '<li class="divider"></li>';
        		echo '<li><a href="logout.php"><i class="glyphicon glyphicon-off"></i> Logout</a></li>';
        		echo '</div>';
        	}
        	else
        	{
        		
          		echo '<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-5">';
	        	echo '<p class="navbar-text navbar-right"><a data-toggle="modal" href="#Signup" class="navbar-link">Sign up</a></p>'; 
	        	echo ' <p class="navbar-text navbar-right"><a data-toggle="modal" href="#Login" class="navbar-link">Login</a></p>';
		      	echo '</div>';
		      	
        		
        		include('./includePHP/signup.php');
        		include('./includePHP/login.php'); 
        	}
?>