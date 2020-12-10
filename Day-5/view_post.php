<?php 
// Going To create a DB conection
include('includes/header.php');
$select_query = mysqli_query($conection,"SELECT * FROM `posts`");
 ?>

<body>
  <div class="container">
    <a class="btn btn-success btn-md" href="form.php">Add Post</a>
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
	<td><a class="btn btn-primary btn-md" href="form.php?pst=<?php echo $post_id; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"> EDIT</i>
</a></td>
	<!-- href=form.php?post_id=1 -->
	<td><button class="btn btn-danger btn-md delete-post" id="<?php echo $post_id; ?>"><i class="fa fa-trash" aria-hidden="true"></i> DELETE</button></td>
 
</tr>
<?php
}
?>
</table>
</div>
</body>
<?php
include('includes/footer.php');
?>