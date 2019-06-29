<?php require 'const.php'; ?>
<!DOCTYPE html>
<html lang="en">
  

<head>
    <meta charset="UTF-8">
    
    <!-- Title-->
    <title>Become an instructor | HealthEdu </title>
    
    <!-- SEO Meta-->
    <meta name="description" content="Education theme by EchoTheme">
    <meta name="keywords" content="HTML5 Education theme, responsive HTML5 theme, bootstrap 4, Clean Theme">
    <meta name="author" content="education">
    
    <!-- viewport scale-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <?php include STYLES; ?>
    
  </head>
  
  <body>
    <?php 
    session_start();

      if(isset($_SESSION['user_id']) && isset($_SESSION['user_names']) && isset($_SESSION['user_type'])){
        define("USER_NAMES", $_SESSION['user_names']);
        define("USER_ID", $_SESSION['user_id']);
        define("USER_TYPE", $_SESSION['user_type']);
        include VIEWS.'Utils/auth_header.php';
      }else{
        include HEADER;
      }
    ?>
    
<div class="padding-y-80 bg-cover" data-dark-overlay="6" style="background:url(assets/img/1920/658_2.jpg) no-repeat">
  <div class="container">
    <h2 class="text-white">
      Become an Instructor
    </h2>
    <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0">  
      <li class="breadcrumb-item"><a href="index">Home</a></li>
      <li class="breadcrumb-item">Become an Instructor</li>
    </ol>
  </div>
