<?php
/*
 * 	Author		:	Vinay N. Barigidad
 * 	Date		:	25-Dec-2013
 * 	Desc		:	Provides a small carousel, which a user can manually scroll through
 * 					This will be added just below the top Nav, allowing the user to see the 
 * 					latest happenings, posts, classifieds, photos etc. Need to think little
 * 					more on what all needs to be included on this strip, making sure that 
 * 					page download and rendering doesn't spoil the user experience.
 */
?>
        <!-- static carousel with images, that user can slide
        Taken from 
        http://bootsnipp.com/snippets/featured/thumbnail-carousel
        
    	================================================== -->
<div class="row"> 
	<div class="span12">
		<div class="well"> 
		
			<div id="userCarousel" class="carousel slide">
		
				<!--  Slider -->
				<ol class="carousel-indicators">
					<li data-target="#userCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#userCarousel" data-slide-to="1"></li>
					<li data-target="#userCarousel" data-slide-to="2"></li>
				</ol>
				
				<!--  Carousel Items  -->
				<div class=""carousel-inner">
				
					<!--  First set of images -->
					<div class="item active">
						<div class="row-fluid">
							<div class="span2"><a class="thumbnail" href="#"> <img src="./static/images/150x75 Chocolate.jpg"></a></div>
							<div class="span2"><a class="thumbnail" href="#"> <img src="./static/images/150x75 ColoredFaces.jpg"></a></div>
							<div class="span2"><a class="thumbnail" href="#"> <img src="./static/images/150x75 Mountain.jpg"></a></div>
							<div class="span2"><a class="thumbnail" href="#"> <img src="./static/images/150x75 Movie300.jpg"></a></div>
							<div class="span2"><a class="thumbnail" href="#"> <img src="./static/images/150x75 Sports.jpg"></a></div>
							<div class="span2"><a class="thumbnail" href="#"> <img src="./static/images/150x75 Interior.jpg"></a></div>
						</div> <!--  End row-fluid -->
					</div> <!--  End item-active -->
				
					<div class="item">
						<div class="row-fluid">
							<div class="span2"><a class="thumbnail" href="#"> <img src="./static/images/150x75 ColoredFaces.jpg"></a></div>
							<div class="span2"><a class="thumbnail" href="#"> <img src="./static/images/150x75 Mountain.jpg"></a></div>
							<div class="span2"><a class="thumbnail" href="#"> <img src="./static/images/150x75 Movie300.jpg"></a></div>
							<div class="span2"><a class="thumbnail" href="#"> <img src="./static/images/150x75 Sports.jpg"></a></div>
							<div class="span2"><a class="thumbnail" href="#"> <img src="./static/images/150x75 Interior.jpg"></a></div>
							<div class="span2"><a class="thumbnail" href="#"> <img src="./static/images/150x75 Chocolate.jpg"></a></div>
						</div> <!--  End row-fluid -->
					</div> <!--  End item -->
				
					<div class="item">
						<div class="row-fluid">
							<div class="span2"><a class="thumbnail" href="#"> <img src="./static/images/150x75 ColoredFaces.jpg"></a></div>
							<div class="span2"><a class="thumbnail" href="#"> <img src="./static/images/150x75 Mountain.jpg"></a></div>
							<div class="span2"><a class="thumbnail" href="#"> <img src="./static/images/150x75 Movie300.jpg"></a></div>
							<div class="span2"><a class="thumbnail" href="#"> <img src="./static/images/150x75 Sports.jpg"></a></div>
							<div class="span2"><a class="thumbnail" href="#"> <img src="./static/images/150x75 Interior.jpg"></a></div>
							<div class="span2"><a class="thumbnail" href="#"> <img src="./static/images/150x75 Chocolate.jpg"></a></div>
						</div> <!--  End row-fluid -->
					</div> <!--  End item -->
						
				</div> <!--  End carousel-inner -->
				
				
				
				
			
				<!--  Carousel Nav -->					
				<a class="left carousel-control" href="#userCaroursel" data-slide="prev"></a>
				<a class="right carousel-control" href="#userCaroursel" data-slide="next"></a>
			</div> <!--  End carousel slide-->
		</div> <!--  End well  -->
	</div> <!--  End span12 -->
</div> <!--  End row -->
<script type="text/javascript">
	$(document).ready(function() {
    $('#userCaroursel').carousel({
	    interval: 10000
	})
});	</script>