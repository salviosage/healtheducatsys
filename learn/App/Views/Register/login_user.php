<?php 
require $_SERVER['DOCUMENT_ROOT'].'/lean/learn/App/Views/Utils/constants.php';
require LOADER;
if(isset($_POST['user_email']) && !empty($_POST['user_password'])){
	$user_email=$function->sanitize($_POST['user_email']);
	$user_password=$function->sanitize($_POST['user_password']);

	$login_state=$login->validate_login($user_email,$user_password);
	if($login_state){
		//load session data
		$sessionData=$login->session_data($user_email,$user_password);
		if(count($sessionData)>0){
			if (session_status() == PHP_SESSION_NONE) {
			    session_start();
			}
			foreach ($sessionData as $key => $value) {
				$_SESSION['user_id']=$value['id'];
				$_SESSION['user_names']=$value['names'];
				$_SESSION['user_type']=$value['user_type'];
				$_SESSION['user_mail']=$user_mail;
			}
			echo "200";
		}else{
			echo "Invalid Credentials.Please check email and Password";
		}
	}else{
		echo "Invalid Credentials.Please check email and Password";
	}
}else{
	echo "Please submit all form element";
}
?>