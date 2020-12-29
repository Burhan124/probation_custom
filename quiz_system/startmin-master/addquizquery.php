<?php
include '../Connectiondb/connection.php';
error_reporting(0);
session_start();
/************ INSERT QUIZ INTO DATA BASE ***************/

if(isset($_POST['qustion_btn'])) {
$quiz_title = $_POST['quiztitle'];
$quiz_marks = $_POST['quizmarks'];
$target_dir = "images/";
$image_name = rand(2,999).$_FILES["fileToUpload"]["name"];
$target_file = $target_dir . $image_name;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

	$insert_qustion = "INSERT INTO quiz (quiz_title, quiz_marks, image) VALUES ('$quiz_title', '$quiz_marks', '$image_name')";
// $result = mysqli_query($connection,$insert_qustion);
	if ($connection->query($insert_qustion)) {
	  $last_id = $connection->insert_id;
	      echo "Insert Done";
	}
    else {
      echo "Error";
    }

} else {
    echo "Sorry, there was an error uploading your file.";
}

}

/************ INSERT QUIZ INTO DATA BASE ***************/

if(isset($_POST['qustion_btn'])) {
$qustion = $_POST['qustion'];
$option_1 = $_POST['option_1'];
$option_2 = $_POST['option_2'];
$option_3 = $_POST['option_3'];
$correct_answer = $_POST['correct_answer'];

foreach ($qustion as $key => $value) { 
$qustion_query = "INSERT INTO qustion_answer (qustion, quizs_id, option_1, option_2, option_3, correct_answer) VALUES ('$qustion[$key]','$last_id', '$option_1[$key]', '$option_2[$key]', '$option_3[$key]', '$correct_answer[$key]')";
header('location:index.php');
if ($connection->query($qustion_query)) {
      echo "Insert Done";
}
    else {
      echo "Error";
    }
}
}

if (isset($_POST['action'])) {
$quiz_id = $_POST['quiz_id'];
$score = $_POST['score'];
$total_marks = $_POST['totalqustion'];
$q_id_array = $_POST['qustion_ids'];
$user_id = $_SESSION['user_id'];
$status = 'pass';
if ($score < 5 ) {
  $status = 'fail';
}
  foreach ($q_id_array as $index => $ques_id) {
  $selected_radio = "radio".$index;
  $selected_option = $_POST[$selected_radio];
      $insert_selected_option = "INSERT INTO report (quiz_id_sc, qustion_id, selected_option, score, status, total_marks, user_id) 
                VALUES ($quiz_id, $ques_id, '$selected_option', $score, '$status', $total_marks, $user_id)";
      $result = $connection->query($insert_selected_option);
  }
   if ($result == True ) {
      $response['status'] = true;
   }
   else{
      $response['status'] = false;
   }
      return response_json($result);
}
function response_json($data){
  echo json_encode($data);
  exit();  
}

/************ REGISTRATION FORM END ***************/

?>