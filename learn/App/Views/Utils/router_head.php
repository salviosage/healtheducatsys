<?php 
$main_text='';
if(isset($_GET['request']) && $_GET['request']!=''){
    $request=$_GET['request'];
    if($request=='course_listing'){
        $main_text="System Courses";
    }elseif($request=='create_course'){
        $main_text="Create new Course";
    }
}else{
    $main_text="Home Dashboard";
}
?>