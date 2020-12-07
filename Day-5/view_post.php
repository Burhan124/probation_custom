<?php 
// Going To create a DB conection
include 'connection.php';
$select_query = mysqli_query($conection,"SELECT * FROM `posts`");
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<table class="table">
	<tr>
		<th>ID</th>
		<th>Title</th>
		<th>Discription</th>
		<th>Message</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
<?php

while ($rows=mysqli_fetch_array($select_query)) 
{
$post_id = $rows['id'];
$title = $rows['title'];
$discriptio = $rows['desce'];
$message = $rows['p_author'];
/*echo "Post ID: ".$post_id." "."Title: ".$title." "."Discription: ".$discriptio." "."Message: ".$message."</br>";*/
?>
<tr>
	<td><?php echo $post_id; ?></td>
	<td><?php echo $title; ?></td>
	<td><?php echo $discriptio; ?></td>
	<td><?php echo $message; ?></td>
	<td><a href="form.php?pst=<?php echo $post_id; ?>">EDIT</a></td>
	<!-- href=form.php?post_id=1 -->
	<td><a href="#">Delet</a></td>
</tr>
<?php
}
?>
</table>
</body>
</html>