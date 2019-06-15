<?php 
require 'const.php';
require AUTH_URL;
define("USER_NAMES", $_SESSION['user_names']);
define("USER_ID", $_SESSION['user_id']);
define("USER_TYPE", $_SESSION['user_type']);
if($_SESSION['user_type']!=2){
  backHome();
}
function backHome(){
  ?>
  <script type="text/javascript">window.location='index';</script>
  <?php
}
//get user information
$personalInfo=$user->getUserPersonalInfo(USER_ID);
?>
<!DOCTYPE html>
<html lang="en">
  

<head>
    <meta charset="UTF-8">
    
    <!-- Title-->
    <title><?php echo USER_NAMES; ?> profile| <?php echo APP_NAME; ?></title>
    
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
    <?php include VIEWS.'Utils/unverified_teacher.php' ?>
    <?php //include PROFILE.'teacher_bread.php'; ?>
  <section class="paddingTop-50 paddingBottom-120 bg-light">
    <div class="container">
      <div class="row">
        <?php //include PROFILE.'teacher_leftpanel.php'; ?>
        <div class="col-lg-8 mt-4">
          <div class="card shadow-v1 padding-30">
            <ul class="nav tab-line tab-line border-bottom mb-4" role="tablist">
             <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#Tabs_1-1" role="tab" aria-selected="true">
                About
              </a>
             </li>
             <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#Tabs_1-2" role="tab" aria-selected="true">
                Courses
              </a>
             </li>
             <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#Tabs_1-3" role="tab" aria-selected="true">
                Reviews
              </a>
             </li>
             <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#Tabs_1-4" role="tab" aria-selected="true">
                Message
              </a>
             </li>
             <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#Tabs_1-5" role="tab" aria-selected="true">
                Settings
              </a>
             </li>
           </ul>
           
            <div class="tab-content">
              <?php include PROFILE.'settings_tab.php'; ?>
            </div> <!-- END tab-content-->
          </div> <!-- END card-->
        </div> <!-- END col-md-8 -->
      </div> <!--END row-->
    </div> <!--END container-->
  </section>
  <?php include FOOTER; ?>
  <div class="scroll-top">
    <i class="ti-angle-up"></i>
  </div>
<?php include SCRIPT; ?>
  </body>
</html>