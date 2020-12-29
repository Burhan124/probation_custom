<?php
include '../includes/header.php';
include 'addquizquery.php';
$select_query = "SELECT * FROM `qustion_answer` WHERE `quizs_id` = $_GET[id]";
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
                    <a href="userindex.php" class="active"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                </li>
                <li>
                    <a href="usertables.php"><i class="fa fa-table fa-fw"></i> Tables</a>
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
                <form method="post" id="qustion_form">
                    <div class="col-lg-8">
                        <input type="hidden" name="score" value=0 id="incriment">
                        <input type="hidden" name="quiz_id" value="<?php echo $_GET["id"]; ?>">
                        <?php
                        $question_no = 0;
                        if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                        ?>
                        <div class="<?php echo ($question_no == 0 )? 'active' : 'deactive'; ?>">
                            <div class="qustion_sec">
                                <h1>Qustion No: <?= $question_no + 1 ; ?></h1>
                                <h1><?= $row['qustion']; ?></h1>
                            </div>
                            <div class="answer_sec">
                                <label class="answer_lable">Option One: <?= $row['option_1']; ?>
                                    <input type="radio" name="radio<?= $question_no; ?>" class="quiz_option" value="<?= $row['option_1']; ?>">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="answer_lable">Option Two: <?= $row['option_2']; ?>
                                    <input type="radio" name="radio<?= $question_no; ?>" class="quiz_option" value="<?= $row['option_2']; ?>">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="answer_lable">Option Three: <?= $row['option_3']; ?>
                                    <input type="radio" name="radio<?= $question_no; ?>" class="quiz_option" value="<?= $row['option_3']; ?>">
                                    <span class="checkmark"></span>
                                </label>
                                <input type="hidden" name="correct_answer" value="<?= $row['correct_answer']; ?>">
                                <input type="hidden" name="qustion_ids[]" value="<?= $row['qust_id']; ?>">
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
                        <div class="next_button">
                            <button disabled="disabled" name="next_btn_quiz" type="button" id="next-q" class="btn btn-default">Next</button>
                            <input style="display: none;" disabled="disabled" type="submit" name="qust_btn" class="btn btn-default insert_select" id="sbmit_qust_btn">
                            <input type="hidden" name="action" value="submit_quiz">
                            <input type="hidden" name="" class="subb_btn" id="">
                        </div>
                        <input type="hidden" name="totalqustion" value="<?php echo $question_no ?>" id="tot_qustion">
                    </div>
                    <div class="col-lg-4">
                        <img id="check_image" src="images/first.png">
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