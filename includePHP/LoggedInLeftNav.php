<?php
	/*
	 * 	Author		:	Vinay N. Barigidad
	 * 	Date		:	25-Dec-2013
	 * 	Desc		:	Provides static Left Nav for the logged in user 
	 * 					Phase 1 - Static Left Nav
	 * 					Later - Needs to be dynamic
	 */

?>

      	<!-- 
      		* Out of 12 columns of the bootstrap framework, 
      		* will use first 2 columns for the Left Navigation  
			* SPAN2 class allows us to split the screen size and use 2 columns
      	-->

	<div class="span2 bs-docs-sidebar">
        <ul class="nav nav-list bs-docs-sidenav"> 
  			<li class="active"><a href="#"><i class="fa fa-cogs fa-fw"></i> Services</a></li>
  			<li><a href="#"><i class="fa fa-group fa-fw"></i> My Groups</a></li>
  			<li><a href="#"><i class="fa fa-tasks fa-fw"></i> My Tasks</a></li>
  			<li><a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Budget</a></li>
  			<li><a href="#"><i class="fa fa-building-o fa-fw"></i> Maintenance</a></li>
        </ul>
	</div> <!-- span2 bs-docs-sidebar End -->
