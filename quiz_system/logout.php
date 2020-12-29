<?php 
session_start(); /* Starts the session */
session_destroy(); 
header("location:form.php");
?>
