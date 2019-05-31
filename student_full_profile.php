<?php 
require 'const.php';
require AUTH_URL;
require LOADER;
define("USER_NAMES", $_SESSION['user_names']);
define("USER_ID", $_SESSION['user_id']);
define("USER_TYPE", $_SESSION['user_type']);
if($_SESSION['user_type']!=3){
  backHome();
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
    <?php include PROFILE_BREAD; ?>
  <section class="paddingTop-50 paddingBottom-120 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 mt-4">
          <?php include PROFILE.'left_panel.php'; ?>
        </div>
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
              <div class="tab-pane fade show active" id="Tabs_1-1" role="tabpanel">
               <h4>
                 Biography
               </h4>
               <p>
                  Investig ationes demons travge vunt lectores legee lrus quodk legunt saepius was
                  claritas kesty conctetur kedadip sicing. Dummy text of the printing and typesetting 
                  industry. It was popularised in the 1960s with the release of Letraset sheets contain luing lorem Ipsum passages, and more recently with desktop publishing.
               </p>
                <p>
                  Investig ationes demons travge vunt lectores legee lrus quodk legunt saepius claritas est conctetur adip sicing. Dummy text of the printing was and typesetting industry. Lorem Ipsum has been the industry standad dummy text ever since the 1500s.
                </p>
                
                <hr class="my-4">
                <div class="border-bottom mb-4 pb-4">
                 <h4 class="mb-4">
                   Experience
                 </h4>
                  <ul class="ec-timeline-portlet list-unstyled bullet-line-list">
                    <li class="ec-timeline-portlet__item mb-4">
                      <small>2000-2004</small>
                      <h6 class="mb-0">Full Stack Developer</h6>
                      <p class="mb-2">Apple Inc.</p>
                      <p>
                        Investig ationes demons travge vunt lectores legee lrus quodk legunt saepius was claritas kesty conctetur they kedadip lectores legee sicing. legee lrus quodk legunt.
                      </p>
                    </li>
                    <li class="ec-timeline-portlet__item">
                      <small>2004-2018</small>
                      <h6 class="mb-0">Project Manager</h6>
                      <p class="mb-2">Google</p>
                      <p>
                        Investig ationes demons travge vunt lectores legee lrus quodk legunt saepius was claritas kesty conctetur they kedadip lectores legee sicing. legee lrus quodk legunt.
                      </p>
                    </li>
                  </ul>
                </div>
                <div class="mb-4">
                 <h4 class="mb-4">
                   Education
                 </h4>
                  <ul class="ec-timeline-portlet list-unstyled bullet-line-list">
                    <li class="ec-timeline-portlet__item mb-4">
                      <small>2000-2004</small>
                      <h6 class="mb-0">Full Stack Developer</h6>
                      <p class="mb-2">Apple Inc.</p>
                      <p>
                        Investig ationes demons travge vunt lectores legee lrus quodk legunt saepius was claritas kesty conctetur they kedadip lectores legee sicing. legee lrus quodk legunt.
                      </p>
                    </li>
                    <li class="ec-timeline-portlet__item">
                      <small>2004-2018</small>
                      <h6 class="mb-0">Project Manager</h6>
                      <p class="mb-2">Google</p>
                      <p>
                        Investig ationes demons travge vunt lectores legee lrus quodk legunt saepius was claritas kesty conctetur they kedadip lectores legee sicing. legee lrus quodk legunt.
                      </p>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="tab-pane fade" id="Tabs_1-2" role="tabpanel">
                <div class="row">
                  <div class="col-md-6 mt-4">
                    <a href="course-details.html" class="card text-gray overflow-hidden height-100p shadow-v1 border">
                     <span class="ribbon-badge font-size-sm bg-success text-white">Best selling</span>
                      <img class="card-img-top" src="assets/img/360x220/1.jpg" alt="">
                      <div class="card-body">
                        <h4 class="h5">
                          The Web Developer Bootcamp
                        </h4>
                        <p class="my-3">
                          <i class="ti-user mr-2"></i>
                          Andrew Mead
                        </p>
                        <p class="mb-0">
                          <i class="fas fa-star text-warning"></i>
                          <i class="fas fa-star text-warning"></i>
                          <i class="fas fa-star text-warning"></i>
                          <i class="fas fa-star text-warning"></i>
                          <i class="fas fa-star text-warning"></i>
                          <span class="text-dark">5</span>
                          <span>(4578)</span>
                        </p>
                      </div>
                      <div class="card-footer media align-items-center justify-content-between">
                        <ul class="list-unstyled mb-0">
                          <li class="mb-1">
                            <i class="ti-headphone small mr-2"></i>
                            46 lectures
                          </li>
                          <li class="mb-1">
                            <i class="ti-time small mr-2"></i>
                            27.5 hours
                          </li>
                        </ul>
                        <h4 class="h5">
                          <span class="text-primary">$180</span>
                        </h4>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-6 mt-4">
                    <a href="course-details.html" class="card text-gray overflow-hidden height-100p shadow-v1 border">            
                      <img class="card-img-top" src="assets/img/360x220/2.jpg" alt="">
                      <div class="card-body">
                        <h4 class="h5">
                          C++ Essential Training
                        </h4>
                        <p class="my-3">
                          <i class="ti-user mr-2"></i>
                          Andrew Mead, John Doe
                        </p>
                        <p class="mb-0">
                          <i class="fas fa-star text-warning"></i>
                          <i class="fas fa-star text-warning"></i>
                          <i class="fas fa-star text-warning"></i>
                          <i class="fas fa-star text-warning"></i>
                          <i class="fas fa-star-half"></i>
                          <span class="text-dark">4.9</span>
                          <span>(8793)</span>
                        </p>
                      </div>
                      <div class="card-footer media align-items-center justify-content-between">
                        <ul class="list-unstyled mb-0">
                          <li class="mb-1">
                            <i class="ti-headphone small mr-2"></i>
                            46 lectures
                          </li>
                          <li class="mb-1">
                            <i class="ti-time small mr-2"></i>
                            27.5 hours
                          </li>
                        </ul>
                        <h4 class="h5 text-right">
                          <span class="text-primary d-block">$10</span>
                          <s class="small">$129</s>
                        </h4>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-6 mt-4">
                    <a href="course-details.html" class="card text-gray overflow-hidden height-100p shadow-v1 border">
                      <img class="card-img-top" src="assets/img/360x220/3.jpg" alt="">
                      <div class="card-body">
                        <h4 class="h5">
                          Programming Real-World Examples
                        </h4>
                        <p class="my-3">
                          <i class="ti-user mr-2"></i>
                          Adam Kury
                        </p>
                        <p class="mb-0">
                          <i class="fas fa-star text-warning"></i>
                          <i class="fas fa-star text-warning"></i>
                          <i class="fas fa-star text-warning"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <span class="text-dark">3.4</span>
                          <span>(7)</span>
                        </p>
                      </div>
                      <div class="card-footer media align-items-center justify-content-between">
                        <ul class="list-unstyled mb-0">
                          <li class="mb-1">
                            <i class="ti-headphone small mr-2"></i>
                            46 lectures
                          </li>
                          <li class="mb-1">
                            <i class="ti-time small mr-2"></i>
                            27.5 hours
                          </li>
                        </ul>
                        <h4 class="h5">
                          <span class="text-primary">$249</span>
                        </h4>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-6 mt-4">
                    <a href="course-details.html" class="card text-gray overflow-hidden height-100p shadow-v1 border shadow-v1">
                      <img class="card-img-top" src="assets/img/360x220/4.jpg" alt="">
                      <div class="card-body">
                        <h4 class="h5">
                          Java 8 Essential Training
                        </h4>
                        <p class="my-3">
                          <i class="ti-user mr-2"></i>
                          Anthony Brooks
                        </p>
                        <p class="mb-0">
                          <i class="fas fa-star text-warning"></i>
                          <i class="fas fa-star text-warning"></i>
                          <i class="fas fa-star text-warning"></i>
                          <i class="fas fa-star text-warning"></i>
                          <i class="fas fa-star text-warning"></i>
                          <span class="text-dark">5</span>
                          <span>(4578)</span>
                        </p>
                      </div>
                      <div class="card-footer media align-items-center justify-content-between">
                        <ul class="list-unstyled mb-0">
                          <li class="mb-1">
                            <i class="ti-headphone small mr-2"></i>
                            46 lectures
                          </li>
                          <li class="mb-1">
                            <i class="ti-time small mr-2"></i>
                            27.5 hours
                          </li>
                        </ul>
                        <h4 class="h5">
                          <span class="text-success">Free</span>
                        </h4>
                      </div>
                    </a>
                  </div>
                  <div class="col-12 text-center mt-5">
                    <a href="#" class="btn btn-icon btn-outline-primary">
                      <i class="ti-reload mr-2"></i>
                      Load More
                    </a>
                  </div> 
                </div> <!-- END row-->
              </div> <!-- END tab-pane -->
              
              <div class="tab-pane fade" id="Tabs_1-4" role="tabpanel">
                <form action="#" method="POST" class="p-4">
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <input type="text" class="form-control" placeholder="Name" required>
                    </div>
                    <div class="col-md-6 mb-4">
                      <input type="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="col-12 mb-4">
                      <textarea class="form-control" placeholder="Message" rows="5" required></textarea>
                    </div>
                    <div class="col-12 mb-4">
                      <button class="btn btn-primary">Send Now</button>
                    </div>
                  </div>
                </form>
              </div>
              <?php include PROFILE.'settings_tab.php'; ?>
            </div> <!-- END tab-content-->
          </div> <!-- END card-->
        </div> <!-- END col-md-8 -->
      </div> <!--END row-->
    </div> <!--END container-->
  </section>
   
   
   
   
   
  <footer class="site-footer">
    <div class="footer-top bg-dark text-white-0_6 pt-5 paddingBottom-100">
      <div class="container"> 
        <div class="row">
  
          <div class="col-lg-3 col-md-6 mt-5">
           <img src="assets/img/logo-white.png" alt="Logo">
           <div class="margin-y-40">
             <p>
              Availing qualified professionals is our role, the beneficiaries will always appreciate the quality of continuous education we deliver.
            </p>
           </div>
            <ul class="list-inline"> 
              <li class="list-inline-item"><a class="iconbox bg-white-0_2 hover:primary" href="#"><i class="ti-facebook"> </i></a></li>
              <li class="list-inline-item"><a class="iconbox bg-white-0_2 hover:primary" href="#"><i class="ti-twitter"> </i></a></li>
              <li class="list-inline-item"><a class="iconbox bg-white-0_2 hover:primary" href="#"><i class="ti-linkedin"> </i></a></li>
              <li class="list-inline-item"><a class="iconbox bg-white-0_2 hover:primary" href="#"><i class="ti-pinterest"></i></a></li>
            </ul>
          </div>
  
          <div class="col-lg-3 col-md-6 mt-5">
            <h4 class="h5 text-white">Contact Us</h4>
            <div class="width-3rem bg-primary height-3 mt-3"></div>
            <ul class="list-unstyled marginTop-40">
              <li class="mb-3"><i class="ti-headphone mr-3"></i><a href="tel:+8801740411513">(+250) 789044439</a></li>
              <li class="mb-3"><i class="ti-email mr-3"></i><a href="mailto:support@educati.com">topupgradeltd@gmail.com</a></li>
              <li class="mb-3">
               <div class="media">
                <i class="ti-location-pin mt-2 mr-3"></i>
                <div class="media-body">
                  <span>TELECOM HOUSE,
                          6th Floor, K-Lab - 250 Startup</span>
                </div>
               </div>
              </li>
            </ul>
          </div>
  
          <div class="col-lg-2 col-md-6 mt-5">
            <h4 class="h5 text-white">Quick links</h4>
            <div class="width-3rem bg-primary height-3 mt-3"></div>
            <ul class="list-unstyled marginTop-40">
              <li class="mb-2"><a href="about.html">About Us</a></li>
              <li class="mb-2"><a href="contact.html">Contact Us</a></li>
              <li class="mb-2"><a href="faq.html">Faq</a></li>
              <li class="mb-2"><a href="privacy-policy.html">privacy policy</a></li>
              <li class="mb-2"><a href="all-courses.html">All Courses</a></li>
              
            </ul>
          </div>
  
          <div class="col-lg-4 col-md-6 mt-5">
            <h4 class="h5 text-white">Newslatter</h4>
            <div class="width-3rem bg-primary height-3 mt-3"></div>
            <div class="marginTop-40">
              <p class="mb-4">Subscribe to get update and information. Don't worry, we won't send spam!</p>
              <form class="marginTop-30" action="#" method="POST">
                <div class="input-group">
                  <input type="text" placeholder="Enter your email" class="form-control py-3 border-white" required="">
                  <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Subscribe</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          
        </div> <!-- END row-->
      </div> <!-- END container-->
    </div> <!-- END footer-top-->
  
    <div class="footer-bottom bg-black-0_9 py-5 text-center">
      <div class="container">
        <p class="text-white-0_5 mb-0">&copy; 2019 topupgrade ltd. All rights reserved. designed by <a href="https://sagesalvio.000webhostapp.com" target="_blunk">DIA Lab</a></p>
      </div>
    </div>  <!-- END footer-bottom-->
  </footer> <!-- END site-footer -->
  
  
  <div class="scroll-top">
    <i class="ti-angle-up"></i>
  </div>
<?php include SCRIPT; ?>
  </body>
</html>