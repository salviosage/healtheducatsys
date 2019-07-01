<?php 
require 'const.php';
?>
<!DOCTYPE html>
<html lang="en">
  

<head>
    <meta charset="UTF-8">
    
    <!-- Title-->
    <title>About |HealthEdu LTD</title>
    
    <!-- SEO Meta-->
    <meta name="description" content="Digital innovation art ">
    <meta name="keywords" content="HTML5 , responsive HTML5 , bootstrap 4, Clean ">
    <meta name="author" content="jean salvi">
    
    <!-- viewport scale-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
            
    <!-- Favicon and Apple Icons-->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico">
    <link rel="shortcut icon" href="assets/img/favicon/114x114.png">
    <link rel="apple-touch-icon-precomposed" href="assets/img/favicon/96x96.png">
    
    
    <!--Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700%7CWork+Sans:400,500">
    
    
    <!-- Icon fonts -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/all.css">
    <link rel="stylesheet" href="assets/fonts/themify-icons/css/themify-icons.css">
    
    
    <!-- stylesheet-->    
    <link rel="stylesheet" href="assets/css/vendors.bundle.css">
    <link rel="stylesheet" href="assets/css/style.css">
    
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
   <div class="py-5 bg-dark">
    <div class="container">
     <div class="row align-items-center">
       <div class="col-md-6 text-white">
         <h2>About</h2>
       </div>
       <div class="col-md-6">
        <ol class="breadcrumb justify-content-md-end bg-transparent">  
          <li class="breadcrumb-item">
            <a href="#">Home</a>
          </li> 
          
          <li class="breadcrumb-item">
           About us
          </li>
        </ol>
       </div>
     </div>
    </div> 
  </div>
   
   
   
   <section class=" border-bottom">
    <div class="container">
        
    <div class="row align-items-center">
        <div class="col-lg-12 mb-4 mr-auto ">
            <h2>
                <span class="text-primary text-center ">Who</span> We Are
            </h2>
            
            <div class="width-4rem height-4 bg-primary rounded mt-4 marginBottom-40"></div>
            <p class="mb-5">
                HealthEdu is a Company created with the support of Health Volunteers Overseas (HVO) – United States of America; it was initiated by Jean
                 Damascene Bigirimana, who developed a web-based platform for online trainings in 2016. With the support of Student Alumni of Misercodia University (USA), 
                 Jean Damascene Bigirimana was able to establish the online training. </p>
           
        </div> 
        <div class="col-lg-5 mb-4 mr-auto text-center">
            <img class="wow fadeInLeft w-100 rounded" src="assets/img/384x320/owner.jpg" alt="Founder and Managing Director ">
            <p>Founder and Managing Director </p>
        </div> 

        <div class="col-lg-6 mb-4 mr-auto ">
            
                 
             <p class="mb-5"> 
                    The company started with only training for Physical Therapy Practitioners; Dr. Maureen Pascal has contributed a lot in the establishment of the organization. Health Volunteers Overseas has funded HealthEdu and avail some IT Equipments for its activities. 
                   In October 2017, the company was officially registered in Rwanda Development Board (RDB) as Domestic Company.
             </p>
             <p class="mb-5"> Since its opening the company has been able to training nearly 730 health Professionals by qualified health Instructors. 
                As added value; HealthEdu has received functional 2 partners (Mutoni Jean d’Amour and Harelimana Jean de Dieu) both Biomedical Laboratory Specialists
                 working hard in improving service delivery and general management of HealthEdu.
          </p>
           
        </div> 
        
    </div> <!-- END row-->
    </div> <!-- END container-->
   </section>
   
   <section class=" border-bottom wow fadeIn">
    
    <div class="">
      <div class="container">
        <div class="row">
  
         <div class="col-lg-6 my-2">
           <div class="card">
             <div class="card-header p-3 px-md-5 bg-primary border-0">
               <h4 class="text-white mb-0">
              	OUR MISSION & VISION
               </h4>
             </div> <!-- END card-header-->
             <div class="card-body p-4 px-md-5">
               <div id="accordion-2" class="accordion-style-2">
  
                <div class="accordion-item border-bottom wow slideInUp">
                 <a href="#acc2_1" class="accordion__title h6 py-3" data-toggle="collapse" aria-expanded="true">
                  <span class="accordion__icon float-right ml-3">
                    <i class="ti-plus"></i>
                    <i class="ti-minus"></i>
                  </span>
                  Our Mission
                  
                 </a>
                  <div id="acc2_1" class="collapse show" data-parent="#accordion-2" style="">
                    <div class="p-0">
                       <p>
                        To lead in improvement of knowledge upgrade for health practitioners in our region
                  
                       </p>
                    </div>
                  </div>
                </div> <!-- END accordion-item-->
  
                <div class="accordion-item border-bottom wow slideInUp">
                 <a href="#acc2_2" class="accordion__title h6 py-3 collapsed" data-toggle="collapse" aria-expanded="true">
                  <span class="accordion__icon float-right ml-3">
                    <i class="ti-plus"></i>
                    <i class="ti-minus"></i>
                  </span>
                   
                  Our Vision 
                  
                 </a>
                  <div id="acc2_2" class="collapse" data-parent="#accordion-2">
                    <div class="p-0">
                       <p>
                        To become the excellent organization for health professionals’ continuous development in East Africa
                       </p>
                    </div>
                  </div>
                </div> <!-- END accordion-item-->
  
              </div> <!-- END accordion-2-->
             </div> <!-- END card-body-->
           </div> <!-- END card-->
         </div> <!-- END col-lg-6 -->
  
         <div class="col-lg-6 my-2">
           <div class="card">
             <div class="card-header p-3 px-md-5 bg-primary border-0">
               <h4 class="text-white mb-0">
                 Our Values 
               </h4>
             </div> <!-- END card-header-->
             <div class="card-body p-4 px-md-5">
               <div id="accordion-2_1" class="accordion-style-2">
  
                <div class="accordion-item border-bottom wow slideInUp">
                 <a href="#acc2_6" class="accordion__title h6 py-3 collapsed" data-toggle="collapse" aria-expanded="false">
                  <span class="accordion__icon float-right ml-3">
                    <i class="ti-plus"></i>
                    <i class="ti-minus"></i>
                  </span>
                  Our keys for development:

                  
                  
                 </a>
                  <div id="acc2_6" class="collapse" data-parent="#accordion-2_1" style="">
                    <div class="p-0">
                       <p>
                        •	Desire for Excellence
                        </p>
                        <p>
                            •	Trust and confidence build-up
                        </p>
                        <p>
                            •	 Innovation 
                        </p>
                        <p>
                            •	Transparency 
                        </p>
                        <p>
                        •	Teamwork
                       </p>
                    </div>
                  </div>
                </div> <!-- END accordion-item-->
  
                <div class="accordion-item border-bottom wow slideInUp">
                 <a href="#acc2_7" class="accordion__title h6 py-3" data-toggle="collapse" aria-expanded="true">
                  <span class="accordion__icon float-right ml-3">
                    <i class="ti-plus"></i>
                    <i class="ti-minus"></i>
                  </span>
                  We believe in
                  
                 </a>
                  <div id="acc2_7" class="collapse show" data-parent="#accordion-2_1" style="">
                    <div class="p-0">
                       <p>
                        •	Health Professionals have to abide to the code of conduct and Ethics 
                        </p>
                        <p>
                          •	Building Rwanda we want by increasing skills of Health care Providers
                        </p>
                        <p>
                            •	Healthcare quality improvement

                        </p>
                        <p>
                        •	Rwandan Citizens deserve the best quality of Health Care Service
                       </p>
                        <p>
                        •	Enrolling in our courses will increase the capacity of health Professionals
                       </p>
                    </div>
                  </div>
                </div> <!-- END accordion-item-->
  
              </div> <!-- END accordion-2_1-->
             </div> <!-- END card-body-->
           </div> <!-- END card-->
         </div> <!-- END col-lg-6 -->
  
        </div> <!-- END row-->
      </div> <!-- END container-->
    </div> <!--padding-y-100 -->
  </section>
   
   
  <section class="padding-y-100 border-bottom border-light">
      <div class="container">
        <div class="row">
         <div class="col-12 text-center mb-4">
           <h4>	OUR <span class="text-primary"> INVOLVEMENT</span></h4>
         </div>
         
          <div class="col-md-6 mt-5 pr-lg-5 wow fadeInUp" data-wow-delay=".1s">
            <div class="media align-items-center mb-3">
             <span class="iconbox iconbox-lg bg-white text-success shadow-v3">
               <i class="ti-magnet font-size-24"></i>
             </span>
              <div class="media-body marginLeft-25">
                <h5 class="mb-0">
                    Organization of CPD Courses for Professionals
                </h5>
              </div>
            </div>
            <p>
                We are the experts in the organizing Continuous professional Development (CPD) Courses for Health Professions, 
                to enhance upgrade of service delivery and improve general health of the Rwandan
                 citizen and East African Citizen in general. We have so far organized training of the following professionals:
            </p>
            <p>
                <b>•	Biomedical Laboratory Practitioners</b>

                </p>
                <p>
                   <b>•	Physical Therapy Practitioners</b> 
                    
                </p>
                <p>
                   <b>•	Social Workers, Public Health Practitioners, Clinical Officers</b> 
                   
                </p>
                <p>
                   <b>•	Biomedical Engineers, Medical Imaging Practitioners, Environmental Health Practitioners</b> 
                    
               </p>
               <p> 
                  <b>•	Prosthetic and Orthotic Practitioners, Pharmacists, Medical Doctor, Nurses etc.</b>
             </p>
          </div>
         
          <div class="col-md-6 mt-5 pr-lg-5 wow fadeInUp" data-wow-delay=".2s">
            <div class="media align-items-center mb-3">
             <span class="iconbox iconbox-lg bg-white text-success shadow-v3">
               <i class="ti-light-bulb font-size-24"></i>
             </span>
              <div class="media-body marginLeft-25">
                <h5 class="mb-0">
                    SPECIAL TRAININGS
                </h5>
              </div>
            </div>
            <p>
                HealthEdu has the expertise also of organizing high ranking training for leaders
                 and Managers in health System. It invites Special Category of Professionals / administrators/
                  Directors/Head of Departments and trains them of selected topics for the improvement of their
                   daily work. By doing this; HealthEdu Contributes in raising the private
                 sector and build the nation by increasing the knowledge of the Rwandan Work force. 
            </p>
            <p><b>•	Institutional Staff Trainings –</b> The Company Provides Institutional Staff trainings, by evaluating types
               of employees and planning for the 
              appropriate trainings needed to develop their professions in different perspective. </p>
              <p><b>•	Personal Trainings –</b>  HealthEdu has the Capacity to organized personal trainings depending on the needed skills and willingness of the applicant.        </p>
          </div>
         
          <div class="col-md-6 mt-5 pr-lg-5 wow fadeInUp" data-wow-delay=".3s">
            <div class="media align-items-center mb-3">
             <span class="iconbox iconbox-lg bg-white text-success shadow-v3">
               <i class="ti-shortcode font-size-24"></i>
             </span>
              <div class="media-body marginLeft-25">
                <h5 class="mb-0">
                    NETWORK & INFRASTRUCTURE 
                </h5>
              </div>
            </div>
            <p>
                
                HealthEdu has a Training Center at Acts of Gratitude – KG 147 Street 7. HealthEdu is opening Partnership with Hospitals in Kigali and in different Districts
                   so that it can use its infrastructure with the same goal of increase health practitioners’ knowledge and hence increase the service delivery. 
                
            </p>
          </div>
         
          <div class="col-md-6 mt-5 pr-lg-5 wow fadeInUp" data-wow-delay=".1s">
            <div class="media align-items-center mb-3">
             <span class="iconbox iconbox-lg bg-white text-success shadow-v3">
               <i class="ti-desktop font-size-24"></i>
             </span>
              <div class="media-body marginLeft-25">
                <h5 class="mb-0">
                    COMMUNICATION
                </h5>
              </div>
            </div>
            <p>
                In Order for HealthEdu communicate with its customers; there is use of Bulk SMS delivered by one 
                of our partner. The company shares images on different networks for participants to get aware of available trainings.
                 Bulk E-mail messages and calls are also sent by the Secretariat.
            </p>
            <p>
                With the presence of a Documentation Officer; Miss Agnes K., the company has been to carry our all daily activities 
                with continuity services to our applicants. Sorting, contacting applicants 
                enables us to deliver high quality training services. Recommendations from experts make out trainings unique. 
            </p>
          </div>
         
        </div> <!-- END row-->
      </div> <!-- END container-->
    </section>
    
   <section class="padding-y-100">
    <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <h2>
          What We offer
        </h2>
        <div class="width-4rem height-4 bg-primary rounded mt-4 marginBottom-40"></div>
        <p class="mb-5">
            In special designed venues; HealthEdu join both parties and facilitate good learning environment for the 
            expected outcomes. The Company has a network of qualified professionals able to instruct a class and deliver the best
             of high learning skills for health professionals. 

            This Company has both face to face training and online based CPD Courses for Health Professionals in East Africa to
             get enrolled and enjoy the benefits of online learning. 
        <div class="media mb-4">
          <i class="ti-user text-primary font-size-30 mt-2"></i>
          <div class="media-body pl-3">
            <h4 class="h5">ONLINE COURSES</h4>
            <p>
            Online courses are organized by Health specialist locally and internationally. The courses are accredited locally and start us face 
            to face and are transformed to online to allow many other health professionals who have not been to attend to access them. 
            </p>
          </div>
        </div>
        <div class="media mb-4">
          <i class="ti-basketball text-primary font-size-30 mt-2"></i>
          <div class="media-body pl-3">
            <h4 class="h5">ONSITE TRAINING </h4>
            <p>
            Some courses need practicals definitely e.g. Basic Life Support and First Aid. These sessions are 
            also organized to make sure that the organization is delivering the best quality service.
            </p>
          </div>
        </div>
      </div> <!-- END col-lg-6 ml-auto-->
      <div class="col-lg-5 mb-4 mr-auto text-center">
        <img class="wow fadeInRight w-100 rounded" src="assets/img/360x300/4.jpg" alt="">
      </div> 
    </div> <!-- END row-->
    </div> <!-- END container-->
   </section>
   
   
   
   <section class="padding-y-100 bg-cover bg-center jarallax" data-dark-overlay="6" style="background: url(assets/img/1920/550_2.jpg) no-repeat;">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5 col-md-7 mr-auto text-white my-3">
          <h4 class="text-primary font-weight-semiBold">
            enhance you career with HealthEdu.
          </h4>
          <h2>
            Learn a New Skill Online, on Your Time and get a certificate
          </h2>
          <a href="signup.html" class="btn btn-primary mt-3">join for free</a>
        </div>
        <div class="col-lg-4 col-md-5 my-3">
          <div class="card px-4 py-5 text-center">
            <h4 class="text-primary">
              Subscribe to our Newsletter  
            </h4>
            <p class="mb-4">
              Get the latest news and update from HealthEdu  
            </p>
           <div class="input-group input-group--focus mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white ti-user"></span>
              </div>
              <input type="text" class="form-control border-left-0 pl-0" placeholder="Full Names ">
            </div>
           <div class="input-group input-group--focus mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white ti-email"></span>
              </div>
              <input type="email" class="form-control border-left-0 pl-0" placeholder="Email">
            </div>
           
            <button class="btn btn-block btn-primary">Subscribe</button>
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
              It is great to see that Health Professionals can get courses from different corners of 
              the country and abroad. I felt honored to make a course of Patient Centered Approach for this 
              Organization, and glad that it helped participants. 
