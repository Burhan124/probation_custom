<?php
include '../includes/header.php';
$select_query = "SELECT * FROM `qustion_answer` WHERE `quizs_id` = $_GET[id]";
$select_query_one = "SELECT quiz.quiz_title, quiz.quiz_marks FROM `qustion_answer` INNER JOIN quiz ON qustion_answer.quizs_id = quiz.quiz_id WHERE quiz.quiz_id = $_GET[id] GROUP BY quiz_title
";
$result = $connection->query($select_query);
$resultOne = $connection->query($select_query_one);
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
                <i class="fa fa-user fa-fw"></i> <?php echo"Admin ".$_SESSION['admin']; ?> <b class="caret"></b>
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
                    <a href="index.php" class="active"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                </li>
                <li>
                    <a href="addquiz.php"><i class="fa fa-pencil" aria-hidden="true"></i>Add Quiz</a>
                </li>
                <li>
                    <a href="tables.php"><i class="fa fa-table fa-fw"></i> Tables</a>
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
             <form method="post" class="add_quiz">
                <div class="col-lg-12">
                    <div class="quiz_fields">
                        <div class="quiz_tm">
                            <?php  $rowone = mysqli_fetch_array($resultOne);?>
                            <div class="col-lg-6">
                                <label class="field_name"> Quiz Tital
                                    <input type="text" name="quiztitle" value="<?= $rowone['quiz_title'] ?>">
                                </label>
                            </div>
                            <div class="col-lg-6">
                                <label class="field_name"> Quiz Marks
                                    <input type="text" name="quizmarks" value="<?= $rowone['quiz_marks'] ?>">
                                </label>
                            </div>
                        </div>
                        <div class="quiz_main">
                            <?php
                            $question_no = 0;
                            if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_array($result)) {
                            ?>
                            <div class="quiz_inner">
                                <div class="col-lg-12">
                                    <label class="field_name"> <h1>Qustion No: <?= $question_no + 1 ; ?></h1>
                                        <input type="text" name="qustion" value="<?= $row['qustion'] ?>">
                                    </label>
                                </div>
                                <div class="col-lg-6">
                                    <label class="field_name"> Option 1:
                                        <input type="text" name="option_1" value="<?= $row['option_1']; ?>">
                                    </label>
                                </div>
                                <div class="col-lg-6">
                                    <label class="field_name"> Option 2:
                                        <input type="text" name="option_2" value="<?= $row['option_2']; ?>">
                                    </label>
                                </div>
                                <div class="col-lg-6">
                                    <label class="field_name"> Option 3:
                                        <input type="text" name="option_3" value="<?= $row['option_2']; ?>">
                                    </label>
                                </div>
                                <div class="col-lg-6">
                                    <label class="field_name"> Correct Answer:
                                        <input type="text" name="correct_answer" value="<?= $row['correct_answer']; ?>">
                                    </label>
                                </div>
                            </div>
                            <?php
                            $question_no++;
                            }
                            }
                            else {
                            echo "0 results";
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 buttons">
                    <input type="submit" name="qustion_btn" value="Submit" class="quiz_submit_btn">
                </div>
            </form>
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