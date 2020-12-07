<?php 
 
// var_dump($_GET);
// echo "<pre>";
echo "ID IS".$_GET['pst'];
// echo $array[1];
/*$array = array ('Burhan', 'Burhan1', 'Burhan2');
echo "<pre>";
var_dump($array);
echo $array[1];*/
if(isset($_POST['submit'])){
  $error = 0;
     $first_name =  validate_fields($_POST["first_name"]);
     $discription =  validate_fields($_POST["discription"]);
     $message =  validate_fields($_POST["message"]);

    if (empty($first_name)) {
    $first_name_error = "This filed is required";
    $error++;
  }
    if (empty($discription)) {
    $discription_error = "This filed is required";
    $error++;

  }
    if (empty($message)) {
    $message_error = "This filed is required";
    $error++;

  }
    if ($error == 0) {
      echo "All field Submited";

    include 'connection.php';
    /*echo "Title: ".$title."</br>"."Discription: ".$discriptio."</br>"."Message: ".$message;*/
    echo "</br>";
    // Going To create a DB conection
    $insert_query = "INSERT INTO posts (title, desce, p_author) VALUES ('$first_name', '$discription', '$message')";
    $result = mysqli_query($conection,$insert_query);


    if ($result==false) {
      echo "Error Insert Data";
    }
    else {
      echo "Insert Done";
    }

    }
  }



//Function For Validations

function validate_fields($validation) {
  $validation = trim($validation);
  $validation = htmlspecialchars($validation);
  return $validation;
}

//Function For Validations



?>


<!DOCTYPE html>
<html>
<head>
<style>
	
form.main_form {
    margin: auto !important;
    display: table !important;
}

form.main_form input[type="text"] {
    border: 2px solid #000;
    padding: 5%;
    font-size: 16px !important;
    margin-bottom: 10%;
}

form.main_form input[type="submit"] {
    margin-bottom: 5% !important;
}

form.main_form input[type="submit"], form.main_form input[type="button"] {
    background-color: #000 !important;
    border: 0;
    padding: 15px 25px !important;
    color: #fff !important;
    font-size: 16px !important;
    width: 100%;
}



</style>
</head>
<body>

<form method="post" class="main_form">
	
	<input type="text" name="first_name" value="<?php echo $first_name;?>" placeholder="Post Title"><br>
	<p> <?php echo $first_name_error;  ?></p>
	<input type="text" name="discription" value="<?php echo $discription;?>" placeholder="Post Discription"><br>
	<p> <?php echo $discription_error;  ?></p>
	<input type="text" name="message" value="<?php echo $message;?>" placeholder="Post Author"><br>
	<p> <?php echo $message_error;  ?></p>
	<input type="submit" name="submit" value="Submit"><br>
  <a href="view_post.php">View Post</a>
<!-- 	<input type="button" name="viewpost" onclick="location.href='http://localhost/Burhan/Day-5/view_post.php';" value="View Post">
 -->

</form>

</body>
</html>