<?php 
define("SERVER_URL", $_SERVER['DOCUMENT_ROOT'].'/lean/');
define("DASHBOARD", SERVER_URL.'learn/');
define("AUTH_URL", DASHBOARD.'App/Views/Utils/auth.php');
define("LOADER", DASHBOARD.'App/Views/Utils/classes_loader.php');
define("APP_URL", $_SERVER['DOCUMENT_ROOT'].'/lean/learn/App/Views/Utils/classes_loader.php');
define("ROOT_URL", $_SERVER['DOCUMENT_ROOT'].'/lean/');
define("VIEWS", ROOT_URL."App/Views/");
define("PROFILE", VIEWS.'Profile/');
define("PROFILE_BREAD", PROFILE.'breadcumb.php');
define("UTILS", VIEWS."Utils/");
define("HEADER",UTILS."header.php");
define("STYLES",UTILS."styles.php");
define("SCRIPT",UTILS."script.php");
define("DIV_LOADER", UTILS."div_loader.php");
define("APP", ROOT_URL.'App/');
define("REGISTER", VIEWS."Register/");
define("STUDENT_REG", REGISTER.'/student_reg.php');
define("USER_LOGIN", REGISTER.'user_login.php');
define('APP_NAME', 'Top Upgrade');

require APP_URL;
?>