<?php

$localhost = "locahost";
$user_name = "newroot";
$user_password = "Test@321";
$db_name = "prectice";
$connection = mysqli_connect($locahost, $user_name, $user_password, $db_password)

if (!$connection) {
	echo "Connection Establishing Eorror";
}

?>