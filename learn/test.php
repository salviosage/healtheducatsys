<?php 
define("CONSTANTS", $_SERVER['DOCUMENT_ROOT'].'lean/learn/App/Views/Utils/const.php');
require CONSTANTS;
require LOADER;

echo $admin->getPublicMessage("READ",0);
?>