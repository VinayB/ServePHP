<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <title>CollagePlus for jQuery Example</title>

  	<!-- Bootstrap core CSS -->
    <link href="./assets/bootstrap/3-0-2/css/bootstrap.css" rel="stylesheet">



    <link rel="stylesheet" type="text/css" href="assets/collagePlus/css/examples.css" media="all" />
    <link rel="stylesheet" type="text/css" href="assets/collagePlus/css/transitions.css" media="all" />

    <!--[if lt IE 9]>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <![endif]-->
    <!--[if (gte IE 9) | (!IE)]><!-->
	
    <!--<![endif]-->

    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

	<script src="http://code.jquery.com/jquery-latest.js"></script>
    
    <script src="assets/collagePlus/js/jquery.collagePlus.min.js"></script>
    <script src="assets/collagePlus/js/extras/jquery.removeWhitespace.min.js"></script>
    <script src="assets/collagePlus/js/extras/jquery.collageCaption.min.js"></script>
  
    <script type="text/javascript">

    // All images need to be loaded for this plugin to work so
    // we end up waiting for the whole window to load in this example
    $(window).load(function () {
        $(document).ready(function(){
            collage();
            $('.Collage').collageCaption();
        });
    });


    // Here we apply the actual CollagePlus plugin
    function collage() {
        $('.Collage').removeWhitespace().collagePlus(
            {
                'fadeSpeed'     : 2000,
                'targetHeight'  : 200
            }
        );
    };

    // This is just for the case that the browser window is resized
    var resizeTimer = null;
    $(window).bind('resize', function() {
        // hide all the images until we resize them
        $('.Collage .Image_Wrapper').css("opacity", 0);
        // set a timer to re-apply the plugin
        if (resizeTimer) clearTimeout(resizeTimer);
        resizeTimer = setTimeout(collage, 200);
    });

    </script>
</head>

<body>
	
	<!--  Top Menu -->
	<?php include('./includePHP/header.php');?>
	<!--  End Top Menu -->	
	<div class="container">
		<!--  Carousel -->
		<div class="container">
		<?php include('./includePHP/carousel.php'); ?>
		</div>
		<!--  End Carousel -->
	
	<!--  Collage -->
	    <div class="Collage effect-parent">
	    <div class="Image_Wrapper" data-caption="<ul>
	          <li>Income/Expense Tracking</li>
			  <li>Maintenance Fees</li>
	          <li>Real time balance sheet</li>
	          <li> and more </li>
          </ul>"><img src="./static/images/img-FinanceMgmt.jpg"/></div>
	    <div class="Image_Wrapper" data-caption="<ul>
		          <li>Service Contracts</li>
				  <li>Facility Management</li>
		          <li>Search for Service</li>
		          <li> and more </li>
	          </ul>"><img src="./static/images/img-FacilityMgmt.jpg"/></div>
	    
	    <div class="Image_Wrapper" data-caption="<ul>
		          <li>Meetings</li>
				  <li>Cultural Events</li>
		          <li>Circulars</li>
		          <li>and more...</a></li>
	          </ul>"><a><img src="./static/images/img-CommnMgmt.jpg"/></a></div>
	     <div class="Image_Wrapper" data-caption="<ul>
		          <li>Management Committee</li>
				  <li>Resident Info</li>
		          <li>Visitor Info</li>
		          <li>and more...</a></li>
	          </ul>"><a><img src="./static/images/img-Society.jpg"/></a></div>
	    
	    <div class="Image_Wrapper" data-caption="<ul>
		          <li>Rentals</li>
				  <li>Garage Sales</li>
		          <li>Wishlists</li>
		          <li>and more...</a></li>
	          </ul>"><a><img src="./static/images/img-classifieds.jpg"/></a></div>
    
	</div>
	<!--  End Collage -->
	</div>
	
	<!--  Footer and About -->
	<hr>

              <div class="row">
                       <div class="span12">
                            <div class="span4">
							</div> 

                            <div class="span8 pull-right">
                            <p class="pull-right">
                                <a href="#">Terms of Service  |</a>
                                <a href="#"> Privacy   |</a>
                                <a href="#"> Security</a>
                              </p>
                             </div> 
                		</div> 
		       </div> 
	
	<!--  End Foooter and about  -->
	<script src="./assets/bootstrap/3-0-2/js/bootstrap.js"></script>

</body>


</html>