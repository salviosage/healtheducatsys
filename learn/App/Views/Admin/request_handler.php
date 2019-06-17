<?php 
require $_SERVER['DOCUMENT_ROOT'].'/lean/learn/App/Views/Utils/const.php';
require LOADER;
$success="200";
$error="500";
$current_date=$function->getCurrentDate().' '.$function->getCurrentTime();
$current_time=$function->getCurrentTime();
$token=md5($function->generateHash());
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
		}elseif($action=="edit_course"){
			$title=$function->sanitize($input[1]);
			$price=$function->sanitize($input[2]);
			$teacher=$function->sanitize($input[3]);
			$summary=htmlspecialchars($input[4]);
			$course_id=$function->sanitize($input[5]);
			$save_status=$admin->editCourse($course_id,$title,$price,$teacher,$summary,$current_date);
			if($save_status){
				echo $success;
			}else{
				echo $error;
			}
		}
		elseif($action=='save_quiz'){
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
		}elseif($action=="create_user"){
			$names=$function->sanitize($input[1]);
			$email=$function->sanitize($input[2]);
			$phone=$function->sanitize($input[3]);
			$status=$function->sanitize($input[4]);
			$password=$function->sanitize($input[5]);
			$save_status=$admin->saveUser($names,$email,$phone,$password,$status,$token,$current_date);
			if($save_status){
				echo $success;
			}else{
				echo $error;
			}
		}
		elseif($action=='create_teacher'){
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
		}elseif($action=='verify_reg_teacher'){
			$teacher_id=$function->sanitize($input[1]);
			$status=$admin->verifyRegTeacher($teacher_id);
			if($status){
				echo $success;
			}else{
				echo $error;
			}
		}elseif($action=="request_course"){
			$course_id=$function->sanitize($input[1]);
			$student_id=$function->sanitize($input[2]);

			$save_status=$admin->saveStudentCourseRequest($token,$course_id,$student_id,$current_date);
			if($save_status){
				echo $success;
			}else{
				echo $error;
			}
		}elseif($action=="approve_course_request"){
			$request_id=$function->sanitize($input[1]);

			$update_status=$admin->changeFieldValue(Tables::requesting(),"status","APPROVED","id",$request_id);
			if($update_status){
				echo $success;
			}else{
				echo $error;
			}
		}elseif($action=='save_to_learn'){
			$course_id=$function->sanitize($input[1]);
			$to_learn=$function->sanitize($input[2]);

			$save_status=$admin->saveToLearn($token,$course_id,$to_learn,$current_date);
			if($save_status){
				echo $success;
			}else{
				echo $error;
			}
		}elseif($action=='remove_to_learn'){
			$to_learn=$function->sanitize($input[1]);
			$update_status=$admin->changeFieldValue(Tables::to_learn(),"status","DELETED","id",$to_learn);
			if($update_status){
				echo $success;
			}else{
				echo $error;
			}
		}elseif($action=="contact_us"){
			$names=$function->sanitize($input[1]);
			$email=$function->sanitize($input[2]);
			$phone=$function->sanitize($input[3]);
			$message=$function->sanitize($input[4]);

			$save_status=$admin->savePublicMessage($names,$email,$phone,$message,$token,$current_date);
			if($save_status){
				echo "Your Message was sent Successfully we will keep in touch as Soon as Possible";
			}else{
				echo $error;
			}
		}elseif($action=="read_message"){
			$message_id=$function->sanitize($input[1]);
			$update_status=$admin->changeFieldValue(Tables::contact_us(),"status","READ","id",$message_id);
			if($update_status){
				echo $success;
			}else{
				echo $error;
			}
		}elseif($action=="change_password"){
			$current_pwd=$function->sanitize($input[1]);
			$new_pwd=$function->sanitize($input[2]);
			$confirm_pwd=$function->sanitize($input[3]);
			$user_id=$function->sanitize($input[4]);
			//validate current password with user id
			$validate_pwd=$user->validatePwd($user_id,$current_pwd);
			if($validate_pwd){
				//update new password
				if($new_pwd==$confirm_pwd){
					$update_status=$user->updateUserPassword($user_id,$new_pwd,$current_date);
					if($update_status){
						echo "Your Password have been Updated Successfully.Your change will take effect on next login";
					}else{
						echo "Something went wrong Please contact system Administrators";
					}
				}else{
					echo "Entered Password do not Match.Please check new Password and their Confirmation";
				}
			}else{
				echo "Current password is not correct.Please check your Credentials";
			}
		}elseif($action=="changes_user_profile"){
			$user_names=$function->sanitize($input[1]);
			$user_email=$function->sanitize($input[2]);
			$user_phone=$function->sanitize($input[3]);
			$user_address=$function->sanitize($input[4]);
			$user_id=$function->sanitize($input[5]);
			$update_status=$user->updateuserProfile($user_id,$user_names,$user_email,$user_phone,$user_address,$current_date);
			if($update_status){
				echo "Profile Information Updated Successfully";
			}else{
				echo "Something went wrong. Please contact system Administrators";
			}
		}elseif($action=="delete_course"){
			$course_id=$function->sanitize($input[1]);
			$update_status=$admin->changeFieldValue(Tables::courses(),"status","DELETED","id",$course_id);

			if($update_status){
				echo $success;
			}else{
				echo $error;
			}
		}
	}else{
		echo '501';
	}
}else{
	echo "404";
}
?>