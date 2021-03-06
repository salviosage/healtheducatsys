<?php 
require 'const.php';
?>
<!DOCTYPE html>
<html lang="en">
  
<head>
        <meta charset="UTF-8">
        
        <!-- Title-->
        <title>
          <?php echo HOME_TITLE; ?>
         </title>
    <?php include VIEWS.'Utils/meta.php'; ?>
    <?php include VIEWS.'Utils/styles.php'; ?>  
        
      </head>
      
      <body>
        <?php 
         include VIEWS.'Utils/header.php';
        ?>


        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          </ol>
          
          <div class="carousel-inner">
           
            <div class="carousel-item height-90vh padding-y-80 active">
             <div class="bg-absolute" data-dark-overlay="5" style="background:url(assets/img/1920x800/2.jpg) no-repeat"></div>
                <div class="container">
                  <div class="row">
                    <div class="col-lg-10 mx-auto text-center text-white">
                      <h2 class="display-lg-4 font-weight-bold text-white animated slideInUp mb-0">
                       CPD Courses in
                      </h2>
                      <h1 class="display-lg-3 font-weight-bold text-primary animated slideInUp">
                        Health related topics 
                      </h1>
                      <p class="font-size-md-18 animated slideInUp">
                      This platform will connect you to many health specialist across Rwanda, the region and internationally - Keep updated with us
                      </p>
                      <a href="courses" class="btn btn-primary mt-3 mx-2 animated slideInUp">Our Courses</a>
                      <a href="register" class="btn btn-outline-white mt-3 mx-2 animated slideInUp">Registration</a>
                    </div>
                  </div>
                </div>
            </div>
           
            <div class="carousel-item height-90vh padding-y-80">
             <div class="bg-absolute" data-dark-overlay="5" style="background:url(assets/img/1920x800/2.jpg) no-repeat"></div>
                <div class="container">
                  <div class="row">
                    <div class="col-lg-10 mx-auto text-center text-white">
                      <h2 class="display-lg-4 font-weight-bold text-white animated slideInUp">
                      CPD Courses in
                      </h2>
                      <h1 class="display-lg-3 font-weight-bold text-primary animated slideInUp">
                      Cross-Cutting CPD Courses
                      </h1>
                      <p class="font-size-md-18 animated slideInUp">
                      This platform will connect you to many health specialist across Rwanda, the region and internationally - Keep updated with us
                      </p>
                      <a href="courses" class="btn btn-primary mt-3 mx-2 animated slideInUp">Our Courses</a>
                      <a href="register" class="btn btn-outline-white mt-3 mx-2 animated slideInUp">Registration</a>
                    </div>
                  </div>
                </div>
            </div>


           
            <div class="carousel-item height-90vh padding-y-80">
             <div class="bg-absolute" data-dark-overlay="5" style="background:url(assets/img/1920x800/1.jpg) no-repeat"></div>
                <div class="container">
                  <div class="row">
                    <div class="col-lg-10 mx-auto text-center text-white">
                      <h4 class="display-lg-4 font-weight-bold text-white animated slideInUp">
                      CPD Courses in
                      </h4>
                      <h2 class="display-lg-3 font-weight-bold text-primary animated slideInUp">
                      Health Provider Skills
                      </h2>
                      <p class="font-size-md-18 animated slideInUp">
                      This platform will connect you to many health specialist across Rwanda, the region and internationally - Keep updated with us 
                      </p>
                      <a href="courses" class="btn btn-primary mt-3 mx-2 animated slideInUp">Our Courses</a>
                      <a href="register" class="btn btn-outline-white mt-3 mx-2 animated slideInUp">Get started </a>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <i class="ti-angle-left iconbox bg-black-0_5 hover:primary"></i>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <i class="ti-angle-right iconbox bg-black-0_5 hover:primary"></i>
          </a>
        </div>




   


            
        <section class="padding-y-100">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="row align-items-center">
                  <div class="col-md-6 my-5">
                   <div class="position-relative">
                     <img class="w-100" src="assets/img/600x432/4.jpg" alt="">
                      <a href="" data-fancybox="" class="iconbox iconbox-lg bg-white position-absolute absolute-center">
                        <i class="ti-control-play text-primary"></i>
                      </a>
                   </div>
                  </div>
                  <div class="col-md-6 mt-4">
                    <h2>
                      <small class="d-block text-gray">Welcome to</small>
                       <span class="text-primary">Topupgrade</span> platform
                    </h2>
                    <p class="my-4">
                        HealthEdu Ltd is a Company created with the support of Health Volunteers Overseas (HVO) – 
                        United States of America; it was initiated by Jean Damascene Bigirimana, who developed a web-based 
                        platform for online trainings in 2016. With the support of Student Alumni 
                        of Misercodia University (USA), Jean Damascene Bigirimana was able to establish the online training.
                    </p>
                    <a href="about" class="btn btn-outline-primary">
                      Read More
                    </a>
                  </div>
                </div>
              </div>
              <?php include VIEWS.'Home/notice_board.php'; ?>
            </div> <!-- END row-->
          </div> <!-- END container-->
        </section>
        <?php include VIEWS.'Home/courses_list.php'; ?>
        <section class="padding-y-100 bg-light">
            <div class="container">
              <div class="row">
                <div class="col-12 text-center">
                  <h2>
                    How it Works
                  </h2>
                  <div class="width-4rem height-4 bg-primary my-2 mx-auto rounded"></div>
                </div> <!-- END col-12 -->
                <div class="col-12">
                  <ul class="nav justify-content-center text-center margin-y-40" role="tablist">
                     <li class="nav-item mx-md-4">
                      <a class="nav-link active" data-toggle="tab" href="#Tabs_1-1" role="tab" aria-selected="true">
                       <span class="iconbox iconbox-xs btn btn-outline-primary font-size-16">
                         1
                       </span>
                        <span class="d-block mt-2">
                          Signup and choose your topic
                        </span>
                      </a>
                     </li>
                     <li class="nav-item mx-md-4">
                      <a class="nav-link" data-toggle="tab" href="#Tabs_1-2" role="tab" aria-selected="true">
                       <span class="iconbox iconbox-xs btn btn-outline-primary font-size-16">
                         2
                       </span>
                        <span class="d-block mt-2">
                        Enroll in a course & Get a Certificate
                        </span>
                      </a>
                     </li>
                     <li class="nav-item mx-md-4">
                      <a class="nav-link" data-toggle="tab" href="#Tabs_1-3" role="tab" aria-selected="true">
                       <span class="iconbox iconbox-xs btn btn-outline-primary font-size-16">
                         3
                       </span>
                        <span class="d-block mt-2">
                        Move as a Giant!
                        </span>
                      </a>
                     </li>
                   </ul>
                   
                    <div class="tab-content">
                     
                      <div class="tab-pane fade show active" id="Tabs_1-1" role="tabpanel">
                       <div class="list-card bg-white p-4 shadow-v1">
                         <div class="col-md-6 my-4">
                           <h4>
                           	Choose a topic 
                           </h4>
                           <p>
                           You will select a course depending on your career, current practice or desire practice. You will be 
                           free to choose a course you like depending on the period you are in 
                           or the society is passing through. Remember Code of Conduct and basic life support will be mandatory. 
                           </p>
                           <!-- <ul class="list-unstyled list-style-icon list-icon-check font-weight-semiBold my-4">
                              <li>Focused subject concentrations</li>
                              <li>Usually 3 or more coordinated courses</li>
                              <li>Develop a skill set within a specific area</li>
                           </ul> -->
                         </div>
                         <div class="col-md-6 text-center my-4">
                           <img src="assets/img/svg/7.png" alt="">
                         </div>
                       </div>
                      </div> <!-- END tab-pane -->
                      
                      <div class="tab-pane fade" id="Tabs_1-2" role="tabpanel">
                       <div class="list-card bg-white p-4 shadow-v1">
                         <div class="col-md-6 text-center my-4">
                           <img src="assets/img/svg/7.png" alt="">
                         </div>
                         <div class="col-md-6 my-4">
                           <h4>
                           Enroll in a Course
                           </h4>
                           <p>
                           Health Professionals will get to choose the best they think is
                                right for them. You take a course in the expected time, go
                                through it and make sure you are able gain some knowledge
                                because that is the most important value of doing CPD
                                Courses.
                           </p>
                           <ul class="list-unstyled list-style-icon list-icon-check font-weight-semiBold my-4">
                              <li>-	Focus on your career	</li>
                              <li>Challenge yourself in enrolling in many courses </li>
                              <li>Develop a skill and be able to expand your knowledge</li>
                           </ul>
                         </div>
                       </div>
                      </div> <!-- END tab-pane -->
                      
                      <div class="tab-pane fade" id="Tabs_1-3" role="tabpanel">
                       <div class="list-card bg-white p-4 shadow-v1">
                         <div class="col-md-6 my-4">
                           <h4>
                             Connect with Students
                           </h4>
                           <p>
                           After gaining knowledge in different areas, you feel confident and move as a giant. Your brain is 
                           capable to accommodate many insights and generates ideas connecting to all the knowledge you acquired. 
                           </p>
                           <ul class="list-unstyled list-style-icon list-icon-check font-weight-semiBold my-4">
                              <li>	Be valuable</li>
                              <li>Do not loose time</li>
                              <li>Start now</li>
                           </ul>
                         </div>
                         <div class="col-md-6 text-center my-4">
                           <img src="assets/img/svg/7.png" alt="">
                         </div>
                       </div>
                      </div> <!-- END tab-pane -->
                      
                    </div> <!-- END tab-content-->
                </div>
              </div> <!-- END row-->
            </div> <!--END container-->
          </section>
          
           
            
        <section class="paddingTop-70 paddingBottom-100 bg-light-v3">
          <div class="container">
            <div class="row text-center align-items-center">
              <div class="col-lg-3 col-sm-4 marginTop-30">
                <img src="assets/img/logos/2.png" alt="">
              </div>
              <div class="col-lg-3 col-sm-4 marginTop-30">
                <img src="assets/img/logos/1.png" alt="">
              </div>
              <div class="col-lg-3 col-sm-4 marginTop-30">
                <img src="assets/img/logos/4.png" alt="">
              </div>
              <div class="col-lg-3 col-sm-4 marginTop-30">
                <img src="assets/img/logos/5.png" alt="">
              </div>
            </div> <!-- END row-->
          </div> <!-- END container--> 
        </section> 
        
        
        
            
        <section class="padding-y-100 bg-cover bg-center jarallax" data-dark-overlay="6" style="background: url(assets/img/1920/550_2.jpg) no-repeat;">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-5 col-md-7 mr-auto text-white my-3">
                <h4 class="text-primary font-weight-semiBold">
                Build your CV continuously with HealthEdu
                </h4>
                <h2>
                  Learn a New Skill Online, on Your Time and get a certificate
                </h2>
                <a href="register" class="btn btn-primary mt-3">join for free</a>
              </div>
              <div class="col-lg-4 col-md-5 my-3">
                <div class="card px-4 py-5 text-center">
                  <h4 class="text-primary">
                  Subscribe to our Newsletters 
                  </h4>
                  <p class="mb-4">
                    Get the latest news and update from HealthEdu  
                  </p>
                  <?php include HOME.'subscribe.php'; ?>
                </div>
              </div>
            </div> <!-- END row-->
          </div> <!-- END container--> 
        </section> 
        
        
        
        
        
            
        <section class="padding-y-100 bg-light">
          <div class="container">
            <div class="row">
             <div class="col-12 text-center">
                <h2>
                  What Other Said
                </h2>
                <div class="width-4rem height-4 bg-primary my-2 mx-auto rounded"></div>
              </div>
              
              <div class="col-md-4 mt-5">
                <div class="card height-100p text-center px-4 py-5 shadow-v2">
                  <p>
                    I have enjoyed doing courses online and helped me to save time and money, this process allowed me to balance my work and I had the capacity to time for myself in learning. 
                    
                  </p>
                  <img class="iconbox iconbox-xxl mx-auto my-3" src="assets/img/avatar/julie.jpeg" alt="">
                  <h6 class="mb-0">
                    Ingabire Marie Julie
                  </h6>
                  <p class="font-size-14 text-gray mb-0">
                    Biomedical Laboratory Scientist
                  </p>
                </div>
              </div>
              
              <div class="col-md-4 mt-5">
                <div class="card height-100p text-center px-4 py-5 shadow-v2">
                  <p>
                    I developed a course on "NDT Bobath Approach for this platform, this is a smart way to develop our capacity in continuous professional education for Health Professionals
                  </p>
                  <img class="iconbox iconbox-xxl mx-auto my-3" src="assets/img/avatar/ines.jpeg" alt="">
                  <h6 class="mb-0">
                    Ines Musabyemariya 
                  </h6>
                  <p class="font-size-14 text-gray mb-0">
                    NDT Bobath Specialist, PT
                  </p>
                </div>
              </div>
              
              <div class="col-md-4 mt-5">
                <div class="card height-100p text-center px-4 py-5 shadow-v2">
                  <p>
                    I am a Physical Therapist, I have had courses online on this platform, it eased my work and gave me access to different specialists, I enjoyed learning on my free time and can recommend this process to my fellow colleagues
                  </p>
                  <img class="iconbox iconbox-xxl mx-auto my-3" src="assets/img/avatar/ujeneza.jpeg" alt="">
                  <h6 class="mb-0">
                    UJENEZA Jeniffer 
                  </h6>
                  <p class="font-size-14 text-gray mb-0">
                    Physical Theapist.
                  </p>
                </div>
              </div>
              
            </div> <!-- END row-->
          </div> <!-- END container-->
        </section>
        
        
          
           
            
        
        
        
        <section class="padding-y-100 bg-info">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 mx-auto text-center text-white">
                <h2>
                Become a Facilitator
                </h2>
                <p class="lead my-4">
                  Share your knowledge and reach millions of students across the globe. Join the world's largest online learning marketplace.
                </p>
                <a href="become-instructor" class="btn btn-white mt-2">Become a Facilitator </a>
              </div>
            </div>
          </div>
        </section>
        <!-- END site-footer -->
        <?php 
        include UTILS.'footer.php';
        ?>        
        <div class="scroll-top">
          <i class="ti-angle-up"></i>
        </div>
        <?php include SCRIPT; ?>
        </body>
        </html>