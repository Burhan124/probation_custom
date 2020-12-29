<?php
include 'connection.php';
 if (isset($_POST['post_id'])) {
   $delete_field = "DELETE FROM posts WHERE id=$_POST[post_id]";
   $result = mysqli_query($conection,$delete_field);
   if ($result == True ) {
   		$result['status'] = true;
   }
   else{
   		$result['status'] = false;
   }
   		return response_json($result);
}
function response_json($data){
	echo json_encode($data);
	exit();  
}

?>