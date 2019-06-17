<?php 
define("CONSTANTS", $_SERVER['DOCUMENT_ROOT'].'lean/learn/App/Views/Utils/const.php');
require CONSTANTS;
require LOADER;
$course_token=md5($function->generateHash());
$title="Course";
$price="5000";
$teacher="4";
$summary="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
$current_date=$function->getCurrentDate();
$save_status=$admin->saveCourse($title,$price,$teacher,$summary,$current_date,$course_token);
var_dump($save_status);
?>
