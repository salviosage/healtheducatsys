<?php 
define("CONSTANTS", $_SERVER['DOCUMENT_ROOT'].'lean/learn/App/Views/Utils/const.php');
require CONSTANTS;
require LOADER;

$is_requested=$admin->isRequestedApproved(7,4);
if($is_requested){
	echo "Requested";
}else{
	echo "Not Requested";
}
?>