
<!-- Modal Login form -->
<div class="modal" id="Login">
	<div class="modal-dialog">
		<div class="panel panel-default">
			<!-- Login form Header  -->
			<div class="panel-heading"> 								
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h3 class="panel-title">Login</h3> 
			</div>
			<!-- Login form Body containing fields -->
			<div class="panel-body">
				<form method="post" action="authenticateUser.php" accept-charset="UTF-8" role="form">
					<fieldset>
						<div class="form-group">
							<label>E-mail: </label><input type="text" name="Email" class="form-control" placeholder="" value="" required>
						</div>
						<div class="form-group">
							<label>Password: </label> <input type="password" name="Password" class="form-control" placeholder="" value="" required >
						</div>
						<div class="checkbox">
							<label class="checkbox pull-left">
								<input name="RememberMe" type="checkbox" value="RememberMe">
									Remember me
							</label>
						</div>
						<button class="btn btn-lg btn-primary btn-block" name="btn_Login" type="submit">Login</button>
					</fieldset>
				</form>
			</div>
		</div>
	</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
