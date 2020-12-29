<?php  
include 'Connectiondb/connection.php';
session_start(); /* Starts the session */
if(isset($_SESSION['admin'])){
header("location:startmin-master/index.php");
}
if (isset($_SESSION['user'])) {
header("location:startmin-master/userindex.php");
}

/************ REGISTRATION FORM ***************/

if(isset($_POST['action'])) {

	$first_name = $_POST['fname'];
	$last_name = $_POST['lname'];
	$user_name = $_POST['user_reg'];
	$password = $_POST['password'];

	$insert_query = "INSERT INTO quiz_user (first_name, last_name, username, pass, roll) VALUES ('$first_name', '$last_name', '$user_name', '$password', 'user')";

	$result = mysqli_query ($connection,$insert_query);

	    if ($result==false) {
	      $response['status'] = false;
	      $response['message'] = 'Error';
	    }
	    else {
	      $response['status'] = true ;
	      $response['message'] = 'User Registered Successfully' ;
		}
		return response_jason($response);
}
/************ REGISTRATION FORM ***************/

/************ LOGIN FORM USER ***************/
if (isset($_POST['login_btn_user'])) {

	$user_name = $_POST['user_login'];
	$login_password = $_POST['login_password'];
	if(!empty($user_name) AND !empty($login_password)){
		$select_query = "SELECT * FROM `quiz_user` WHERE username='$user_name' AND pass='$login_password'";
		$result = mysqli_query ($connection,$select_query);
			if ($result->num_rows == 1){
				while($row = mysqli_fetch_array($result)){
					if ($row['roll'] == 'user') {
		                $_SESSION['user'] = $row['username'];
		                $_SESSION['user_id'] = $row['id'];
		                echo "SUCCESSFULLY LOGIN ";
		                header("Location:startmin-master/userindex.php");
					}
					else {
							$msg = "NO USER FOUND";
							header("Location:form.php?mes=$msg");
					}
/*	                $_SESSION['admin_id'] = $row['id'];
	                echo "SUCCESSFULLY LOGIN ";
	                header("Location: startmin-master/index.php");*/
	    }
	}
	else {
		$msg = "INCORECT USER AND PASSWORD";
		header("Location:form.php?mes=$msg");
	}
}
	else {
	    echo "Try again";
	}
}

/************ LOGIN FORM USER ***************/

/************ LOGIN FORM ADMIN ***************/

if (isset($_POST['login_btn_admin'])) {

	$user_name = $_POST['user_login'];
	$login_password = $_POST['login_password'];
	if(!empty($user_name) AND !empty($login_password)){
		$select_query = "SELECT * FROM `quiz_user` WHERE username='$user_name' AND pass='$login_password'";
		$result = mysqli_query ($connection,$select_query);
			if ($result->num_rows == 1){
				while($row = mysqli_fetch_array($result)){
					if ($row['roll'] == 'admin') {
		                $_SESSION['admin'] = $row['username'];
		                echo "SUCCESSFULLY LOGIN ";
		                header("Location:startmin-master/index.php");
					}
					else {
						$msg = "NO USER FOUND";
						header("Location:admin.php?mes=$msg");
					}
/*	                $_SESSION['admin_id'] = $row['id'];
	                echo "SUCCESSFULLY LOGIN ";
	                header("Location: startmin-master/index.php");*/
	    }
	}
	else {
		$msg = "INCORECT USER AND PASSWORD";
		header("Location:form.php?mes=$msg");
	}
}
	else {
	    echo "Try again";
	}
}

function response_jason($data) {
	echo json_encode($data);
	exit;
}

/************ LOGIN FORM ADMIN ***************/

/************ REGISTRATION FORM END ***************/

?>