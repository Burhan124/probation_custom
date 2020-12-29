<?php  

$local_host = "localhost";
$user_name = "newroot";
$password = "Test@321";
$db_name = "system_quiz";
$connection = new mysqli ($local_host, $user_name, $password, $db_name);

if (!$connection) {
	echo "connection Establishing Faild";
}


?>