</div>
  
  
  
  <section class="padding-y-100">
    <div class="container">
      <div class="row text-center">
        <div class="col-12">
          <h2>
          Your expertise can help
          </h2>
          <div class="width-4rem height-4 bg-primary my-2 mx-auto rounded"></div>
        </div>
        
        <div class="col-md-4 mt-5">
          <div class="iconbox iconbox-xxl bg-primary text-white">
            <i class=" ti-thumb-up  font-size-24"></i>
          </div>
          <h4 class="my-4">
          	INSPIRE A LEARNER
          </h4>
          <p>
          Create courses are customize to the need of Rwanda, East Africa Community and whole Africa. 
          </p>
        </div>
        
        <div class="col-md-4 mt-5">
          <div class="iconbox iconbox-xxl bg-primary text-white">
            <i class=" ti-blackboard  font-size-24"></i>
          </div>
          <h4 class="my-4">
          	LIFE LONG LEARNING 
          </h4>
          <p>
          Your educational materials will help as many as possible in their capacity building, feel proud to have help a generation
          </p>
        </div>
        
        <div class="col-md-4 mt-5">
          <div class="iconbox iconbox-xxl bg-primary text-white">
            <i class=" ti-money  font-size-24"></i>
          </div>
          <h4 class="my-4">
          	EARN EXTRA INCOME 
          </h4>
          <p>
          Your free time can generate extra income with HealthEdu. Develop as many courses as you can to help in this
           struggle of increasing the quality of healthcare in our Society
          </p>
        </div>
      </div> <!-- END row-->
    </div> <!--END container-->
  </section>
    
  
  
  
  <!-- <section class="padding-y-100 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2>
            How it Works
          </h2>
          <div class="width-4rem height-4 bg-primary my-2 mx-auto rounded"></div>
        </div> <!-- END col-12 -->
        <!-- <div class="col-12">
          <ul class="nav justify-content-center text-center margin-y-40" role="tablist">
             <li class="nav-item mx-md-4">
              <a class="nav-link active" data-toggle="tab" href="#Tabs_1-1" role="tab" aria-selected="true">
               <span class="iconbox iconbox-xs btn btn-outline-primary font-size-16">
                 1
               </span>
                <span class="d-block mt-2">
                  Choose your Topic
                </span>
              </a>
             </li>
             <li class="nav-item mx-md-4">
              <a class="nav-link" data-toggle="tab" href="#Tabs_1-2" role="tab" aria-selected="true">
               <span class="iconbox iconbox-xs btn btn-outline-primary font-size-16">
                 2
               </span>
                <span class="d-block mt-2">
                  Create a Course
                </span>
              </a>
             </li>
             <li class="nav-item mx-md-4">
              <a class="nav-link" data-toggle="tab" href="#Tabs_1-3" role="tab" aria-selected="true">
               <span class="iconbox iconbox-xs btn btn-outline-primary font-size-16">
                 3
               </span>
                <span class="d-block mt-2">
                  Connect with Students
                </span>
              </a>
             </li>
           </ul>
           
            <div class="tab-content">
             
              <div class="tab-pane fade show active" id="Tabs_1-1" role="tabpanel">
               <div class="list-card bg-white p-4 shadow-v1">
                 <div class="col-md-6 my-4">
                   <h4>
                     Choose your Topic
                   </h4>
                   <p>
                     Investig ationes demons travg ectores legere lruske quod legunt saepius ationes demons ectores. Investig ationes demons travg ectores legere lruske quod legunt saepius ationes demons ectores. There consectetur.
                   </p>
                   <ul class="list-unstyled list-style-icon list-icon-check font-weight-semiBold my-4">
                      <li>Focused subject concentrations</li>
                      <li>Usually 3 or more coordinated courses</li>
                      <li>Develop a skill set within a specific area</li>
                   </ul>
                 </div>
                 <div class="col-md-6 text-center my-4">
                   <img src="assets/img/svg/7.png" alt="">
                 </div>
               </div>
              </div> END tab-pane -->:
              
              <!-- <div class="tab-pane fade" id="Tabs_1-2" role="tabpanel">
               <div class="list-card bg-white p-4 shadow-v1">
                 <div class="col-md-6 text-center my-4">
                   <img src="assets/img/svg/7.png" alt="">
                 </div>
                 <div class="col-md-6 my-4">
                   <h4>
                     Create a Course
                   </h4>
                   <p>
                     Investig ationes demons travg ectores legere lruske quod legunt saepius ationes demons ectores. Investig ationes demons travg ectores legere lruske quod legunt saepius ationes demons ectores. There consectetur.
                   </p>
                   <ul class="list-unstyled list-style-icon list-icon-check font-weight-semiBold my-4">
                      <li>Focused subject concentrations</li>
                      <li>Usually 3 or more coordinated courses</li>
                      <li>Develop a skill set within a specific area</li>
                   </ul>
                 </div>
               </div>
              </div> END tab-pane -->
              
              <!-- <div class="tab-pane fade" id="Tabs_1-3" role="tabpanel">
               <div class="list-card bg-white p-4 shadow-v1">
                 <div class="col-md-6 my-4">
                   <h4>
                     Connect with Students
                   </h4>
                   <p>
                     Investig ationes demons travg ectores legere lruske quod legunt saepius ationes demons ectores. Investig ationes demons travg ectores legere lruske quod legunt saepius ationes demons ectores. There consectetur.
                   </p>
                   <ul class="list-unstyled list-style-icon list-icon-check font-weight-semiBold my-4">
                      <li>Focused subject concentrations</li>
                      <li>Usually 3 or more coordinated courses</li>
                      <li>Develop a skill set within a specific area</li>
                   </ul>
                 </div>
                 <div class="col-md-6 text-center my-4">
                   <img src="assets/img/svg/7.png" alt="">
                 </div>
               </div> -->
              <!-- </div> <!-- END tab-pane -->
