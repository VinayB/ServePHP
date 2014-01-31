<?php 	
/* Check the validation sample from
 * http://mingliangfeng.me/github%20project/2013/09/28/jquery-validate-bootstrap-popover-modal/
 */

/* 9-Jan-2014 ---Check validation from
 * http://www.w3schools.com/php/php_form_validation.asp
 * and
 * http://www.w3.org/TR/WCAG20-TECHS/SCR32
 */
require_once('./thirdparty/recaptchalib.php');  
		$publickey = "6LdZgeoSAAAAAJWOYxphwSlJJIBFwX-mmqeWuAlz "; 
		
?>
<!-- Modal Signup form -->

	<form class="form-horizontal" accept-charset="UTF-8" role="form" 
		id="registerHere" method="post" action="signUpUser.php">

		<div class="modal fade" id="Signup" role="dialog">
			<div class="modal-dialog">
				<div class="panel panel-primary">
					<div class="panel-heading"> 								
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h3 class="panel-title">Sign up - It's Free !</h3> 
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
								<input class="required form-control" type="text" 
										name="F_Name" 
										required />
							</div>
							</br>				
							<!--  Last Name -->
							<div class="input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-user"></span>
								</span>
									<input class="form-control" type="text" 
										name="L_Name" placeholder="Last Name"/>
										
							</div>
					
</br>				
							<div class="input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-envelope"></span>
								</span>
								<input type="text" name="Email" 
										class="form-control" type="email"	
										required />
							</div>
</br>							
							<div class="input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-lock"></span>
								</span>
								<input type="password" name="Passwd" 
										class="form-control" 
										required />
							</div>
</br>							
							<div class="input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-lock"></span>
								</span>
								<input type="password" name="ConfirmPwd" 
										class="form-control"/> 
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
		
		<script>$("#regesterHere").validate();</script>
		
	</form>