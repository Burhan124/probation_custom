<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

/* Check Login form submitted */
if(isset($_POST['Submit_btn'])){
  $errors =0;
     $first_name =  validate_fields($_POST["Username"]);
  $user_pasword =  validate_fields($_POST["Password"]);
    if (empty($first_name)) {
    $first_name_erroe = "This filed is required";
    $error++;
  }
    if (empty($user_pasword)) {
    $pasword_error = "This filed is required";
    $error++;

  }
  if ($errors ==0) {

      $logins = array('Regina Hahn' => '123456789'
      ,'username1' => 'password1',
      'username2' => 'password2');

    /* Check and assign submitted Username and Password to new variable */
    $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
    $Password = isset($_POST['Password']) ? $_POST['Password'] : '';
    /* Check Username and Password existence in defined array */
      // true             Regina Hahn

    if (isset($logins[$Username]) && $logins[$Username] == $Password){
        /* Success: Set session variables and redirect to Protected page  */
        session_start(); /* Starts the session */
        $_SESSION['Username']=$Username;
        header("location:login.php");
    } else {
    /*Unsuccessful attempt: Set error message */$msg="<span style='color:red'>Invalid Login Details</span>";
    }
    # code...
  }
/* Define username and associated password array */
  
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
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>

form.form {
    margin: auto !important;
    display: table !important;
    text-align: center;
}

form.form input[type="text"], form.form input[type="email"], form.form input[type="number"],  form.form select, form.form textarea, form.form  input[type="pasword"] {
    margin-bottom: 5% !important;
}

form.form input[type="text"], form.form input[type="email"], form.form input[type="number"], form.form select, form.form textarea, form.form  input[type="pasword"] {
    border: 2px solid #000;
    padding: 10px 5px;
}



</style>

</head>
<body>
<form method="post" name="Login_Form" class="form">
    <p class="h4 mb-4">Sign in</p></br>

    <input type="text" name="Username" value="<?php echo $first_name;?>"  placeholder="Name"></br>
    <p> <?php echo $first_name_erroe;  ?></p></br>

    <input type="pasword" name="Password" value="<?php echo $user_pasword;?>" placeholder="Pasword"></br>
    <p> <?php echo $pasword_error;  ?></p></br>

  <input name="Submit_btn" type="submit" value="Login">

  <p>Regina Hahn </br> 123456789</p>
  <p>
  <?php
    echo $msg;
  ?>
  </p>

</form>
</body>
</html>