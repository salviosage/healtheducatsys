<?php 
require $_SERVER['DOCUMENT_ROOT'].'/lean/App/Views/Utils/const.php';
require APP_URL;
if(isset($_GET['course_id']) && $_GET['course_id']!='' && isset($_GET['name']) && $_GET['name']!=''){
  $course_id=$function->sanitize($_GET['course_id']);
  $name=$function->sanitize($_GET['name']);
  $courseInfo=$admin->loadCourseInfo($course_id);
}else{
  backHome();
}
function backHome(){
  header("Location:index");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <!-- Title-->
    <title>Details | topugrade LTD</title>
    <?php include VIEWS.'Utils/meta.php'; ?>  
    <?php include VIEWS.'Utils/styles.php'; ?>    
  </head>
  
  <body>
    <?php include VIEWS.'Utils/header.php'; ?> 
    <?php include VIEWS.'Course/bread.php'; ?>
    <?php include VIEWS.'Course/share.php'; ?>


<section class="paddingBottom-100">
  <div class="container">
  
   <div class="row">
      <div class="col-lg-9 marginTop-30">
        <h1>
          <?php echo $name; ?>
        </h1>
        <div class="row mt-3">
          <div class="col-lg-3 col-md-6 my-2">
            <div class="media border-right height-100p">
              <img class="iconbox mr-3" src="assets/img/avatar/4.jpg" alt="">
              <div class="media-body">
                <span class="text-gray d-block">Instructor:</span>
                <a href="#" class="h6">
                  <?php echo $admin->getTeacherField($function->extract_array($courseInfo,'assigned_teacher'),'names'); ?>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 my-2">
            <div class="text-md-right height-100p">
              <h2 class="font-weight-bold text-primary mb-2">
                <?php echo $function->extract_array($courseInfo,'course_price').' RWF'; ?>
              </h2>
              <a class="btn btn-primary" href="#">Buy Course</a>
            </div>
          </div>
        </div> <!-- END row-->

        <div class="col-lg-12">
          <?php 
            $image_url='../learn/Courses/'.$function->extract_array($courseInfo,'path');
          ?>
          <img src="<?php echo $image_url; ?>" class='responsive'>
        </div>
        <div class="card padding-30 shadow-v3">
          <h4>
            Features Includes:
          </h4>
          <ul class="list-inline mb-0 mt-2">
            <li class="list-inline-item my-2 pr-md-4">
              <i class="ti-headphone small text-primary"></i>
              <span class="ml-2">246 lectures</span>
            </li>
            <li class="list-inline-item my-2 pr-md-4">
              <i class="ti-time small text-primary"></i>
              <span class="ml-2">27.5 Hours</span>
            </li>
            <li class="list-inline-item my-2 pr-md-4">
              <i class="ti-user small text-primary"></i>
              <span class="ml-2">98,250 students entrolled</span>
            </li>
            <li class="list-inline-item my-2 pr-md-4">
              <i class="ti-reload small text-primary"></i>
              <span class="ml-2">Lifetime access</span>
            </li>
            <li class="list-inline-item my-2 pr-md-4">
              <i class="ti-crown small text-primary"></i>
              <span class="ml-2">Certificate of Completion</span>
            </li>
            <li class="list-inline-item my-2 pr-md-4">
              <i class="ti-crown small text-primary"></i>
              <span class="ml-2">30-Day Money-Back Guarantee of Completion</span>
            </li>
          </ul>
        </div>
        
        <div class="col-12 mt-4">
         <ul class="nav tab-line tab-line tab-line--3x border-bottom mb-5" role="tablist">
           <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#tabDescription" role="tab" aria-selected="true">
              Description
            </a>
           </li>
           <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tabCurriculum" role="tab" aria-selected="true">
              Curriculum
            </a>
           </li>
           <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tabInstructors" role="tab" aria-selected="true">
              Instructors
            </a>
           </li>
           <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tabReviews" role="tab" aria-selected="true">
              Reviews
            </a>
           </li>
         </ul>
          <div class="tab-content">
            <div class="tab-pane fade show active" id="tabDescription" role="tabpanel">
              <h4>
                Course Description
              </h4>
              <p>
                <?php echo htmlspecialchars_decode($function->extract_array($courseInfo,'summary')); ?>
              </p>
            </div> <!-- END tab-pane-->
            
            <div class="tab-pane fade" id="tabCurriculum" role="tabpanel">
              <?php 
              $Credits=$admin->getCourseCredits($course_id,$function->extract_array($courseInfo,'assigned_teacher'));
              ?>
              <div id="accordionCurriculum">

                <div class="accordion-item list-group mb-3">
                  <div id="accordionCurriculum_1" class="collapse show" data-parent="#accordionCurriculum">
                    <?php 
                    foreach ($Credits as $key => $value) {
                      ?>
                      <div class="list-group-item">
                        <span class="row">
                          <a class="col-9 col-md-8" href="#">
                            <i class="ti-control-play small mr-1 text-primary"></i>
                            <?php echo $value['credit']; ?>
                          </a>
                          <span class="col-3 col-md-2 ml-auto text-right">
                            <i class="fa fa-check text-success"></i>
                          </span>
                        </span>
                      </div>
                      <?php
                    }
                    ?>
                  </div>
                </div> <!-- END accordion-item -->

              </div>
            </div> <!-- END tab-pane -->
            
            
            <div class="tab-pane fade" id="tabInstructors" role="tabpanel">
              <h4 class="mb-4">
                About Instructors
              </h4>
              
              <div class="border-bottom mb-4 pb-4">
                <div class="d-md-flex mb-4">
                  <a href="#">
                    <img class="iconbox iconbox-xxxl" src="assets/img/262x230/5.jpg" alt="">
                  </a>
                  <div class="media-body ml-md-4 mt-4 mt-md-0">
                    <h6>
                      <a href="instructor-full-profile.html"> Asif vai </a>  
                    </h6>
                    <p class="mb-2">
                      <i class="ti-world mr-2"></i> Web Developer and Instructor
                    </p>
                    <ul class="list-inline">
                      <li class="list-inline-item mb-2">
                        <i class="ti-user mr-1"></i>
                        147570 studends
                      </li>
                      <li class="list-inline-item mb-2">
                        <i class="ti-book mr-1"></i>
                        20 Courses
                      </li>
                      <li class="list-inline-item mb-2">
                        <i class="ti-star text-warning mr-1"></i>
                        4.9 Average Rating (4578)
                      </li>
                    </ul>
                    <a href="#" class="btn btn-outline-primary btn-pill btn-sm">View Profile</a>
                  </div>
                </div>
                <h6>
                  Experience as Web Developer
                </h6>
                <p>
                  Investig ationes demons travge vunt lectores legee lrus quodk legunt saepius claritas est conctetur adip sicing. Dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standad dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it make type specimen book. It has survived not only five centuries.
                </p>
              </div>
              
              <div class="border-bottom mb-4 pb-5">
                <div class="d-md-flex mb-4">
                  <a href="#">
                    <img class="iconbox iconbox-xxxl" src="assets/img/262x230/6.jpg" alt="">
                  </a>
                  <div class="media-body ml-md-4 mt-4 mt-md-0">
                    <h4>
                      <a href="instructor-full-profile.html"> Asif vai </a>  
                    </h4>
                    <p class="mb-2">
                      <i class="ti-world mr-2"></i> Web Developer and Instructor
                    </p>
                    <ul class="list-inline">
                      <li class="list-inline-item mb-2">
                        <i class="ti-user mr-1"></i>
                        147570 studends
                      </li>
                      <li class="list-inline-item mb-2">
                        <i class="ti-book mr-1"></i>
                        20 Courses
                      </li>
                      <li class="list-inline-item mb-2">
                        <i class="ti-star text-warning mr-1"></i>
                        4.7 Average Rating (4578)
                      </li>
                    </ul>
                    <a href="instructor-full-profile.html" class="btn btn-outline-primary btn-pill btn-sm">View Profile</a>
                  </div>
                </div>
              </div>        
                    
            </div> <!-- END tab-pane -->
            
            <div class="tab-pane fade" id="tabReviews" role="tabpanel">
             <h4 class="mb-4"> 
               Students Feedback
             </h4>
             
              <div class="row px-0 align-items-center border p-4">
               <div class="col-md-4 text-center">
                  <h1 class="display-4 text-primary mb-0">
                    4.70
                  </h1>
                  <p class="my-2">
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                  </p>
                  <p class="mb-0">
                    Average Rating
                  </p>
               </div>
               <div class="col-md-8">
                    <div class="d-flex align-items-center mb-2">
                       <div class="width-7rem text-light d-none d-sm-block mr-3">
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                      </div>
                        <div class="progress flex-auto mr-3" style="height:10px">
                          <div class="progress-bar bg-primary" style="width:100%" role="progressbar" aria-valuenow="20" aria-valuemin="20" aria-valuemax="100"></div>
                        </div>
                       <span>90%</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                       <div class="width-7rem text-light d-none d-sm-block mr-3">
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star"></i>
                      </div>
                        <div class="progress flex-auto mr-3" style="height:10px">
                          <div class="progress-bar bg-primary" style="width:80%" role="progressbar" aria-valuenow="20" aria-valuemin="20" aria-valuemax="100"></div>
                        </div>
                       <span>87%</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                       <div class="width-7rem text-light d-none d-sm-block mr-3">
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                      </div>
                        <div class="progress flex-auto mr-3" style="height:10px">
                          <div class="progress-bar bg-primary" style="width:60%" role="progressbar" aria-valuenow="20" aria-valuemin="20" aria-valuemax="100"></div>
                        </div>
                       <span>34%</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                       <div class="width-7rem text-light d-none d-sm-block mr-3">
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                      </div>
                        <div class="progress flex-auto mr-3" style="height:10px">
                          <div class="progress-bar bg-primary" style="width:40%" role="progressbar" aria-valuenow="20" aria-valuemin="20" aria-valuemax="100"></div>
                        </div>
                       <span>12%</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                       <div class="width-7rem text-light d-none d-sm-block mr-3">
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                      </div>
                        <div class="progress flex-auto mr-3" style="height:10px">
                          <div class="progress-bar bg-primary" style="width:10%" role="progressbar" aria-valuenow="20" aria-valuemin="20" aria-valuemax="100"></div>
                        </div>
                       <span>2%</span>
                    </div>
               </div>
              </div>
              
              <div class="row border-bottom mx-0 py-4 mt-4">
                <div class="col-md-4 my-2 media">
                  <img class="iconbox iconbox-xl" src="assets/img/avatar/4.jpg" alt="">
                  <div class="media-body ml-4">
                   <small class="text-gray">7 min ago</small>
                   <h6>
                     Anthony Forsey
                   </h6>
                  </div>
                </div>
                <div class="col-md-8 my-2">
                  <p>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                  </p>
                  <p class="font-size-18">
                    Awesome course
                  </p>
                  <p>
                    Investig ationes demons travge vunt lectores legee lrus quodk legunt saepius was claritas kesty they conctetur they kedadip lectores legee sicing.
                  </p>
                </div>
              </div> <!-- END row-->
              
              <div class="row border-bottom mx-0 py-4 mt-4">
                <div class="col-md-4 my-2 media">
                  <img class="iconbox iconbox-xl" src="assets/img/avatar/5.jpg" alt="">
                  <div class="media-body ml-4">
                   <small class="text-gray">1 mon ago</small>
                   <h6>
                     Justin Nam
                   </h6>
                  </div>
                </div>
                <div class="col-md-8 my-2">
                  <p class="text-light">
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </p>
                  <p class="font-size-18">
                    Test review lol
                  </p>
                  <p>
                    Investig ationes demons travge vunt lectores legee lrus quodk legunt saepius was claritas kesty.
                  </p>
                </div>
              </div> <!-- END row-->
              
              <div class="row border-bottom mx-0 py-4 mt-4">
                <div class="col-md-4 my-2 media">
                  <div class="iconbox iconbox-xl border">
                    MD
                  </div>
                  <div class="media-body ml-4">
                   <small class="text-gray">3 Mon ago</small>
                   <h6>
                     Murir Dokan
                   </h6>
                  </div>
                </div>
                <div class="col-md-8 my-2">
                  <p>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                  </p>
                  <p class="font-size-18">
                    This is a title of review. the developer suffer from lot's of vitamin. what about you?
                  </p>
                  <p>
                    Investig ationes demons travge vunt lectores legee lrus quodk legunt saepius was claritas kesty they conctetur they kedadip lectores legee sicing.
                  </p>
                </div>
              </div> <!-- END row-->
              
              
              <div class="row border-bottom mx-0 py-4 mt-4">
                <div class="col-md-4 my-2 media">
                  <img class="iconbox iconbox-xl" src="assets/img/avatar/6.jpg" alt="">
                  <div class="media-body ml-4">
                   <small class="text-gray">1 year ago</small>
                   <h6>
                     John Doe
                   </h6>
                  </div>
                </div>
                <div class="col-md-8 my-2">
                  <p>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                  </p>
                  <p class="font-size-18">
                    Best course ever
                  </p>
                  <p>
                    Investig ationes demons travge vunt lectores legee lrus quodk legunt saepius was claritas kesty they conctetur they kedadip lectores legee sicing.
                    Investig ationes demons travge vunt lectores legee lrus quodk legunt saepius was claritas kesty they conctetur they kedadip lectores legee sicing.
                  </p>
                </div>
              </div> <!-- END row-->
              <div class="text-center mt-5">
                <a href="#" class="btn btn-primary btn-icon">
                  <i class="ti-reload mr-2"></i>
                  Load More
                </a>
              </div>
            </div> <!-- END tab-pane -->
            
          </div> <!-- END tab-content-->
      </div> <!-- END col-12 -->
      </div> <!-- END col-lg-9 -->
      
     <aside class="col-lg-3">
       <div class="card border border-light marginTop-30 shadow-v1">
         <h4 class="card-header border-bottom mb-0 h6">other courses </h4>
         <ul class="card-body list-unstyled mb-0">
          <li class="mb-2"><a href="#">All Courses</a></li>
          <li class="mb-2"><a href="#">Web Development</a></li>
          <li class="mb-2"><a href="#">Mobile Apps</a></li>
          <li class="mb-2"><a href="#">Business</a></li>
          <li class="mb-2"><a href="#">IT & Software</a></li>
          <li class="mb-2"><a href="#">Data Science</a></li>
          <li class="mb-2"><a href="#">Design</a></li>
          <li class="mb-2"><a href="#">Marketing</a></li>
          <li class="mb-2"><a href="#">All Courses</a></li>
          <li class="mb-2"><a href="#">Featured Courses</a></li>
          <li class="mb-2"><a href="#">Popular Courses</a></li>
          <li class="mb-2"><a href="#">Starting Soon</a></li>
          <li class="mb-2"><a href="#">Intermediate</a></li>
          <li class="mb-2"><a href="#">Advanced</a></li>
          <li class="mb-2"><a href="#">All Courses</a></li>
          <li class="mb-2"><a href="#">Paid Courses</a></li>
          <li class="mb-2"><a href="#">Free Courses</a></li>
         </ul>
       </div>
    
       <div class="card marginTop-30 shadow-v1 hover:parent">
        <img class="hover:zoomin" src="assets/img/262x230/9.jpg" alt="">
        <div class="card-img-overlay text-white bg-black-0_6">
          <h4 class="card-title">
            Enriched Learning Experiences
          </h4>
          <p class="my-3">
            Get unlimited access to 2,000 of Educati’s top courses for your team.
          </p>
          <a href="#" class="btn btn-white">Join Now</a>
        </div>
       </div>
     </aside> <!-- END col-lg-3 -->   
     
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