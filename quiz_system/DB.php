<?php  
include 'Connectiondb/connection.php';
/************ REGISTRATION FORM ***************/

if(isset($_POST['btn_insert'])) {
$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$user_name = $_POST['user_reg'];
$password = $_POST['password'];

$insert_query = "INSERT INTO quiz_user (first_name, last_name, username, pass) VALUES ('$first_name', '$last_name', '$user_name', '$password')";
$result = mysqli_query ($connection,$insert_query);

    if ($result==false) {
      echo "Error Insert Data";
    }
    else {
      echo "Insert Done";
	}
}

/************ REGISTRATION FORM END ***************/

?>