<!--               
            </div> <!-- END tab-content-->
        <!-- </div> -->
      <!-- </div> <!-- END row-->
    <!-- </div> END container -->
  <!-- </section> --> 
  
  
  
  
  
  <section class="padding-y-100 bg-center bg-cover jarallax" data-dark-overlay="7" style="background: url(assets/img/college/2.jpg) no-repeat">
  <div class="container">
    <div class="row text-center text-white">
     
      <div class="col-md-4 mt-5 wow zoomIn" data-wow-delay=".1s">
        <p class="ec-counter display-4 text-primary" data-to="1787">
          1,787
        </p>
        <p class="lead">
          Online Courses
        </p>
      </div>
          
      <div class="col-md-4 mt-5 wow zoomIn" data-wow-delay=".2s">
        <p class="ec-counter display-4 text-primary" data-to="8404547">
          8404547
        </p>
        <p class="lead">
          Online Students
        </p>
      </div>  
          
      <div class="col-md-4 mt-5 wow zoomIn" data-wow-delay=".2s">
        <p class="ec-counter display-4 text-primary" data-to="5404">
          1250
        </p>
        <p class="lead">
          Supportive Instructors
        </p>
      </div>   
         
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>
  
  
  
  
  
  <section class="padding-y-100">
  <div class="container">
    <div class="row">
     <div class="col-12 text-center">
        <h2>
          Intructor Rules
        </h2>
        <div class="width-4rem height-4 bg-primary my-2 mx-auto rounded"></div>
      </div>
      <div class="col-lg-6 mt-5">
        <p>
        For the organization to generate Quality educational materials; instructors have to be experts in a certain field; these instructors must be health 
        professionals with active license to practice from a competent regulatory body in case they are teaching a health top. 
        </p>
   
       <ul class="list-unstyled list-style-icon list-icon-check font-weight-semiBold my-4">
        <li>-	Be with an active license to practice </li>
        <li>Be loyal with no records of malpractice</li>
        <li>Be with a good will to help others in capacity building</li>
        
       </ul>
      </div>
      <div class="col-lg-6 mt-5">
         <img class="w-100" src="assets/img/600x432/4.jpg" alt="">
          <a href="" data-fancybox="" class="iconbox iconbox-lg bg-white position-absolute absolute-center">
            <i class="ti-control-play text-primary"></i>
          </a>
      </div>
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>
  
  
  
  
  <section class="padding-y-100 bg-light">
  <div class="container">
    <div class="row">
     <div class="col-12 text-center">
        <h2>
          What Instructors Said
        </h2>
        <div class="width-4rem height-4 bg-primary my-2 mx-auto rounded"></div>
      </div>
      
      <div class="col-md-4 mt-5">
        <div class="card height-100p text-center px-4 py-5 shadow-v2">
          <p>
          Je pense que c’est une excellente occasion pour les professionnels de la santé au Rwanda et en Afrique de
           développer leurs capacités professionnelles via des CPD. Les services 
          en ligne ont éliminé les obstacles à l'accessibilité, même dans les régions éloignées.
          </p>
          <img class="iconbox iconbox-xxl mx-auto my-3" src="assets/img/avatar/ins1.jpg" alt="">
          <h6 class="mb-0">
          Dr. Watukalusu M. Hubert.
           </h6>
          <p class="font-size-14 text-gray mb-0">
          Medical Doctor, MSc Cand.
          </p>
        </div>
      </div>
      
      <div class="col-md-4 mt-5">
        <div class="card height-100p text-center px-4 py-5 shadow-v2">
          <p>
       Continuous Professional Development has to be in our culture ! As health professionals are catering for life saving and 
       quality of life improvement ; they really to
        always update their knowledge… science is moving, we have to also move and upgrade our knowledge day to day. 
          </p>
          <img class="iconbox iconbox-xxl mx-auto my-3" src="assets/img/avatar/ins2.jpg" alt="">
          <h6 class="mb-0">
          Dr. Anicet Nzabonimpa, MD
          </h6>
          <p class="font-size-14 text-gray mb-0">
          Medical Doctor, MSc
          </p>
        </div>
      </div>
      
      <div class="col-md-4 mt-5">
        <div class="card height-100p text-center px-4 py-5 shadow-v2">
          <p>
              It is essential that we make sure our knowledge is update, some if not most of techniques that were
              used in pst years are changing and health professionals need to adapt to the changing environment by enrolling in different CPD packages available….
              Get them online – no need to travel and loos time! 

          </p>
          <img class="iconbox iconbox-xxl mx-auto my-3" src="assets/img/avatar/ins3.jpg" alt="">
          <h6 class="mb-0">
          Jean de Dieu Harelimana, MSc, PhD Cand.
          </h6>
          <p class="font-size-14 text-gray mb-0">
          Medical Laboratory Specialist 
          </p>
        </div>
      </div>
      
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>
  
  
  
  
  <section class="padding-y-100">
  <div class="container">
    <div class="row">
     <div class="col-12 text-center">
        <h2>
          Get start today
        </h2>
        <div class="width-4rem height-4 bg-primary my-2 mx-auto rounded"></div>
      </div>
      <div class="col-lg-6 mx-auto mt-5">
        <div class="card text-center shadow-v3 p-5">
          <h4 class="text-primary">
            Become a HealthEdu Instructor!
          </h4>
          <p>
            Discover a supportive community of online instructors. Get instant access to all course creation resources.
          </p>
          <?php include TEACHER_REG; ?>
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
<?php include SCRIPT; ?>
</body>
</html>