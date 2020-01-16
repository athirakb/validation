<html>
<head>
	
	<!--<script type="text/javascript" src="register.js" ></script>-->

</head>
<body>
<form name="frm" id="frm" action="" method="post" onsubmit="return validateForm()">
 <table>
	<tr><td>First name</td><td><input type="text" id="fname" name="fname" ></td></tr><div class="fb-error">
    </div>
	<tr><td>Last name</td><td><input type="text" id="lname" name="lname" ></td></tr>
	<tr><td>Age</td><td><input type="text" id="age" name="age"></td></tr>
	<tr><td>Email</td><td><input type="text" id="email" name="email" ></td></tr>
	<tr><td>Username</td><td><input type="text" id="username" name="username"></td></tr>
	<tr><td>Password</td><td><input type="text" id="password" name="password" ></td></tr>
	
	
	
	<?php
	if((isset($id)) && ($id!=""))
	{
?>
		<tr><td></td><td><input type="submit" id="submit" name="save" value="Update"></td></tr>
		<?php
	}
	else
	{
		?>
		<tr><td></td><td><input type="submit" name="save" value="Save"></td></tr>
		<?php
	}
		?>
	
	
 </table>
</form>
<script type="text/javascript" src="jquery-3.4.1.min.js" ></script>
<script type="text/javascript" src="jquery.validate.min.js" ></script>

<script>
	$(document).ready(function() {
		$('form[id="frm"]').validate({
			rules: {
				fname: 'required',
				lname: 'required',
				age:'required',
				username:'required',
				email: {
					required: true,
					email: true,
				},
				 password: {
					required: true,
					pwcheck: true,
					minlength: 8,
					
					
				}
			},
			 messages: {
				fname: 'This field is required.',
				lname: 'This field is required.',
				age: 'This field is required.',
				username: 'This field is required.',
				email: 'Enter a valid email',
				password: {
					pwcheck: 'password must contain  atleast a capital letter, digit, and special character',
					minlength: 'Password must be at least 8 characters long'
					
				}
			 },
			 submitHandler: function(form) {
				form.submit();
			}
		});
		
		$.validator.addMethod("pwcheck",
			function(value) {
				return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value) // consists of only these
				&& /[A-Z]/.test(value) // has a uppercase letter
				&& /\d/.test(value) // has a digit
		});
		
	});
	</script>
</body>
</html>