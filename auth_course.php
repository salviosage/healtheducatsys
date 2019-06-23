<?php 
require 'const.php';
require APP_URL;
require AUTH_URL;
require AUTH_CONST;
if(isset($_GET['course_id']) && $_GET['course_id']!='' && isset($_GET['name']) && $_GET['name']!=''){
  $course_id=$function->sanitize($_GET['course_id']);
  $name=$function->sanitize($_GET['name']);
  $courseInfo=$admin->loadCourseInfo($course_id);
  $teacher_id=$function->extract_array($courseInfo,"assigned_teacher");
  $Tolearn=$admin->getWhatToLearn($course_id);
  //check if has paid for this course
  $is_approved=$admin->isRequestedApproved($course_id,USER_ID);
  $course_tab_nav="nav-link active";
  if(!$is_approved){
    $course_tab_nav.=" disabled";
  }
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
        <title><?php echo $name; ?> | topugrade ltd </title>
        <?php include VIEWS.'Utils/meta.php'; ?>  
        <?php include VIEWS.'Utils/styles.php'; ?>
        <script type="text/javascript">
          const logged_in="<?php echo USER_ID ;?>";
        </script>
      </head>
      
      <body>
        <?php include VIEWS.'Utils/auth_header.php'; ?> 
    
    <div class="py-5 bg-cover" data-dark-overlay="6" style="background:url(assets/img/1920/658_2.jpg) no-repeat">
      <div class="container">
        <h2 class="text-white">
          <?php echo $name; ?>
        </h2>
        <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0">  
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item">
            Course
          </li>
        </ol>
      </div>
    </div>

    
      </section>

      <section class="padding-y-100 bg-light-v2">
          <div class="container">
            <div class="row">
             
              <div class="col-lg-10 mx-auto">
                <div class="card">
                <ul class="nav tabs-portlet" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Home" role="tab" aria-selected="true">
                      <i class="ti-home mr-1"></i>
                      Home
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="<?php echo $course_tab_nav; ?>" data-toggle="tab" href="#Modules" role="tab" aria-selected="false" x>
                     <i class="ti-user mr-1"></i>
                     Course
                    </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#CourseDiscussion" role="tab" aria-selected="false">
                       <i class="ti-email mr-1"></i>
                       Discussion
                      </a>
                    </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#CourseProgress" role="tab" aria-selected="false">
                     <i class="ti-email mr-1"></i>
                     Progress
                    </a>
                  </li>
                </ul>
                
            
          <div class="tab-content">
              <?php include VIEWS.'Course/Description.php'; ?>
              <div class="tab-pane fade show active" id="Modules" role="tabpanel">
                <?php include VIEWS.'Course/Modules.php'; ?>
              </div>
              <div class="tab-pane fade" id="CourseDiscussion" role="tabpanel">
               <div class="p-3">
                <p>
                  no discussion yet add one 
                </p>
               </div>
              </div>
              <div class="tab-pane fade" id="CourseProgress" role="tabpanel">
                <section class="py-4">
                  <div class="container">
                    <div class="row">
                     <div class="col-md-12 my-2">
                      <h4 class="mb-4">
                        Progress Striped
                      </h4>
                      
                      <div class="progress mb-4" style="height:10px">
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div class="progress mb-4" style="height:10px">
                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div class="progress mb-4" style="height:10px">
                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div class="progress mb-4" style="height:8px">
                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div class="progress mb-4" style="height:10px">
                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      
                     </div>
                     
                   </div>
                  </div> <!-- END container-->
                </section> <!-- END section-->
        
              </div>
            </div> <!-- END tab-content-->
          </div> <!-- END col-12 -->
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
    <?php include SCRIPT; ?>
    </body>
    </html>