<?php 
require $_SERVER['DOCUMENT_ROOT'].'/lean/learn/App/Views/Utils/constants.php';
require LOADER;
if((isset($_POST['first_name']) && !empty($_POST['first_name'])) && (isset($_POST['email']) && !empty($_POST['email']))){
	$first_name=$function->sanitize($_POST['first_name']);
	$last_name=$function->sanitize($_POST['last_name']);
	$profession=$function->sanitize($_POST['user_profession']);
	$degree=$function->sanitize($_POST['user_degree']);
	$email=$function->sanitize($_POST['email']);
	$phone=$function->sanitize($_POST['phone']);
	$country=$function->sanitize($_POST['country']);
	$city=$function->sanitize($_POST['city']);
	$password=$function->sanitize($_POST['password']);
	$confirm_pwd=$function->sanitize($_POST['confirm_pwd']);
	$names=$first_name.' '.$last_name;
	$address=$country.' / '.$city;
	$token=md5($function->generateHash());
	if($password==$confirm_pwd){
		//save teacher record
		$save_status=$admin->registerTeacher($names,$email,$password,$phone,$address,$degree,$profession,$token);
		if($save_status){
			echo "200";
		}else{
			echo "Something went wrong.Please contact system Admin";
		}
	}else{
		echo "Password do not match.Please try again";
	}
}else{
	echo "Please Submit all form data";
}
?>