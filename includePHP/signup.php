<?php 	require_once('./thirdparty/recaptchalib.php');  
		$publickey = "6LdZgeoSAAAAAJWOYxphwSlJJIBFwX-mmqeWuAlz "; 
		
?>
<!-- Modal Signup form -->


		<form class="form-horizontal" accept-charset="UTF-8" role="form" 
				id="registerHere" method="post" action="" >
		<div class="modal fade" id="Signup" role="dialog">
			<div class="modal-dialog">
				<div class="panel panel-primary">
					<div class="panel-heading"> 								
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;</button>
							<h3 class="panel-title">Sign up</h3> 
					 </div>

								
					 <script type="text/javascript"> 
					 	var RecaptchaOptions = {    
							 		theme : 'clean' 
								 		}; 
					</script>
						 
			<div class="modal-body">
							<fieldset>
							<!--  First Name -->
							<div class="input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-user"></span>
								</span>

									<input class="form-control" type="text" 
										name="F_Name" placeholder="First Name" 
										value="First Name" 
										rel="popover" data-content="Enter your First name." 
										data-original-title="First Name"
										required autofocus ></input>

							</div>
</br>				
							<!--  Last Name -->
							<div class="input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-user"></span>
								</span>
									<input class="form-control" type="text" 
										name="L_Name" placeholder="Last Name" 
										value="Last Name"
										rel="popover" data-content="Enter your Last name." 
										data-original-title="Last Name"></input>
										
							</div>
					
</br>				
							<div class="input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-envelope"></span>
								</span>
								<input type="text" name="Email" 
										class="form-control" 
										placeholder="Email id" 
										value="Email" 
										rel="popover" data-content="Enter your e-mail id." 
										data-original-title="E-mail"
										required ></input>
							</div>
</br>							
							<div class="input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-lock"></span>
								</span>
								<input type="password" name="Passwd" 
										class="form-control" 
										rel="popover" data-content="Enter password." 
										data-original-title="Password"
										value="Password" required ></input>
							</div>
</br>							
							<div class="input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-lock"></span>
								</span>
								<input type="password" name="ConfirmPwd" 
										class="form-control" 
										value="Confirm Password" required 
										rel="popover" data-content="Confirm Password." 
										data-original-title="Full Name"
										> </input>
							</div>
							
							<div class="checkbox">
								<label class="checkbox pull-left">
									<input name="NewsLetr" type="checkbox" value="SubToNews"></input>
										Sign me up for EzeeServe Newsletter ! </br></br>
										<?php echo recaptcha_get_html($publickey); ?>
								</label>
							</div>
							
							 <button name="btn_Signup" class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
						</fieldset>
					
				</div>
		
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div>
</form>