Congratulations

              </p>
              <img class="iconbox iconbox-xxl mx-auto my-3" src="assets/img/avatar/umale.jpg" alt="">
              <h6 class="mb-0">
              Jovial Thomas Ntawukuriryayo
              </h6>
              <p class="font-size-14 text-gray mb-0">
              Physical Therapy Practitioner, Public Health Officer.
              </p>
            </div>
          </div>
          
          <div class="col-md-4 mt-5">
            <div class="card height-100p text-center px-4 py-5 shadow-v2">
              <p>
              Online services have been transforming lives, Health Professionals are also encouraged to benefit from this platform. I have been able to develop a course on Medical Biorisk Assessment and Management and it helped many participants,
               it’s up to us to develop the country and we have all it takes to move forward! 
              </p>
              <img class="iconbox iconbox-xxl mx-auto my-3" src="assets/img/avatar/umale.jpg" alt="">
              <h6 class="mb-0">
              Celestin Musabyumuremyi 
              </h6>
              <p class="font-size-14 text-gray mb-0">
              Biomedical Laboratory Specialist
              </p>
            </div>
          </div>
          
          <div class="col-md-4 mt-5">
            <div class="card height-100p text-center px-4 py-5 shadow-v2">
              <p>
              With this innovative platform, health professionals working in a remote area an all access the best quality courses that customized to the need of health providers in Rwanda. A course on Peer Influence & Behavior and course on Neuro Anatomy % Behavior 
              I developed; joined the struggle to build the capacity of health Providers in Rwanda.
              </p>
              <img class="iconbox iconbox-xxl mx-auto my-3" src="assets/img/avatar/ufemale.jpg" alt="">
              <h6 class="mb-0">
              Mukansanga Marie Chantal 
              </h6>
              <p class="font-size-14 text-gray mb-0">
              Clinical Psychology Specialist 
              </p>
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
        <p class="text-white-0_5 mb-0">&copy; 2019 HealthEdu ltd. All rights reserved. designed by <a href="https://sagesalvio.000webhostapp.com" target="_blunk">DIA Lab</a></p>
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