<?php 
require 'const.php';
require AUTH_URL;
require LOADER;
define("USER_NAMES", $_SESSION['user_names']);
define("USER_ID", $_SESSION['user_id']);
define("USER_TYPE", $_SESSION['user_type']);
?>
<!DOCTYPE html>
<html lang="en">
  
<head>
        <meta charset="UTF-8">
        
        <!-- Title-->
        <title>course | Healthedu ltd </title>
        
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
        <section class="height-90vh py-5 flex-center bg-cover jarallax" data-dark-overlay="4" style="background:url(assets/img/1920x800/1.jpg) no-repeat">
          <div class="container">
            <div class="row">
              <div class="col-lg-9 mx-auto text-center text-white">
                <h4 class="display-5 font-weight-bold text-primary wow slideInUp">
                CPD Courses in
                </h4>
                <h2 class="display-md-3 font-weight-bold text-white wow slideInUp">
                Health related topics 
                </h2>
                <p class="lead wow slideInUp">
                This platform will connect you to many health specialist across Rwanda, the region and internationally - Keep updated with us
                </p>
                <a href="courses" class="btn btn-primary btn-lg  mt-3 mx-2 wow slideInUp">Our Courses</a>
                <a href="dashboard" class="btn btn-outline-white btn-lg  mt-3 mx-2 wow slideInUp">Your Dashboard</a>
              </div>
            </div>
          </div>
        </section>           
        <section class="padding-y-100">
          <div class="container">
            <div class="card flex-wrap flex-row padding-md-40 shadow-v2 z-index-10" data-offset-top-lg="-200">
              <div class="col-md-4 mb-4">
                <div class="card">
                  <img src="assets/img/school/1.jpg" class="card-img-top" alt="">
                  <h4 class="my-4">
                    Success Needs a Plan
                  </h4>
                  <p>
                    Begin your success journey with us and make most of it 
                  </p>
                  <a href="about" class="btn btn-outline-primary mt-3 align-self-start">
                    Read More
                  </a>
                </div>
              </div>
              <div class="col-md-4 mb-4">
                <div class="card">
                  <img src="assets/img/school/4.jpg" class="card-img-top" alt="">
                  <h4 class="my-4">
                    Learn Courses Online
                  </h4>
                  <p>
                    Learn and get  to know whatever it take to become a health professional 
                  </p>
                  <a href="about" class="btn btn-outline-primary mt-3 align-self-start">
                    Read More
                  </a>
                </div>
              </div>
              <div class="col-md-4 mb-4">
                <div class="card">
                  <img src="assets/img/school/3.jpg" class="card-img-top" alt="">
                  <h4 class="my-4">
                    Make a connection
                  </h4>
                  <p>
                    Connect with many industry expert in health sector 
                  </p>
                  <a href="about" class="btn btn-outline-primary mt-3 align-self-start">
                    Read More
                  </a>
                </div>
              </div>
            </div> <!-- END row-->
            <div class="row marginTop-lg-100">
              <div class="col-lg-5 mr-auto mt-5">
               <div class="owl-carousel" data-items="1" data-dots="true">
                <img class="rounded" src="assets/img/school/1.jpg" alt="">
                <img class="rounded" src="assets/img/school/2.jpg" alt="">
                <img class="rounded" src="assets/img/school/3.jpg" alt="">
                <img class="rounded" src="assets/img/school/4.jpg" alt="">
               </div>
              </div>
              <div class="col-lg-6 mt-5">
                <h2>
                  <small class="d-block text-gray">Welcome to</small>
                   <span class="text-primary">Healthedu</span> Online Platform
                </h2>
                <p class="my-4">
                Top-Upgrade Ltd is a Company created with the support of Health Volunteers Overseas (HVO) – 
                United States of America; it was initiated by Jean Damascene Bigirimana, who developed a web-based 
                platform for online trainings in 2016. With the support of Student Alumni of
                 Misercodia University (USA), Jean Damascene Bigirimana was able to establish the online training.
                </p>
                <a href="about" class="btn btn-outline-primary">
                  Read More
                </a>
              </div>
            </div> <!-- END row-->
          </div> <!-- END container-->
        </section>
        <?php include VIEWS.'Home/popular_courses.php'; ?>
        <!-- <section class="paddingTop-60 paddingBottom-100">
          <div class="container">
            <div class="row text-center">
             
              <div class="col-lg-3 col-md-6  mt-5 wow zoomIn" data-wow-delay=".1s">
                <h1 class="ec-counter text-primary" data-to="520" data-speed="3000">
                  520
                </h1>
                <p class="lead text-dark">
                  Online Courses
                </p>
              </div>
             
              <div class="col-lg-3 col-md-6  mt-5 wow zoomIn" data-wow-delay=".2s">
                <h1 class="ec-counter text-primary" data-to="690" data-speed="3000">
                  690
                </h1>
                <p class="lead text-dark">
                  Trusted Tutors
                </p>
              </div>
             
              <div class="col-lg-3 col-md-6  mt-5 wow zoomIn" data-wow-delay=".3s">
                <h1 class="ec-counter text-primary" data-to="856084" data-speed="3000">
                  235
                </h1>
                <p class="lead text-dark">
                  Online Students
                </p>
              </div>
             
              <div class="col-lg-3 col-md-6  mt-5 wow zoomIn" data-wow-delay=".4s">
                <h1 class="ec-counter text-primary" data-to="5204" data-speed="3000">
                  5204
                </h1>
                <p class="lead text-dark">
                  Success Stories
                </p>
              </div>
              
            </div> <!-- END row-->
          </div> <!-- END container-->
        </section> -->
           
            
            
            
            
            
        <section class="padding-y-100 bg-cover jarallax" data-dark-overlay="5" style="background: url(assets/img/1920x800/1_1.jpg) no-repeat">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-7 mr-auto text-white">
                <p class="lead">
                  GET 100S OF ONLINE COURSES
                </p>
                <h1 class="display-lg-4">
                  Begin your Freshman Year Online with <span class="text-primary">Healthedu</span>
                </h1>
              </div>
              <div class="col-lg-4 mt-5">
                <div class="card px-4 py-5 text-center wow zoomIn">
                  <h4>
                    Stand With Us
                  </h4>
                  <p>
                   Subscribe to our news letter
                  </p>
                  <form action="#" method="POST" class="mt-3">
                    <input type="text" class="form-control mb-3" placeholder="Name">
                    <input type="email" class="form-control mb-3" placeholder="Email">
                    <input type="tel" class="form-control mb-3" placeholder="Phone">
                    <button class="btn btn-primary btn-block mt-4" type="submit">Subscribe</button>
                  </form>
                </div>
              </div>
            </div> <!-- END row-->
          </div> <!-- END container-->
        </section>
        
           
            
            
            
        <section class="padding-y-100 bg-light">
          <div class="container">
            <div class="row">
             
              <div class="col-12 text-center">
                <h2 class="mb-4">
                  Upcoming Events
                </h2>
                <div class="width-3rem height-4 rounded bg-primary mx-auto"></div>
              </div> 
            </div> <!-- END row-->
            
            <div class="row mt-4">
         
              <div class="col-lg-4 col-md-6 marginTop-30 wow fadeIn" data-wow-delay=".1s">
                <div class="card shadow-v1">
                  <div class="padding-40 border-bottom">
                    <a href="#" class="h4">
                      Open Schools for Open Societies 2018
                    </a>
                  </div>
                  <ul class="list-unstyled padding-x-40 py-4 line-height-xl">
                    <li>
                       <i class="ti-time mr-2 text-primary"></i>
                       April 13, 2018 @ 8:00 am
                    </li>
                    <li>
                       <i class="ti-location-pin mr-2 text-primary"></i>
                       184 Main Collins Street
                    </li>
                  </ul>
                </div>
              </div>
              
              <div class="col-lg-4 col-md-6 marginTop-30 wow fadeIn" data-wow-delay=".2s">
                <div class="card shadow-v1">
                  <div class="padding-40 border-bottom">
                    <a href="#" class="h4">
                      Conference on Early School Leaving
                    </a>
                  </div>
                  <ul class="list-unstyled padding-x-40 py-4 line-height-xl">
                    <li>
                       <i class="ti-time mr-2 text-primary"></i>
                       April 13, 2018 @ 8:00 am
                    </li>
                    <li>
                       <i class="ti-location-pin mr-2 text-primary"></i>
                       184 Main Collins Street
                    </li>
                  </ul>
                </div>
              </div>
              
              <div class="col-lg-4 col-md-6 marginTop-30 wow fadeIn" data-wow-delay=".3s">
                <div class="card shadow-v1">
                  <div class="padding-40 border-bottom">
                    <a href="#" class="h4">
                      A collection of Innovative and Inspiring Resources
                    </a>
                  </div>
                  <ul class="list-unstyled padding-x-40 py-4 line-height-xl">
                    <li>
                       <i class="ti-time mr-2 text-primary"></i>
                       April 13, 2018 @ 8:00 am
                    </li>
                    <li>
                       <i class="ti-location-pin mr-2 text-primary"></i>
                       184 Main Collins Street
                    </li>
                  </ul>
                </div>
              </div>  
         
              <div class="col-lg-4 col-md-6 marginTop-30 wow fadeIn" data-wow-delay=".1s">
                <div class="card shadow-v1">
                  <div class="padding-40 border-bottom">
                    <a href="#" class="h4">
                      A collection of Innovative and Inspiring Resources
                    </a>
                  </div>
                  <ul class="list-unstyled padding-x-40 py-4 line-height-xl">
                    <li>
                       <i class="ti-time mr-2 text-primary"></i>
                       April 13, 2018 @ 8:00 am
                    </li>
                    <li>
                       <i class="ti-location-pin mr-2 text-primary"></i>
                       184 Main Collins Street
                    </li>
                  </ul>
                </div>
              </div> 
              
              <div class="col-lg-4 col-md-6 marginTop-30 wow fadeIn" data-wow-delay=".2s">
                <div class="card shadow-v1">
                  <div class="padding-40 border-bottom">
                    <a href="#" class="h4">
                      Open Schools for Open Societies 2018
                    </a>
                  </div>
                  <ul class="list-unstyled padding-x-40 py-4 line-height-xl">
                    <li>
                       <i class="ti-time mr-2 text-primary"></i>
                       April 13, 2018 @ 8:00 am
                    </li>
                    <li>
                       <i class="ti-location-pin mr-2 text-primary"></i>
                       184 Main Collins Street
                    </li>
                  </ul>
                </div>
              </div>
              
              <div class="col-lg-4 col-md-6 marginTop-30 wow fadeIn" data-wow-delay=".3s">
                <div class="card shadow-v1">
                  <div class="padding-40 border-bottom">
                    <a href="#" class="h4">
                      Conference on Early School Leaving
                    </a>
                  </div>
                  <ul class="list-unstyled padding-x-40 py-4 line-height-xl">
                    <li>
                       <i class="ti-time mr-2 text-primary"></i>
                       April 13, 2018 @ 8:00 am
                    </li>
                    <li>
                       <i class="ti-location-pin mr-2 text-primary"></i>
                       184 Main Collins Street
                    </li>
                  </ul>
                </div>
              </div>
             
            </div> <!-- END row-->
          </div> <!-- END container-->
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
             
           
          <script src="assets/js/vendors.bundle.js"></script>
          <script src="assets/js/scripts.js"></script>
        </body>
        </html>