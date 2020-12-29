<?php  
include '../includes/header.php';
$select_query = mysqli_query($connection,"SELECT quiz.quiz_title, quiz.quiz_id, report.report_date FROM `report` 
INNER JOIN qustion_answer ON qustion_answer.qust_id = report.qustion_id 
INNER JOIN quiz ON quiz.quiz_id = report.quiz_id_sc
WHERE report.user_id = $_SESSION[user_id] GROUP BY report.report_date")
?>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">QUIZ SYSTEM</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> <?php echo"User ".$_SESSION['user']; ?> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="../logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li>
                                <a href="userindex.php"><i class="fa fa-dashboard fa-fw"></i>User Dashboard</a>
                            </li>
                            <li>
                                <a href="usertable.php"><i class="fa fa-table fa-fw"></i> Tables</a>
                            </li>
                        </ul>
                                <!-- /.nav-second-level -->
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Tables</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    ATTAMPT QUIZ
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>QUIZ TITAL</th>
                                                    <th>DATE</th>
                                                    <th>VIEW</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php while ($row=mysqli_fetch_array($select_query)) {?>
                                                <tr class="odd gradeX">
                                                    <td><?= $row['quiz_id']; ?></td>
                                                    <td><?= $row['quiz_title']; ?></td>
                                                    <td><?= $row['report_date']; ?></td>
                                                    <td><a href="checkresult.php?date=<?php echo $row['report_date']; ?>">VIEW</a></td>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.panel-body -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
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
