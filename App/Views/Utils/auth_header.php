<?php
$email=$function->extract_array($personalInfo,"email");
$names=$function->extract_array($personalInfo,"names");
$phone=$function->extract_array($personalInfo,"phone");
$address=$function->extract_array($personalInfo,"address");
$profile_image=$function->extract_array($personalInfo,"profile_image");

$profession_id=$function->extract_array($personalInfo,"profession");
$profession_array=$user->getUserProffession($profession_id);
$profession=$function->extract_array($profession_array,"name");
?>
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
      <a class="logo-default" href="index.html"><img alt="" src="assets/img/logo-white.png"></a>
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
          <a href="login.html" class=" btn btn-primary mt-3 mx-2 animated slideInUp">All Courses</a>
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
        
        <li class="nav-item">
          
                  <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false">
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
                 <div class="dropdown-menu">
                   <a class="dropdown-item" href="#">
                    <i class="ti-user mr-2"></i>
                    <span class="mr-2">
                      My profile
                    </span>
                   </a>
                   <a class="dropdown-item" href="#">
                    <i class="ti-email mr-2"></i>
                    <span class="mr-2">Message</span>
                    <span class="badge badge-success ml-auto">78</span>
                   </a>
                   <a class="dropdown-item" href="#">
                    <i class="ti-settings mr-2"></i>
                    <span class="mr-2">Another Action</span>
                    <span class="badge badge-success ml-auto">27</span>
                   </a>
                   <div class="dropdown-divider"></div>
                   <a class="dropdown-item" href="#">
                    <i class="ti-back-left mr-2"></i>
                    <span class="mr-2">Logout</span>
                   </a>
                 </div>
              
          
      </li>
      <li class="nav-item ">
          <a href="logoff" class="btn btn-primary mt-3 mx-2 animated slideInUp">LOG OUT</a>
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