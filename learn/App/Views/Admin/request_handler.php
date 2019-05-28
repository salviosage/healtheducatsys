<?php 
require $_SERVER['DOCUMENT_ROOT'].'/lean/learn/App/Views/Utils/const.php';
require LOADER;
$success="200";
$error="500";
$current_date=$function->getCurrentDate().' '.$function->getCurrentTime();
$current_time=$function->getCurrentTime();
if(isset($_POST['input'])){
	if(is_array($_POST['input'])){
		$input=$_POST['input'];
		//get action
		$action=$function->sanitize($input[0]);
		if($action=='save_course'){
			$title=$function->sanitize($input[1]);
			$price=$function->sanitize($input[2]);
			$teacher=$function->sanitize($input[3]);
			$summary=htmlspecialchars($input[4]);
			$course_token=md5($function->generateHash());
			$save_status=$admin->saveCourse($title,$price,$teacher,$summary,$current_date,$course_token);
			if($save_status){
				echo $success;
			}else{
				echo $error;
			}
		}elseif($action=='save_quiz'){
			$credit_id=$function->sanitize($input[1]);
			$quiz_title=$function->sanitize($input[2]);
			$quiz_summary=htmlspecialchars($input[3]);
			$save_status=$admin->saveQuiz($credit_id,$quiz_title,$quiz_summary,$current_date);
			if($save_status){
				echo $success;
			}else{
				echo $error;
			}
		}elseif($action=='save_question'){
			$question=$function->sanitize($input[1]);
			$answer1=$function->sanitize($input[2]);
			$answer2=$function->sanitize($input[3]);
			$answer3=$function->sanitize($input[4]);
			$answer4=$function->sanitize($input[5]);
			$answer5=$function->sanitize($input[6]);
			$quiz_id=$function->sanitize($input[7]);
			$save_status=$admin->saveQuestion($quiz_id,$question,$answer1,$answer2,$answer3,$answer4,$answer5,$current_date);
			if($save_status){
				echo $success;
			}else{
				echo $error;
			}
		}elseif($action=='correct_answer'){
			$field_name=$function->sanitize($input[1]);
			$question_id=$function->sanitize($input[2]);
			$update_status=$admin->correctAnswer($question_id,$field_name);
			if($update_status){
				echo $success;
			}else{
				echo $error;
			}
		}elseif($action=='create_teacher'){
			$inst_names=$function->sanitize($input[1]);
			$inst_mail=$function->sanitize($input[2]);
			$inst_phone=$function->sanitize($input[3]);
			$inst_status=$function->sanitize($input[4]);
			$save_status=$admin->saveTeacher($inst_names,$inst_mail,$inst_phone,$inst_status);
			if($save_status){
				echo $success;
			}else{
				echo $error;
			}
		}
	}else{
		echo '500';
	}
}else{
	echo "500";
}
?>