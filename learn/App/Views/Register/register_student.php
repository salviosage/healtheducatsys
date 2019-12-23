<?php 
require $_SERVER['DOCUMENT_ROOT'].'/lean/learn/App/Views/Utils/constants.php';
require LOADER;
if(isset($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['user_email'])){
	$first_name=$function->sanitize($_POST['first_name']);
	$last_name=$function->sanitize($_POST['last_name']);
	$user_email=$function->sanitize($_POST['user_email']);
	$user_profession=$function->sanitize($_POST['user_profession']);
	$user_degree=$function->sanitize($_POST['user_degree']);
	$user_phone=$function->sanitize($_POST['user_phone']);
	$user_country=$function->sanitize($_POST['user_country']);
	$user_city=$function->sanitize($_POST['user_city']);
	$user_password=$function->sanitize($_POST['user_password']);
	$confirm_pwd=$function->sanitize($_POST['confirm_pwd']);
	$names=$first_name.' '.$last_name;
	$address=$user_country.' / '.$user_city;
	$token=md5($function->generateHash());
	$query=$admin->checkingemail($user_email);
	
	if($user_password==$confirm_pwd){
	//save student record
	$save_status=$admin->registerStudent($names,$user_email,$user_password,$user_phone,$address,$user_degree,$user_profession,$token);
	if($save_status){
		echo "200";
	}else{
		echo "Something went wrong.Please contact system Admin";
	}
	}else{
		echo "Password do not match.Please try again";
	}
}else{
	echo "Please submit all form element";
}
?>