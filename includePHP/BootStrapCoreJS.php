      <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="./assets/bootstrap/3-0-2/js/bootstrap.js"></script>

	<script type="text/javascript">
			
			$(document).ready(function()
			 {
			 // Popover 
			 $('#registerHere input').hover(function()
			 {
			 	$(this).popover('show')
			 });
			 
			// Validation
			 $("#registerHere").validate({
			 rules:{
				 F_Name:"required",
				 Email:{required:true,Email: true},
				 Passwd:{required:true,minlength: 6},
				 ConfirmPwd:{required:true,equalTo: "#Passwd"}
			  },
			 
			messages:{
			 F_name:"Enter your First name",
			 L_name:"Enter your Last name",
			 Email:{
			 	required:"Enter your email address",
			 	Email:"Enter valid email address"},
			 Passwd:{
			 	required:"Enter your password",
			 	minlength:"Password must be minimum 6 characters"},
			 ConfirmPwd:{
			 	required:"Enter confirm password",
			 	equalTo:"Password and Confirm Password must match"}
			 },
			 
			errorClass: "help-inline",
			 errorElement: "span",
			 highlight:function(element, errorClass, validClass)
			 {
				 $(element).parents('.input-group').addClass('error');
			 },
				 unhighlight: function(element, errorClass, validClass)
			 {
				 $(element).parents('.input-group').removeClass('error');
				 $(element).parents('.input-group').addClass('success');
			 }
			 });
			 });
			 </script>
	