<?php 
// Going To create a DB conection
include 'connection.php';
$select_query = mysqli_query($conection,"SELECT * FROM `posts`");

 if (isset($_GET['pst'])) {
  
   $delete_field = "DELETE FROM posts WHERE id=$_GET[pst]";
   $result = mysqli_query($conection,$delete_field);
   if ($result == True ) {
     echo "Delete Successful";
     header("location:view_post.php");
   }
}

 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
	<td><a class="btn btn-primary btn-md" href="form.php?pst=<?php echo $post_id; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"> EDIT</i>
</a></td>
	<!-- href=form.php?post_id=1 -->
	<td><a class="btn btn-danger btn-md" data-toggle="modal" data-target="#myModal" href="#"><i class="fa fa-trash" aria-hidden="true"></i> DELETE</a></td>
	 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Are You Sure You Wana Delete This.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
          <a href="view_post.php?pst=<?php echo $post_id;?>" class="btn btn-danger">Delete</a>
        </div>
      </div>
      
    </div>
  </div>
</tr>
<?php
}
?>
</table>
</body>
</html>