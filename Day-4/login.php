<?php


 session_start(); /* Starts the session */
 var_dump($_SESSION);
if(!isset($_SESSION['Username'])){
header("location:Learning-4.php");
exit;
}
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
</style>

</head>
<body>
Congratulation! You have logged into password protected page. <a href="logout.php">Click here</a> to Logout.
</body>
</html>
