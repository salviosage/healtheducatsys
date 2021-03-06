<?php require 'const.php'; ?>
<!DOCTYPE html>
<html lang="en">
  

<head>
    <meta charset="UTF-8">
    
    <!-- Title-->
    <title>Contact | topugrade ltd </title>
    
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

<div class="py-5 bg-cover" data-dark-overlay="6" >
  <div class="container">
    <h2 class="text-white">
      Contact
    </h2>
    <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0">  
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item">Contact</li>
    </ol>
  </div>
</div>
    
   
   
   <div class="py-5 shadow-v2 position-relative">
     <div class="container">
       <div class="row">
        
         <div class="col-lg-4 col-md-6 mt-4">
           <div class="media">
             <span class="iconbox iconbox-md bg-primary text-white"><i class="ti-mobile"></i></span>
             <div class="media-body ml-3">
              <h5 class="mb-0">(+250) 789044439</h5> 
              <p>Call Us (8AM-10PM)</p>
             </div>
           </div>
         </div>
        
         <div class="col-lg-4 col-md-6 mt-4">
           <div class="media">
             <span class="iconbox iconbox-md bg-primary text-white"><i class="ti-email"></i></span>
             <div class="media-body ml-3">
              <a href="mailto:support@echotheme.com" class="h5">topupgradeltd@gmail.com</a>
              <p>Call Us (8AM-10PM)</p>
             </div>
           </div>
         </div>
        
         <div class="col-lg-4 col-md-6 mt-4">
           <div class="media">
             <span class="iconbox iconbox-md bg-primary text-white"><i class="ti-location-pin"></i></span>
             <div class="media-body ml-3">
              <h5 class="mb-0">TELECOM HOUSE,
                  </h5> 
              <p>6th Floor, K-Lab - 250 Startup</p>
             </div>
           </div>
         </div>
         
       </div>
     </div>
   </div>
   
   
   
   
  <section class="padding-y-100 bg-light-v2">
  <div class="container">
    <div class="row">
     <div class="col-12 text-center mb-5">
        <h2>
          Send Message
        </h2>
        <div class="width-4rem height-4 bg-primary my-2 mx-auto rounded"></div>
      </div>
      <div class="col-12 text-center">
        <form id="frm_contact_us" class="card p-4 p-md-5 shadow-v1">
          <p class="lead mt-2">
          Your message will be sent to us automatically via E-mail and an Agent on duty will directly assist you. Feel free to ask any thing you feel can help.
          </p>
          <div class="row mt-5 mx-0">
            <div class="col-md-4 mb-4">
              <input id="names" name="names" type="text" class="form-control" placeholder="Name" required>
            </div>
            <div class="col-md-4 mb-4">
              <input id="email" name="email" type="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="col-md-4 mb-4">
              <input id="phone" name="phone" type="number" class="form-control" placeholder="Phone number">
            </div>
            <div class="col-12">
              <textarea id="message" name="message" type="email" class="form-control" placeholder="Message" rows="7" required></textarea>
              <button type="submit" class="btn btn-primary mt-4">Send Message</button>
              <p id="para_responspe" style="background: #009966;color: white;border-radius: 5px;padding: 10px;display: none;margin: 10px;">
                
              </p>
            </div>
          </div>
        </form>  
      </div>
      
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>
<?php include UTILS.'footer.php'; ?>
<div class="scroll-top">
  <i class="ti-angle-up"></i>
</div>
<?php include SCRIPT; ?>
</body>
</html>