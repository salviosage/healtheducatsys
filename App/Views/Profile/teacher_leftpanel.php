<?php
$email=$function->extract_array($personalInfo,"email");
$names=$function->extract_array($personalInfo,"names");
$phone=$function->extract_array($personalInfo,"phone");
$address=$function->extract_array($personalInfo,"address");
$profile_image=$function->extract_array($personalInfo,"profile_image");

$profession_id=$function->extract_array($personalInfo,"profession");
$profession_array=$user->getUserProffession($profession_id);
$profession=$function->extract_array($profession_array,"name");

$teacherCourses=$admin->loadTeacherCourses(USER_ID);
?>
<div class="col-lg-4 mt-4">
  <div class="card shadow-v1">
    <div class="card-header text-center border-bottom pt-5 mb-4">
      <?php 
      if($profile_image!=''){
        ?>
        <img class="rounded-circle mb-4" src="learn/Uploads/Profiles/<?php echo $profile_image; ?>" width="200" height="200" alt="">
        <?php
      }
      ?>
     <h4>
       <?php echo $names; ?>
     </h4>
      <p>
        <?php 
        echo $profession;
        ?>
      </p>
      <ul class="list-inline mb-0">
        <li class="list-inline-item m-2">
          <i class="ti-user text-primary"></i>
          <span class="d-block">Students</span>
          <span class="h6">0</span>
        </li>
        <li class="list-inline-item m-2">
          <i class="ti-book text-primary"></i>
          <span class="d-block">Courses</span>
          <span class="h6">
            <?php echo count($teacherCourses); ?>
          </span>
        </li>
        <li class="list-inline-item m-2">
          <i class="ti-star text-primary"></i>
          <span class="d-block">Reviews</span>
          <span class="h6">0</span>
        </li>
      </ul>
    </div>
    <div class="card-body border-bottom">
      <ul class="list-unstyled">
        <li class="mb-3">
          <span class="d-block">Email address:</span>
          <a class="h6" href="mailto:<?php echo $email; ?>">
            <?php echo $email; ?>
          </a>
        </li>
        <li class="mb-3">
          <span class="d-block">Phone:</span>
          <a class="h6" href="mailto:<?php echo $email; ?>">
            <?php echo $phone; ?>
          </a>
        </li>
        <li class="mb-3">
          <span class="d-block">Location:</span>
          <a class="h6" href="#">
             <?php echo $address; ?>
          </a>
        </li>
      </ul>
    </div>
    <div class="card-footer">
     <p>
       Social Profile:
     </p>
      <ul class="list-inline mb-0">
        <li class="list-inline-item">
          <a href="#" class="btn btn-outline-facebook iconbox iconbox-sm">
            <i class="ti-facebook"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a href="#" class="btn btn-outline-twitter iconbox iconbox-sm">
            <i class="ti-twitter"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a href="#" class="btn btn-outline-google-plus iconbox iconbox-sm">
            <i class="ti-google"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a href="#" class="btn btn-outline-linkedin iconbox iconbox-sm">
            <i class="ti-linkedin"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>