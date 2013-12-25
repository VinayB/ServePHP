<!--  This provides TOP NAV to all the pages on the site  -->
<!--  Include the file where the top nav needs to apear. Do not forget to add the path -->

<?php 
/*
 * 	Author	:	Vinay N. Barigidad
 * 	Date	:	Sometime in 2013
 * 	Desc	:	Provides Top Nav bar for the site
 * 				Checks if the user is logged in. Calls appropriate functions to get User Menu
 * 				If the user is not logged in, shows standard marketing and carousel 
 * 	History	:
 * --------------------------------------------------------------
 * 	Date			Author				Change Description
 * 	21-Sep-13		Vinay N. B. 		Added comments describing what does this do
 * 	25-Dec-2013		Vinay N. B.			Changed to Fixed Top NavBar
 */
?> 
<!-- ========= Navbar Start ============== -->
<div class="navbar navbar-fixed-top" role="navigation">
	<div class="navbar-inner">
		<div class="container">
			<button type="button" class="btn btn-navbar" data-toggle="collapse" 
						data-target=".navbar-collapse"> <!--  indicate where to collapse the navbar -->
	        	<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="./index.php">EzeeServe</a>  
			<div class= "nav-collapse" id="collapse-top-nav"> <!--  Nav Collapse start -->
				<ul class="nav">
              		<li class="">
                		<a href="#"></a>
              		</li>
				<?php 
	    		/* If user is logged in show user details and Logout in NavBar */
        		/** Also add the appropriate icons in the NavBar */
        		if (isset($_SESSION["logged_in"]))
        		{
        			/* 
        			 * Until I figure out how to introduce blank spaces
        			 * between "Get Started or Home icon and 
        			 * info icons, I am adding empty list items on the nav
        			 * to provide right user experience
        			 */
        			echo '<li class="">';
        			echo '	 <a href="#"> </a> ';
        			echo '</li>';
        			echo '<li class="">';
        			echo '	 <a href="#"> </a> ';
        			echo '</li>';
        			echo '<li class="">';
        			echo '	 <a href="#"> </a> ';        			
        			echo '</li>';
        			echo '<li class="">';
        			echo '</li>';
        			echo '<li class="">';
        			echo '</li>';
        			
        			/* adding to show icons */
					echo '<li class="">';
        			echo '	 <a href="#"><i class="glyphicon glyphicon-bell"></i> </a> ';
        			echo '</li>';
					echo '<li class="">';
        			echo '	 <a href="#"><i class="glyphicon glyphicon-bullhorn"></i> </a> ';
        			echo '</li>';
        			echo '<li class="">';
        			echo '	 <a href="#"><i class="glyphicon glyphicon-calendar"></i> </a> ';
        			echo '</li>';
        			echo '<li class="">';
        			echo '	 <a href="#"><i class="glyphicon glyphicon-comment"></i> </a> ';
        			echo '</li>';
        			echo '<li class="">';
        			echo '	 <a href="#"><i class="glyphicon glyphicon-user"></i> </a> ';
        			echo '</li>';
        			
        			echo '<li class="">';
        			echo '	<form class="navbar-form navbar-left" role="search">';
  					echo '		<div class="form-group">';
    				echo '			<input type="text" class="form-control" placeholder="Search">';
  					echo '		</div>';
  					echo '		<button type="submit" class="btn btn-default">Submit</button>';
					echo '	</form>';
					echo '</li>';
        			
        		/* End adding to show icons */
				

      				echo '<li class="dropdown">';
					echo '	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> ' .$_SESSION['user_name']. ' <b class="caret"></b></a>';
	        		echo '	<ul class="dropdown-menu">';
	          		echo '		<li><a href="#"><i class="glyphicon glyphicon-cog"></i> Preferences </a></li>';
	          		echo '		<li><a href="#"><i class="glyphicon glyphicon-cog"></i> Anything Else? </a></li>';
	          		echo '		<li class="divider"></li>';
	          		echo '		<li><a href="logout.php"><i class="glyphicon glyphicon-off"></i> Logout</a></li>';
	        		echo '	</ul>';
      				echo '</li>';
	
      				echo '</div> <!--  Nav Collapse End -->';
        	}
        	/*If the user is not logged in, show marketing carousel */
    		else
        	{
        		
          		echo '<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-5">';
	        	echo '	<p class="navbar-text navbar-right"><a data-toggle="modal" href="#Signup" class="navbar-link">Sign up</a></p>'; 
	        	echo '	<p class="navbar-text navbar-right"><a data-toggle="modal" href="#Login" class="navbar-link">Login</a></p>';
		      	echo '</div>';
		      	
				/* Include the Signup and Login pop-ups */
		      	include('./includePHP/signup.php');
        		include('./includePHP/login.php'); 
        	}
?>
	</div> <!--  Nav Container End -->
	</div> <!--  Navbar-inner End -->
</div> <!--  Main navbar ends here -->

