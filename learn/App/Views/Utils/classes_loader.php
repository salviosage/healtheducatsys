<?php 
$root_url=$_SERVER['DOCUMENT_ROOT'].'/learn/';
//core modules
require_once $root_url.'App/Core/Database.php';
require_once $root_url.'App/Core/Query.php';
require_once $root_url.'App/Core/Alternate.php';
require_once $root_url.'App/Core/Functions.php';
require_once $root_url.'App/Core/Router.php';

//controllers module
require_once $root_url.'App/Controllers/Tables.php';
require_once $root_url.'App/Controllers/Executor.php';
require_once $root_url.'App/Controllers/Login.php';
require_once $root_url.'App/Controllers/Admin.php';
?>
