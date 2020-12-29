<?php  
session_start(); /* Starts the session */
if(!isset($_SESSION['admin_id'])){
header("location:form.php");
}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>

<div>
	<h1>Welcome To Admin Panle</h1>
	Congratulation! You have logged into password protected page. <a href="logout.php">Click here</a> to Logout.
</div>

</body>
</html>