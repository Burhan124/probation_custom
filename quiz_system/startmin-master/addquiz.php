<?php
include '../includes/header.php';
include 'addquizquery.php';
?>
<body>
    <div id="wrapper">
        <!-- Navigation -->
    </ul>      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" href="index.php">QUIZ SYSTEM</a>
    </div>
    <!--
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </button> -->
    <ul class="nav navbar-right navbar-top-links">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <?php echo"Admin: ".$_SESSION['admin']; ?> <b class="caret"></b>
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
                    <a href="index.php" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href="addquiz.php"><i class="fa fa-pencil" aria-hidden="true"></i> Add Quiz</a>
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
                <h1 class="page-header">ADD QUIZ</h1>
            </div>
            <form method="post" class="add_quiz" enctype="multipart/form-data">
                <div class="col-lg-12">
                    <div class="quiz_fields">
                        <div class="quiz_tm">
                            <div class="col-lg-6">
                                <label class="field_name"> Quiz Tital :
                                    <input type="text" name="quiztitle">
                                </label>
                            </div>
                            <div class="col-lg-6">
                                <label class="field_name"> Quiz Marks :
                                    <input type="text" name="quizmarks">
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <label class="field_name"> Quiz Tital Image :
                                <input type="file" name="fileToUpload" id="fileToUpload">
                            </label>
                        </div>
                        <div class="quiz_main">
                            <div class="quiz_inner">
                                <div class="col-lg-12">
                                    <label class="field_name"> Qustion :
                                        <input type="text" name="qustion[]">
                                    </label>
                                </div>
                                <div class="col-lg-6">
                                    <label class="field_name"> Option 1:
                                        <input type="text" name="option_1[]">
                                    </label>
                                </div>
                                <div class="col-lg-6">
                                    <label class="field_name"> Option 2:
                                        <input type="text" name="option_2[]">
                                    </label>
                                </div>
                                <div class="col-lg-6">
                                    <label class="field_name"> Option 3:
                                        <input type="text" name="option_3[]">
                                    </label>
                                </div>
                                <div class="col-lg-6">
                                    <label class="field_name"> Correct Answer:
                                        <input type="text" name="correct_answer[]">
                                    </label>
                                </div>
                                <div class="col-lg-12 buttons button_flex">
                                    <button type="button" class="add-quiz-q">Add More</button>
                                    <button type="button" class="remove-quiz-q" style="display: none;">Remove</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 buttons">
                    <input type="submit" name="qustion_btn" value="Submit" class="quiz_submit_btn">
                </div>
            </form>
            <!-- /.col-lg-12 -->
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