<?php 
$local_host = "localhost";
$username = "newroot";
$user_password = "Test@321";
$db_name = "prectice";
$conection = mysqli_connect($local_host,$username,$user_password,$db_name);

if (!$conection) {
	echo "Connection Establshing Eorror";
}
/*if ($conection == false) {
	echo "string";
}*/
?>