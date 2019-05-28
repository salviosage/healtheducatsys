<?php
require $_SERVER['DOCUMENT_ROOT'].'/lean/learn/App/Views/Utils/const.php';
require LOADER;
$response=true;
$current_date=$function->getCurrentDate().' '.$function->getCurrentTime();
if(count($_FILES["file"]["name"]) > 0)
{
	//$output = '';
	$course_id=$function->sanitize($_POST['course_id']);
	$credit_title=$function->sanitize($_POST['credit_title']);
	$credit_summary=htmlspecialchars($_POST['credit_summary']);
	$credit_type=$function->sanitize($_POST['credit_type']);
	$video_url=$function->sanitize($_POST['video_url']);
	// echo $video_url;
	// die();
	for($count=0; $count<count($_FILES["file"]["name"]); $count++)
	{
		$file_name = $_FILES["file"]["name"][$count];
		$tmp_name = $_FILES["file"]['tmp_name'][$count];
		$file_array = explode(".", $file_name);
		$file_extension = end($file_array);
		$location = 'files/' . $file_name;
		$new_name = $file_array[0] . '-'. rand() .rand().'.' . $file_extension;
		$path = ROOT_URL."Uploads/" . $new_name;
		if(move_uploaded_file($tmp_name, $path))
		{
			$save_credit=$admin->saveCourseCredits($course_id,USER_ID,$credit_title,$credit_summary,$new_name,$current_date,$credit_type,$video_url);
			if($save_credit){
				echo "200";
			}else{
				echo "Something Went Wrong While Saving Credit.Please contact System Admin";
			}
		}else{
		echo "Error While Uploading  Please Contact System Administrator.";
		}
	}
}else{
  echo "Please Select Files";
}
?>