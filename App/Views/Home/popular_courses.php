<?php 
$PopularCourses=$admin->getPublicCourses(3);
$teacher_id=$function->extract_array($PopularCourses,"assigned_teacher");
$teacherInfo=$user->getUserPersonalInfo($teacher_id);
$teacher_names=$function->extract_array($teacherInfo,"names");
?>
<section class="padding-y-100 bg-light-v5">
  <div class="container">
    <div class="row">
     
      <div class="col-12 text-center">
        <h2 class="mb-4">
          Popular Courses
        </h2>
        <div class="width-3rem height-4 rounded bg-primary mx-auto"></div>
      </div> 
      <?php 
      foreach ($PopularCourses as $key => $course) {
        $course_url='course?name='.$course['title'].'&key='.$function->generateHash().'&course_id='.$course['id'];
        ?>
        <div class="col-md-4 mt-5">
          <div class="card wow slideInUp" data-wow-delay=".1s">
            <img class="card-img-top" src="assets/img/school/4.jpg" alt="">
            <div class="padding-30">
             
              <div class="d-flex justify-content-between">
                <div class="media align-items-center">
                  <img src="assets/img/avatar/4.jpg" alt="" class="iconbox mr-2">
                  <div class="media-body">
                    by <a href="#" class="text-primary">
                      <?php echo $teacher_names; ?>
                    </a>
                  </div>
                </div>
                <a href="#" class="btn btn-opacity-primary iconbox iconbox-sm">
                  <i class="ti-heart"></i>
                </a>
              </div>
              <a href="<?php echo $course_url; ?>">
                <h2 class="h4 my-3">
                  <?php echo $course['title']; ?>
                </h2>
              </a>
              <p>
                <?php echo substr(htmlspecialchars_decode($course['summary']),0,100); ?>
              </p>
              <a href="<?php echo $course_url; ?>" class="btn btn-outline-primary mt-2">Go to course</a>
            </div>
          </div>
        </div>
        <?php
      }
      ?>      


      <div class="col-12 text-center marginTop-60">
        <a href="#" class="btn btn-primary btn-lg">
          See All Courses
        </a>
      </div>
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>