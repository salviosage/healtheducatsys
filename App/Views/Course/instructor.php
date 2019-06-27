<?php 
$TeacherInfo=$user->getUserPersonalInfo($teacher_id);
$t_name=$function->extract_array($TeacherInfo,"names");
$t_p_id=$function->extract_array($TeacherInfo,"profession");
$profile_image=$function->extract_array($TeacherInfo,"profile_image");
?>
<div class="border-bottom mb-4 pb-4">
  <div class="d-md-flex mb-4">
    <a href="#">
      <?php 
        if($profile_image!=''){
          ?>
          <img class="iconbox iconbox-xxxl" src="learn/Uploads/Profiles/<?php echo $profile_image; ?>" alt="">
          <?php
        }else{
          ?>
          <img class="iconbox iconbox-xxxl" src="assets/img/avatar.png" alt="">
          <?php
        }
      ?>
      
    </a>
    <div class="media-body ml-md-4 mt-4 mt-md-0">
      <h6>
        <a href="instructor-full-profile.html">
          <?php echo $t_name; ?>
        </a>  
      </h6>
      <p class="mb-2">
        <i class="ti-world mr-2"></i><?php echo $t_p_id; ?>
      </p>
    </div>
  </div>
  <h6>
    Experience as Web Developer
  </h6>
  <p>
    Investig ationes demons travge vunt lectores legee lrus quodk legunt saepius claritas est conctetur adip sicing. Dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standad dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it make type specimen book. It has survived not only five centuries.
  </p>
</div> 