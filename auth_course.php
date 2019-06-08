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
        <title>course | topugrade ltd </title>
        <?php include VIEWS.'Utils/meta.php'; ?>  
        <?php include VIEWS.'Utils/styles.php'; ?>  
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
                    <a class="nav-link active" data-toggle="tab" href="#Home" role="tab" aria-selected="true">
                      <i class="ti-home mr-1"></i>
                      Home
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Modules" role="tab" aria-selected="false">
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
              <div class="tab-pane fade show active" id="Home" role="tabpanel">
               <div class="p-3">
                  <div class="tab-pane fade show active" id="Home" role="tabpanel">
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
                                      <div class="media-body">
                                        <span class="text-gray d-block">Instructor:</span>
                                        <a href="#" class="h6">J
                                          <?php echo $admin->getTeacherField($function->extract_array($courseInfo,'assigned_teacher'),'names'); ?>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-lg-3 col-md-6 my-2">
                                    <div class="border-right height-100p">
                                      <span class="text-gray d-block">Categories:</span>
                                      <a href="#" class="h6">Development</a>
                                    </div>
                                  </div>
                                  <div class="col-lg-4 col-md-6 my-2">
                                    <div class="text-md-right height-100p">
                                      <h2 class="font-weight-bold text-primary mb-2">
                                        <?php echo $function->extract_array($courseInfo,'course_price').' RWF'; ?>
                                      </h2>
                                      <?php 
                                      //check if student have already requested this course
                                      $hasRequested=$admin->isCourseRequested($course_id,USER_ID);
                                      if(!$hasRequested){
                                        ?>
                                        <a id="btn_request_course" course="<?php echo $course_id; ?>" class="btn btn-primary" student="<?php echo USER_ID; ?>">Take Course</a>
                                        <?php
                                      }else{
                                        //check if it has been approved
                                        $approve_state=$admin->isRequestedApproved($course_id,USER_ID);
                                        if($approve_state){
                                          ?>
                                          <a course="<?php echo $course_id; ?>" class="btn btn-info" student="<?php echo USER_ID; ?>" style="background: #337AB7;color: #fff;">
                                            <i class="fa fa-check"></i> Start Learning
                                          </a>
                                          <?php
                                        }else{
                                          ?>
                                          <a course="<?php echo $course_id; ?>" class="btn btn-danger disabled" student="<?php echo USER_ID; ?>" >Request Sent</a>
                                          <?php
                                        }
                                      }
                                      ?>
                                    </div>
                                  </div>
                                </div> <!-- END row-->
                                <div class="col-lg-12">
                                  <?php 
                                    $image_url='learn/Courses/'.$function->extract_array($courseInfo,'path');
                                  ?>
                                  <img src="<?php echo $image_url; ?>" class='responsive'>
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
                                      <div class="row mt-5">
                                       <div class="col-12">
                                         <h4>
                                          What Will I Learn?
                                        </h4>
                                       </div>
                                        <div class="col-md-12 my-2">
                                          <ul class="list-unstyled list-style-icon list-icon-check">
                                            <?php 
                                            foreach ($Tolearn as $key => $value) {
                                              ?>
                                              <li>
                                                <?php echo $value['to_learn']; ?>
                                              </li>
                                              <?php
                                            }
                                            ?>
                                            
                                          </ul>
                                        </div>                                         
                                        <div class="col-md-6 my-2">
                                         <h4>
                                           Course Requirments
                                         </h4>
                                          <ul class="list-unstyled list-style-icon list-icon-bullet">
                                            <li>Learn how to captivate your audience</li>
                                            <li>Take your business / job to the next level</li>
                                            <li>Overcome the fear of public speaking</li>
                                            <li>Learn how to captivate your audience</li>
                                            <li>Take your business / job to the next level</li>
                                          </ul>
                                        </div> 
                                        
                                        <div class="col-md-6 my-2">
                                         <h4>
                                           Who is the Target Audience?
                                         </h4>
                                          <ul class="list-unstyled list-style-icon list-icon-bullet">
                                            <li>Learn how to captivate your audience</li>
                                            <li>Take your business / job to the next level</li>
                                            <li>Overcome the fear of public speaking</li>
                                            <li>Learn how to captivate your audience</li>
                                            <li>Take your business / job to the next level</li>
                                          </ul>
                                        </div> 
                                      </div> <!-- END row-->
                                    </div> <!-- END tab-pane-->
                                    
                                    <div class="tab-pane fade" id="tabCurriculum" role="tabpanel">
                                    <div id="accordionCurriculum">
                        
                    
                                      
                    
                                      <div class="list-group-item">
                                        <span class="row">
                                          <span class="col-9 col-md-8" href="#">
                                            <i class="ti-control-play small mr-1 text-primary"></i>
                                            Creating A Full Webpage
                                          </span>
                                          <span class="col-3 col-md-2 ml-auto text-right">7:12</span>
                                        </span>
                                      </div>
                    
                                      <div class="list-group-item">
                                        <span class="row">
                                          <span class="col-9 col-md-8" href="#">
                                            <i class="ti-files small mr-1 text-primary"></i>
                                            Accessing Elements - Files
                                          </span>
                                          <span class="col-3 col-md-2 ml-auto text-right">4:07</span>
                                        </span>
                                      </div>
                    
                                      <div class="list-group-item">
                                        <span class="row">
                                          <span class="col-9 col-md-8" href="#">
                                            <i class="ti-control-play small mr-1 text-primary"></i>
                                            Responding To A Click
                                          </span>
                                          <span class="col-3 col-md-2 ml-auto text-right">4:07</span>
                                        </span>
                                      </div>
                    
                                      <div class="list-group-item">
                                        <span class="row">
                                          <span class="col-9 col-md-8" href="#">
                                            <i class="ti-control-play small mr-1 text-primary"></i>
                                            Changing Website Content - Files
                                          </span>
                                          <span class="col-3 col-md-2 ml-auto text-right">4:07</span>
                                        </span>
                                      </div>
                        
                                 
                        
                                      </div> <!-- END accordion-->
                                    </div> <!-- END tab-pane -->
                                    
                                    
                                    <div class="tab-pane fade" id="tabInstructors" role="tabpanel">
                                      <h4 class="mb-4">
                                        About Instructors
                                      </h4>
                                      <?php include VIEWS.'Course/instructor.php'; ?>  
                                    </div> <!-- END tab-pane -->
                                    
                                   
                                    
                                  </div> <!-- END tab-content-->
                              </div> <!-- END col-12 -->
                              </div> <!-- END col-lg-9 -->
                              
                             
                             
                           </div> <!-- END row-->
                          </div> <!-- END container-->
                        </section>
                   
                  </div>
               </div>
              </div>
              <div class="tab-pane fade" id="Modules" role="tabpanel">
                <section class="padding-y-100 border-bottom border-light">
                  <div class="container">
                    <div class="row">
                      
                    <div class="col-md-2 my-2">
                        <ul class="nav flex-column tab-state-primary mb-3 justify-content-center" role="tablist">
                           <li class="nav-item m-2">
                             <a class="nav-link bg-light rounded text-center p-3 active show" data-toggle="tab" href="#Tabs_14-1" role="tab" aria-selected="true">
                              <i class="ti-home d-block mb-2"></i>
                               Introduction module
                             </a>
                           </li>
                           <li class="nav-item m-2">
                             <a class="nav-link bg-light rounded text-center p-3" data-toggle="tab" href="#Tabs_14-2" role="tab" aria-selected="false">
                              <i class="ti-user d-block mb-2"></i>
                               Reading
                             </a>
                           </li>
                           <li class="nav-item m-2">
                             <a class="nav-link bg-light rounded text-center p-3" data-toggle="tab" href="#Tabs_14-3" role="tab" aria-selected="false">
                              <i class="ti-settings d-block mb-2"></i>
                               Evaluation and certification
                             </a>
                           </li>
                         </ul>
                      </div>
                      <div class="col-md-10 my-2">
                        <div class="tab-content">
                          <div class="tab-pane fade show active" id="Tabs_14-1" role="tabpanel" aria-labelledby="pills-home-tab">
                            <p>
                              Investig ationes demons travge vunt lectores legee lrus quodk legunt saepius claritas est conctetur adip sicing. Dummy text of the printing was and typesetting industry. Lorem Ipsum has been the industry standad dummy text ever since the 1500s.
                            </p>
                          </div>
                          <div class="tab-pane fade" id="Tabs_14-2" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <p>
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus odit beatae dolor commodi, accusamus obcaecati suscipit magnam! Incidunt dolorum laboriosam aperiam veritatis debitis voluptate veniam magnam, illum dolor pariatur ex?
                              Investig ationes demons travge vunt lectores legee lrus quodk legunt saepius claritas est conctetur adip sicing. Dummy text of the printing was and typesetting industry. Lorem Ipsum has been the industry standad dummy text ever since the 1500s.
                            </p>
                          </div>
                          <div class="tab-pane fade" id="Tabs_14-3" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <p>
                              Investig ationes demons travge vunt lectores legee lrus quodk legunt saepius claritas est conctetur adip sicing. Dummy text of the printing was and typesetting industry. Lorem Ipsum has been the industry standad dummy text ever since the 1500s.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div> <!-- END row-->
                  </div> <!-- END container-->
                </section> <!-- END section-->
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