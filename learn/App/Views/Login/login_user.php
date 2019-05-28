<?php 
require $_SERVER['DOCUMENT_ROOT']."/lean/learn/App/Views/Utils/classes_loader.php";
if((isset($_POST['email']) && $_POST['email']!='') && (isset($_POST['password']) && $_POST['password']!='')){
	$email=$function->sanitize($_POST['email']);
	$password=$function->sanitize($_POST['password']);

	$login_state=$login->validate_login($email,$password);
	if($login_state){
		//load session data
		$sessionData=$login->session_data($email,$password);
		if(count($sessionData)>0){
			if (session_status() == PHP_SESSION_NONE) {
			    session_start();
			}
			foreach ($sessionData as $key => $value) {
				$_SESSION['user_id']=$value['id'];
				$_SESSION['user_names']=$value['names'];
				$_SESSION['user_type']=$value['user_type'];
			}
			echo "200";
		}else{
			echo "Invalid Credentials.Please check email and Password";
		}
	}else{
		echo "Invalid Credentials.Please check email and Password";
	}
}else{
	echo "500";
}
?>