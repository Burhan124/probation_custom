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
		<form method="post" id="login-form" class="login_form">
			<div class="div1">
				<div class="col-md-9">
				<h2> LOGIN FORM </h2>
					<div class="contact-form">
						<div class="form-group">
						  <label class="control-label col-sm-2" for="">User Name:</label>
						  <div class="col-lg-12">
							<input type="text" class="form-control" placeholder="User Name" name="user_login" value="burhankhan">
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-2" for="Password">Password:</label>
						  <div class="col-lg-12">
							<input type="Password" class="form-control" id="Password" placeholder="Password" name="login_password" value="12345">
						  </div>
						</div>
						<div class="form-group">        
							<div class="col-sm-offset-2 col-lg-12">
								<input class="btn btn-default" type="submit" name="login_btn_admin" value="LOGIN">
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