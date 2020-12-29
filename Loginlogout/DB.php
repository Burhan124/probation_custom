<?php
include 'connection.php';
$title = $_POST['first_name'];
$discriptio = $_POST['discription'];
$message = $_POST['message'];
/*echo "Title: ".$title."</br>"."Discription: ".$discriptio."</br>"."Message: ".$message;*/
echo "</br>";
// Going To create a DB conection
$insert_query = "INSERT INTO posts (title, desce, p_author) VALUES ('$title', '$discriptio', '$message')";
$result = mysqli_query($conection,$insert_query);


if ($result==false) {
	echo "Error Insert Data";
}
else {
	echo "Insert Done";
}
?>

