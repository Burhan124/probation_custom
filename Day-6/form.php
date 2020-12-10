<?php  

/*include 'db_connection.php';

if (isset($_POST['submit'])) {

}

function validatefields($validation) {
	$validation = trim($validation)
	$validation = htmlspecialchars($validation)
	$validation = stripslashes($validation);
	return $validation;
}
*/
?>

<!DOCTYPE html>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="css/style.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script>
function show2(){
  document.getElementById('.div1').style.display = 'block';
}
</script>


</head>
<body>
<form method="post" class="reg_login_form">
	<div class="container contact">
		<div class="row">
			<div class="col-md-3">
				<div class="contact-info">
					<img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
					<h2>USER LOGIN</h2>
					<h4>We would love your presence !</h4>
				</div>
			</div>

			<div class="show_hide_check_box">
				<div class="remember_checkbox">
					<label class="container">LOGIN
  					  <input type="radio" checked="checked" name="radio" value="show_login" onclick="show2();">
					  <span class="checkmark"></span>
					</label>
				</div>


				<div class="remember_checkbox">
					<label class="container">REGISTER
					  <input type="radio" name="radio" value="show_reg" onclick="show2();">
					  <span class="checkmark"></span>
					</label>
				</div>
			</div>

			<div class="registration_form div1">
				<div class="col-md-9">
				<h2> REGISTRATION FORM </h2>
					<div class="contact-form">
						<div class="form-group">
						  <label class="control-label col-sm-2" for="fname">First Name:</label>
						  <div class="col-sm-10">          
							<input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname">
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-2" for="lname">Last Name:</label>
						  <div class="col-sm-10">          
							<input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname">
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-2" for="email">Email:</label>
						  <div class="col-sm-10">
							<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-2" for="email">Password:</label>
						  <div class="col-sm-10">
							<input type="Password" class="form-control" id="Password" placeholder="Password" name="email">
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-2" for="email">Conform Password:</label>
						  <div class="col-sm-10">
							<input type="Password" class="form-control" id="Conform Password" placeholder="Conform Password" name="email">
						  </div>
						</div>
						<div class="form-group">        
							<div class="col-sm-offset-2 col-sm-10">
								<a href="#" class="btn btn-default">REGISTER</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="login_form div1">
				<div class="col-md-9">
				<h2> LOGIN FORM </h2>
					<div class="contact-form">
						<div class="form-group">
						  <label class="control-label col-sm-2" for="fname">First Name:</label>
						  <div class="col-sm-10">          
							<input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname">
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-2" for="email">Email:</label>
						  <div class="col-sm-10">
							<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-2" for="email">Password:</label>
						  <div class="col-sm-10">
							<input type="Password" class="form-control" id="Password" placeholder="Password" name="Password">
						  </div>
						</div>
						<div class="form-group">        
							<div class="col-sm-offset-2 col-sm-10">
								<a href="#" class="btn btn-default">LOGIN</a>
							</div>
						</div>
						<div class="form-group">  
							<div class="remember_checkbox">
								<label class="container">Remember Me
								  <input type="checkbox" checked="checked">
								  <span class="checkmark"></span>
								</label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>


</body>
</html>