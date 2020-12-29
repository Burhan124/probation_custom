<?php  
include '../Connectiondb/connection.php';
session_start(); /* Starts the session */
if(!isset($_SESSION['admin']) && !isset($_SESSION['user'])){
header("location:../form.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


<!-- Bootstrap Core CSS -->
<link href="../startmin-master/css/bootstrap.min.css" rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="../startmin-master/css/metisMenu.min.css" rel="stylesheet">

<!-- DataTables CSS -->
<link href="../startmin-master/css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

<!-- DataTables Responsive CSS -->
<link href="../startmin-master/css/dataTables/dataTables.responsive.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="../startmin-master/css/startmin.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="../startmin-master/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<!-- My Css Style sheet -->
<link href="../startmin-master/css/pages.css" rel="stylesheet" type="text/css">

<!-- FONT FAMILY -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>