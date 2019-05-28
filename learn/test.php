<?php 
define("CONSTANTS", $_SERVER['DOCUMENT_ROOT'].'/learn/App/Views/Utils/const.php');
require CONSTANTS;
require LOADER;

$teachers=$admin->loadUsers(2,1);
var_dump($teachers);
?>