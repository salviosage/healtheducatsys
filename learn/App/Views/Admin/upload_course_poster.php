<?php
require $_SERVER['DOCUMENT_ROOT'].'/lean/learn/App/Views/Utils/const.php';
require LOADER;
$response=true;
$current_date=$function->getCurrentDate().' '.$function->getCurrentTime();
$valid_extensions=array("jpg","png","gif","jpeg");
if($_FILES["file"]["name"] != '')
{
	$course_id=$function->sanitize($_POST['course_id']);
	$file_name = $_FILES["file"]["name"];
	$tmp_name = $_FILES["file"]['tmp_name'];
	$file_array = explode(".", $file_name);
	$file_extension = end($file_array);
	$location = 'files/' . $file_name;
	$new_name = $file_array[0] . '-'. rand() .rand().'.' . $file_extension;
	$path = ROOT_URL."Courses/" . $new_name;
	if(in_array(strtolower($file_extension), $valid_extensions)){
		if(move_uploaded_file($tmp_name, $path))
		{
			$update_status=$admin->changeFieldValue(Tables::courses(),"path",$new_name,"id",$course_id);
			if($update_status){
				echo "200";
			}else{
				echo "Something Went Wrong While Saving Credit.Please contact System Admin";
			}
		}else{
			echo "Error While Uploading  Please Contact System Administrator.";
		}
	}else{
		echo "Please Images Only are Accepted:jpg,gif,png,jpeg";
	}
}else{
  echo "Please Select Files";
}
?>