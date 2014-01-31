<div class="navbar navbar-default" role="navigation">       		
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
        	/** Also add the appropriate icons in the NavBar */
        	if (isset($_SESSION["logged_in"]))
        	{
        		/* adding to show icons */
        		
        		
        		echo '<form class="navbar-form navbar-left" role="search">';
  					echo '<div class="form-group">';
    					echo '<input type="text" class="form-control" placeholder="Search">';
  					echo '</div>';
  					echo '<button type="submit" class="btn btn-default">Submit</button>';
  					echo '<span> <a href="#"><i class="glyphicon glyphicon-cog"></i> </a> </span>';
  					
				echo '</form>';
        		
        		/* End adding to show icons */
				
				echo '<ul class="nav navbar-nav navbar-right">';
      				
      				echo '<li class="dropdown">';
        				echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> ' .$_SESSION['user_name']. ' <b class="caret"></b></a>';
	        			echo '<ul class="dropdown-menu">';
	          				echo '<li><a href="#"><i class="glyphicon glyphicon-cog"></i> Preferences </a></li>';
	          				echo '<li class="divider"></li>';
	          				echo '<li class="divider"></li>';
        					echo '<li><a href="logout.php"><i class="glyphicon glyphicon-off"></i> Logout</a></li>';
	        			echo '</ul>';
      				echo '</li>';
    			echo '</ul>';
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
</div>