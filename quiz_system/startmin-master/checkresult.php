<?php 
include '../includes/header.php';
$select_query = "SELECT report.selected_option, qustion_answer.correct_answer, qustion_answer.qustion FROM `report` INNER JOIN qustion_answer ON qustion_answer.qust_id = report.qustion_id INNER JOIN quiz ON quiz.quiz_id = report.quiz_id_sc WHERE report.report_date = '$_GET[date]' GROUP BY qustion_answer.qustion ORDER BY qustion_answer.qust_id ASC";
$result = $connection->query($select_query);
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
                                    <h1>YOUT RESULT</h1>
                                    <h1>HIGHLIGHTED SELECTED RED ARE WORONG AND GREEN ARE RIGHT</h1>
                                </div>
                            <div class="col-lg-12">
                            <div class="panel panel-default result_page">
                                <div class="panel-heading">
                                    RESULT
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">  
                                            <thead>
                                                <tr>
                                                    <th>Quistion</th>
                                                    <th>Correct Option</th>
                                                    <th>Selected Option</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php while($row = $result->fetch_assoc()) { 
                                        if ($row['correct_answer'] == $row['selected_option']) { ?>
                                                <tr style="background-color:#00800070;" class="odd gradeX">
                                                    <td><?= $row['qustion']; ?></td>
                                                    <td><?= $row['correct_answer']; ?></td>
                                                    <td><?= $row['selected_option']; ?></td>
                                                </tr>
                                                <?php }
                                                else  {
                                                ?>
                                                  <tr style="background-color:#ff000096;" class="odd gradeX">
                                                    <td><?= $row['qustion']; ?></td>
                                                    <td><?= $row['correct_answer']; ?></td>
                                                    <td><?= $row['selected_option']; ?></td>
                                                </tr>
                                                <?php  
                                                } } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.panel-body -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                                <div class="buttons">
                                    <a class="btn btn-primary" href="userindex.php" >RETAKE THE QUIZ</a>                           
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
