<?php 
require 'const.php';
require AUTH_URL;
require LOADER;
define("USER_NAMES", $_SESSION['user_names']);
define("USER_ID", $_SESSION['user_id']);
define("USER_TYPE", $_SESSION['user_type']);
if($_SESSION['user_type']!=3 && $_SESSION['user_type']!=2){
  backHome();
}else{
  if($_SESSION['user_type']==2){
    ?>
     <script type="text/javascript">window.location="instructor";</script>
    <?php
  }
}
function backHome(){
  ?>
  <script type="text/javascript">window.location='index';</script>
  <?php
}
// //get user information
$personalInfo=$user->getUserPersonalInfo(USER_ID);
?>
<!DOCTYPE html>
<html lang="en">
  

<head>
    <meta charset="UTF-8">
    
    <!-- Title-->
   <title><?php echo USER_NAMES; ?> Courses Dashboard| <?php echo APP_NAME; ?></title>
    
    <!-- SEO Meta-->
    <meta name="description" content="Digital innovation art ">
    <meta name="keywords" content="HTML5 , responsive HTML5 , bootstrap 4, Clean ">
    <meta name="author" content="jean salvi">
    
    <!-- viewport scale-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <?php include STYLES; ?>  
    
  </head>
  
  <body>
    <?php include VIEWS.'Utils/auth_header.php'; ?> 
     <?php include PROFILE_BREAD; ?> 
   
          
<section class="paddingTop-50 paddingBottom-100 bg-light-v2">
  <div class="container">
      <h4>
          your Activities
        </h4>
    <div class="row">      
      <?php
       if(isset($_GET['request']) && $_GET['request']!=''){
        $request=$_GET['request'];
        if($request=='my_certificates'){
          include VIEWS.'Dashboard/my_certificates.php';
        }else{
          include VIEWS.'Dashboard/my_courses.php'; 
        }
       }else{
         include VIEWS.'Dashboard/my_courses.php'; 
       }
      ?>
    </div> <!-- END row-->
  </div> <!-- END container-->
</section> 
<?php include FOOTER; ?>
<div class="scroll-top">
  <i class="ti-angle-up"></i>
</div>
<?php include SCRIPT; ?>
</body>
</html>