<?php 

class connecion {

  public $local_host;
  public $username;
  public $user_password;
  public $db_name;
  public $conection;

  public function __construct() {
    $this->local_host = "localhost";
    $this->username = "newroot";
    $this->user_password = "Test@321";
    $this->db_name = "prectice";
    $this->conection = mysqli_connect($this->local_host,$this->username,$this->user_password,$this->db_name);
    if (!$this->conection) {
      echo "<h1> Error Connectiing Database </h1>";
    }
    
  }
}

class insert extends connecion{
  
public function addpost ($addfields) { 
      
      $error = 0;
       $first_name =  $this->validate_fields($addfields["first_name"]);
       $discription =  $this->validate_fields($addfields["discription"]);
       $message =  $this->validate_fields($addfields["message"]);

      if (empty($first_name)) {
      $first_name_error = "This filed is required";
      return $first_name_error;
      $error++;
    }
      if (empty($discription)) {
      $discription_error = "This filed is required";
      return $discription_error;
      $error++;

    }
      if (empty($message)) {
      $message_error = "This filed is required";
      return $message_error;
      $error++;

    }
      if ($error == 0) {
        echo "All field Submited";
        //var_dump($this->conection)


     
      // Going To create a DB conection
      $insert_query = "INSERT INTO posts (title, desce, p_author) VALUES ('$first_name', '$discription', '$message')";
      // echo "<pre>";
      // var_dump($insert_query);exit;
      $result = mysqli_query($this->conection,$insert_query);


      if ($result==false) {
        echo "Error Insert Data";
      }
      else {
        header('location:view_post.php');
      }

      }
    }
     public function validate_fields($validation) {
        $validation = trim($validation);
        $validation = htmlspecialchars($validation);
        return $validation;
      }
  }

class delete extends insert {
    
  function deletePost($deletefields){
   $delete_field = "DELETE FROM posts WHERE id=$_GET[pst]";
   $result = mysqli_query($this->conection,$delete_field);
   if ($result == True ) {
     echo "Delete Successful";
     header("location:view_post.php");
   }
  }
}

class edit extends delete {

    function editPost($updatefields){
   
     $title = $updatefields['first_name'];
     $discriptio = $updatefields['discription'];
     $message = $updatefields['message'];

     $update_query = "UPDATE posts SET title='$title', desce='$discriptio', p_author='$message' WHERE id=$_GET[pst]";
     $result = mysqli_query($this->conection,$update_query);
     if ($result == True ) {
       echo "Field Upadted";
       header("location:view_post.php");
    }
  }
}

?>

<!--  if(isset($_POST['btn_insert'])) {
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

    /*echo "Title: ".$title."</br>"."Discription: ".$discriptio."</br>"."Message: ".$message;*/
    echo "</br>";
    // Going To create a DB conection
    $insert_query = "INSERT INTO posts (title, desce, p_author) VALUES ('$first_name', '$discription', '$message')";
    $result = mysqli_query($conection,$insert_query);


    if ($result==false) {
      echo "Error Insert Data";
    }
    else {
      header('location:view_post.php');
    }

    }
  } -->