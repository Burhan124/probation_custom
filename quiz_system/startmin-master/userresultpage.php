<?php 
include '../includes/header.php';
$select_query_admin = mysqli_query($connection,"SELECT * FROM `quiz`");
?>
    <body>
        <div id="wrapper">

            <!-- Navigation -->
                              </ul>      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">QUIZ SYSTEM</a>
                </div>

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> <?php echo"User ".$_SESSION['user']; ?> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="../logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li>
                                <a href="userindex.php" class="active"><i class="fa fa-dashboard fa-fw"></i>User Dashboard</a>
                            </li>
                            <li>
                                <a href="usertable.php"><i class="fa fa-table fa-fw"></i>Tables</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">RESULT</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                        <div class="col-lg-12">
                            <div class="result">
                                <div class="text">
                                    <h1>THANKS FOR TAKING THIS QUIZ!</h1>
                                </div>
                                <h1>You got <?php echo $_GET['score']?> out of <?php echo $_GET['outoftotal']?>! To "win" the following quiz please retake the quiz until you recive a 50% score</h1>
                                <div class="result_image">
                                    <?php  
                                        if ( $_GET['score'] > 4 ) { ?>
                                            <h1>YOU HAVE PASS THE TEST</h1>
                                            <img id="final_check_image" src="images/first.png">
                                    <?php  } else { ?>
                                            <h1>YOU HAVE FAIL THE TEST</h1>
                                            <img id="final_check_image" src="images/wrong.jpg">
                                    <?php } ?>
                                </div>
                                <div class="buttons">
                                    <a class="btn btn-primary" href="userindex.php">RETAKE THE QUIZ</a>
                                        <?php  
                                        $row=mysqli_fetch_array($select_query_admin) 
                                        ?>
                                    <a class="btn btn-primary" href="usertable.php?>">VIEW RESULT</a>                            
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->
        </div>
    <!-- /#wrapper -->
    </body>
<?php
include '../includes/footer.php';
?>
</html>
