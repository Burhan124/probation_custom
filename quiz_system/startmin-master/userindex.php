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
                                <a href="usertable.php"><i class="fa fa-table fa-fw"></i> Tables</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Dashboard</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                        <div class="col-lg-12">
                            <?php  
                                while ($row=mysqli_fetch_array($select_query_admin)) {
                                    $quiz_title = $row['quiz_title'];
                                    $quiz_marks = $row['quiz_marks'];
                                    $quiz_date = $row['quiz_date'];
                                    $image = $row['image'];
                            ?>
                            <div class="col-lg-4">
                                <div class="quiz_sec">
                                    <div class="quiz_image">
                                        <img src="images/<?php echo $image ?>">
                                    </div>
                                    <div class="quiz_detail">
                                        <h1>QUIZ TITLE: <?php echo $quiz_title; ?></h1>
                                        <h2>QUIZ DATE: <?php echo $quiz_date; ?></h2>
                                        <h3>QUIZ MARKS: <?php echo $quiz_marks; ?></h3>
                                    </div>
                                    <div class="quiz_select_btn">
                                        <a href="userqustion.php?id=<?php echo $row['quiz_id']; ?>" class="btn btn-primary">Select</a>
                                    </div>
                                </div>
                            </div>
                            <?php  
                                }
                            ?>
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
