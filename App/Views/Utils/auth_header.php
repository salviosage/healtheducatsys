<?php
$personalInfo=$user->getUserPersonalInfo(USER_ID);
$email=$function->extract_array($personalInfo,"email");
$names=$function->extract_array($personalInfo,"names");
$phone=$function->extract_array($personalInfo,"phone");
$address=$function->extract_array($personalInfo,"address");
$profile_image=$function->extract_array($personalInfo,"profile_image");

$profession_id=$function->extract_array($personalInfo,"profession");
$profession_array=$user->getUserProffession($profession_id);
$profession=$function->extract_array($profession_array,"name");
$profile_url='';
if(USER_TYPE==2){
  $profile_url="instructor";
}elseif(USER_TYPE==3){
  $profile_url="student";
}
?>
<script type="text/javascript">
  const logged_in="<?php echo USER_ID; ?>";
</script>
<header class="site-header bg-dark text-white-0_5">        
  <div class="container">
    <div class="row align-items-center justify-content-between mx-0">
      <ul class="list-inline d-none d-lg-block mb-0">
        <li class="list-inline-item mr-3">
         <div class="d-flex align-items-center">
          <i class="ti-email mr-2"></i>
          <a href="mailto:support@educati.com">
              topupgradeltd@gmail.com</a>
         </div>
        </li>
        <li class="list-inline-item mr-3">
         <div class="d-flex align-items-center">
          <i class="ti-headphone mr-2"></i>
          <a href="tel:+8801740411513">(+250) 789044439</a>
         </div>
        </li>
      </ul>
      <ul class="list-inline mb-0">
        <li class="list-inline-item mr-0 p-3 border-right border-left border-white-0_1">
          <a href="#"><i class="ti-facebook"></i></a>
        </li>
        <li class="list-inline-item mr-0 p-3 border-right border-white-0_1">
          <a href="#"><i class="ti-twitter"></i></a>
        </li>
        <li class="list-inline-item mr-0 p-3 border-right border-white-0_1">
          <a href="#"><i class="ti-vimeo"></i></a>
        </li>
        <li class="list-inline-item mr-0 p-3 border-right border-white-0_1">
          <a href="#"><i class="ti-linkedin"></i></a>
        </li>
      </ul>
      
    </div> <!-- END END row-->
  </div> <!-- END container-->
</header>
<nav class="ec-nav sticky-top bg-white">
<div class="container">
  <div class="navbar p-0 navbar-expand-lg">
    <div class="navbar-brand">
      <a class="logo-default" href="home"><img alt="" src="assets/img/logo-white.png"></a>
    </div>
    <span aria-expanded="false" class="navbar-toggler ml-auto collapsed" data-target="#ec-nav__collapsible" data-toggle="collapse">
      <div class="hamburger hamburger--spin js-hamburger">
        <div class="hamburger-box">
          <div class="hamburger-inner"></div>
        </div>
      </div>
    </span>
    <div class="collapse navbar-collapse when-collapsed" id="ec-nav__collapsible">
      <ul class="nav navbar-nav ec-nav__navbar ml-auto">


        <li class="nav-item ">
          <a href="courses" class=" btn btn-primary mt-3 mx-2 animated slideInUp">All Courses</a>
        </li>

          <li class="nav-item ">
              <a class="nav-link" href="about">About</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="faq"> FAQs </a>
          </li>
          <li class="nav-item ">
           <a class="nav-link" href="contact">Contact</a>
        </li>
        <li class="nav-item nav-item__has-dropdown">
            <a class="nav-link dropdown-toggle" href="<?php echo $profile_url; ?>" data-toggle="dropdown"> 
                 <span>
                   <?php echo USER_NAMES; ?>
                 </span>
                  <?php 
                  if($profile_image!=''){
                    ?>
                    <img class="iconbox iconbox-sm mx-1" src="learn/Uploads/Profiles/<?php echo $profile_image; ?>" alt="">
                    <?php
                  }
                  ?>
            </a>
            <ul class="dropdown-menu">
                <li>
                  <?php 
                    if(USER_TYPE==2){
                      ?>
                        <a href="learn/index" class="nav-link__list" target="_blank">
                          <span class="mr-2">
                          <i class="fa fa-file-pdf"></i> Courses Dashboard
                        </span>
                        </a>
                      <?php
                    }elseif(USER_TYPE==3){
                      ?>
                        <a href="dashboard" class="nav-link__list"><span class="mr-2">
                          My Courses
                        </span>
                        </a>

                      <?php
                    }
                  ?>
                </li>
                <?php 
                if(USER_TYPE==3){
                  ?>
                  <li>
                    <a href="student" class="nav-link__list">
                        <span class="mr-2">Profile Settings</span>
                    </a>
                  </li>
                  <?php
                }
                ?>
              <li><a href="" class="nav-link__list"><span class="mr-2">Notifications</span>
                <span class="badge badge-success ml-auto">78</span></a></li>
              <li><a href="logoff" class="nav-link__list"><span class="mr-2">Logout</span></a></li>
              
            </ul>
        </li>
      <li class="nav-item">
          <a class=" btn  mt-3 mx-2  slideInUp site-search-toggler" href="#">
            <i class="ti-search"></i>
          </a>
        </li>
      
      </ul>
    </div>
    	
  </div>
</div> <!-- END container-->		
</nav>
<div class="site-search">
 <div class="site-search__close bg-black-0_8"></div>
 <form class="form-site-search" action="#" method="POST">
  <div class="input-group">
    <input type="text" placeholder="Search" class="form-control py-3 border-white" required="">
    <div class="input-group-append">
      <button class="btn btn-primary" type="submit"><i class="ti-search"></i></button>
    </div>
  </div>
 </form> 
</div>