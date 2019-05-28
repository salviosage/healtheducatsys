<?php 
require $_SERVER['DOCUMENT_ROOT'].'/lean/learn/App/Views/Utils/const.php';
require LOADER;
if($_FILES["file"]["name"] != ''){
 $test = explode('.', $_FILES["file"]["name"]);
 $ext = end($test);
 $name = md5(rand(1000, 99999)) . '.' . $ext;
 $location = PROFILES_PATH . $name;
 if(move_uploaded_file($_FILES["file"]["tmp_name"], $location)){
 	//save user profile
 	$save_status=$user->updateProfileImage($_SESSION['user_id'],$name);
 	if($save_status){
 		echo "200";
 	}else{
 		echo "Something Went wrong while Saving Image.";
 	}
 }else{
 	echo "Something Went wrong while Uploading Image.";
 }
}else{
	echo "Please select a file";
}
?>