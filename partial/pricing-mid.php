<?php 
	require_once '/../classes/DB/PriceFeature.class.php';
	$db = new PriceFeature();
	$results = array();
	$results = $db->getProductFeaturesByPay();
	$subType ='';
	$subChanged = false;
	$subPrice = 10;
	
?>
<!--  Breadcrumb logic needs to be eventually a function call  -->
<!--  Breadcrumb for the page -->
	<ol class="breadcrumb">
    	<li><a href="index.php">Home</a></li>
        <li class="active">Pricing Table</li>
	</ol>
    
    <!--  Page header -->
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Pricing Table <small>Our Pricing Options</small></h1>
        </div>
      </div>
      
      <!--  Start the pricing table row before PHP code starts -->
      <div class="row"> <!-- Start of the table -->
<?php 	
	foreach ($results as $row)
	{
		if ($subType == '')
		{
			// First time. Set the subtype
			$subType = $row['Subscription_Type'];
			echo '<div class="col-sm-3">
          			<div class="panel panel-default text-center">
            			<div class="panel-heading">';
            echo '			<strong>' .$row['Subscription_Type']. '</strong> ';
            echo '		</div>';
            
            echo '<div class="panel-body">
              		<h3 class="panel-title price"><i class="fa fa-inr"></i>' .$subPrice. '</span><span class="price-month"> per mo, per house.</span></h3>
             	</div>';
            
		}
		
		if ($subType == $row['Subscription_Type'])
		{
			$subChanged =false;
            echo '<ul class="list-group">
              		<li class="list-group-item">' .$row['Prod_Feature']. '</li>';
		}
		else
		{
			$subChanged =true;
			echo '<li class="list-group-item"><a class="btn btn-primary" data-toggle="modal" href="#Signup" >Sign Up Now!</a></li>
            		</ul>
            		</div>
            		</div>';
			
			// Subscription type has changed, set it correct
			$subType = $row['Subscription_Type'];
			$subPrice += 5;

			if ($subChanged == true)
			{
				echo '<div class="col-sm-3">
	          			<div class="panel panel-default text-center">
	            			<div class="panel-heading">';
	            echo '			<strong>' .$row['Subscription_Type']. '</strong> ';
	            echo '		</div>';
	            
	            echo '<div class="panel-body">
	              		<h3 class="panel-title price"><i class="fa fa-inr"></i>' .$subPrice. '</span><span class="price-month"> per mo, per house</span></h3>
	             	</div>';
			}
			
			echo '<ul class="list-group">
              		<li class="list-group-item">' .$row['Prod_Feature']. '</li>';
			
		}
	}
	echo '<li class="list-group-item"><a class="btn btn-primary" data-toggle="modal" href="#Signup" >Sign Up Now!</a></li>
            </ul>
            </div>
            </div>';
	
?>

<div class="row"> <!-- End of the table -->

<!--  Php generated table above -->

<!--  The below table is kept as temporary place holder for now.  -->
        <div class="col-sm-3">
          <div class="panel panel-default text-center">
            <div class="panel-heading">
              <strong>Ultimate</strong>
            </div>
            <div class="panel-body">
              <h3 class="panel-title price">$49<span class="price-cents">99</span><span class="price-month">mo.</span></h3>
            </div>
            <ul class="list-group">
              <li class="list-group-item">Unlimited</li>
              <li class="list-group-item">150 GB of Storage</li>
              <li class="list-group-item">Unlimited</li>
              <li class="list-group-item">500 GB Bandwidth</li>
              <li class="list-group-item">Security Suite</li>
              <li class="list-group-item"><a class="btn btn-primary" data-toggle="modal" href="#Signup">Sign Up Now!</a></li>
            </ul>
          </div>          
        </div>

      </div>

    </div><!-- /.container -->

