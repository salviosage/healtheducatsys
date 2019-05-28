<?php 
define("ROOT_URL", $_SERVER['DOCUMENT_ROOT'].'/lean/learn/');
define("LOADER", ROOT_URL.'App/Views/Utils/classes_loader.php');
define("AUTH", ROOT_URL.'App/Views/Utils/auth.php');
define("VIEWS", ROOT_URL.'App/Views/');
define("ADMIN_URL", VIEWS.'Admin/');
define("MEMBER_URL", VIEWS.'Member/');
define("APP_NAME", 'Arums Group');
define("ROUTER_HEAD", ROOT_URL.'App/Views/Utils/router_head.php');
require AUTH;
//user constants
define("USER_NAME", $_SESSION['user_names']);
define("USER_ID", $_SESSION['user_id']);
define("USER_TYPE", $_SESSION['user_type']);
define('PROFILES_PATH', ROOT_URL.'Uploads/Profiles/');

?>
