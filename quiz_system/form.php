<?php  
include 'includes/loginheader.php';
include 'Connectiondb/connection.php';
?>

<body>

	<div class="container contact">
		<div class="row">
			<div class="col-md-3">
				<div class="contact-info">
					<i class="fa fa-question" aria-hidden="true"></i>
					<h2>QUIZ</h2>
					<h4>We would love your presence !</h4>
				</div>
			</div>

			<div class="show_hide_check_box">
				<div class="remember_checkbox">
					<label class="container">LOGIN
  					  <input type="radio" checked="checked" name="radio" value="show_login" class="active_login">
					  <span class="checkmark"></span>
					</label>
				</div>

				<div class="remember_checkbox">
					<label class="container">REGISTER
					  <input type="radio" name="radio" value="show_reg" class="active_log_reg">
					  <span class="checkmark"></span>
					</label>
				</div>
			</div>

		<form method="post" id="reg-form" class="registration_form">
			<div class="div1">
				<div class="col-md-9">
				<h2> REGISTRATION FORM </h2>
					<div class="contact-form">
						<p class="text text-danger error" style="display:none;">One or more fields are empty</p>
						<div class="form-group">
						  <label class="control-label col-sm-2" for="fname">First Name:</label>
						  <input type="hidden" name="action" value="register_user">
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
						  <label class="control-label col-sm-2" for="">User Name:</label>
						  <div class="col-sm-10">
							<input type="text" class="form-control" id="user_reg" placeholder="User Name" name="user_reg">
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-2" for="Password">Password:</label>
						  <div class="col-sm-10">
							<input type="Password" class="form-control" id="Password" placeholder="Password" name="password"> 
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-2" for="Conform_Password">Conform Password:</label>
						  <div class="col-sm-10">
							<input type="Password" class="form-control" id="Conform_Password" placeholder="Conform Password" name="password">
							<p class="text-danger error-pass" style="display: none;"> Your password does not match</p>
						  </div>
						</div>
						<div class="form-group">        
							<div class="col-sm-offset-2 col-sm-10">
								<input class="btn btn-default" type="submit" name="btn_insert" value="REGISTER">
								<!-- <a href="#" class="btn btn-default">REGISTER</a> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>

		<form method="post" id="login-form" class="login_form">
			<div class="div1">
				<div class="col-md-9">
				<h2> LOGIN FORM </h2>
					<div class="contact-form">
						<div class="form-group">
						  <label class="control-label col-sm-2" for="">User Name:</label>
						  <div class="col-lg-12">
							<input type="text" class="form-control" placeholder="User Name" name="user_login">
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-2" for="Password">Password:</label>
						  <div class="col-lg-12">
							<input type="Password" class="form-control" id="Password" placeholder="Password" name="login_password">
						  </div>
						</div>
						<div class="form-group">        
							<div class="col-sm-offset-2 col-lg-12">
								<input class="btn btn-default" type="submit" name="login_btn_user" value="LOGIN">
								<p style=" text-align: center; "class="text text-danger">
								<?php if (isset($_GET['mes'])) { echo($_GET['mes']);} ?></p>
								<!-- <a href="#" class="btn btn-default">LOGIN</a> -->
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
		</form>
		</div>
	</div>


</body>
<?php  
include('includes/footer.php');
?>