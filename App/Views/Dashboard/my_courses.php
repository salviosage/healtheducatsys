<?php 
$MyCourses=$admin->StudentCourse(USER_ID);
//var_dump($MyCourses);
?>
<div class="col-lg-9 mt-5">
  <?php 
   if(count($MyCourses)>0){
     foreach ($MyCourses as $key => $course) {
      //get course info
      $CourseInfo=$admin->getCourseInfo($course['course_id']);
      $course_name=$function->extract_array($CourseInfo,"title");
        if($course['status']=='APPROVED'){
          ?>
            <div class="d-md-flex justify-content-between align-items-center bg-white shadow-v1 rounded mb-4 py-4 px-5 hover:transformLeft">
              <div class="media align-items-center">
                <div class="text-center border-right pr-4">
                  <p class="mb-0 text-gray">
                    <strong>
                      <?php echo $function->string_date_format($course['timestamp']); ?>
                    </strong>
                  </p>
                </div>
                <div class="media-body p-4">
                 <p class="mb-1 text-gray">
                  <i class="ti-file"></i>
                   Course
                 </p>
                  <a href="notice-details.html" class="h5">
                    <?php echo $course_name; ?>
                  </a>
                </div>
              </div>
              <a href="#" class="btn btn-outline-primary">Start Course</a> 
            </div> 
          <?php
        }elseif($course['status']=='REQUESTED'){
          ?>
            <div class="d-md-flex justify-content-between align-items-center bg-white shadow-v1 rounded mb-4 py-4 px-5 hover:transformLeft">
              <div class="media align-items-center">
                <div class="text-center border-right pr-4">
                  <p class="mb-0 text-gray">
                    <strong>
                      <?php echo $function->string_date_format($course['timestamp']); ?>
                    </strong>
                  </p>
                </div>
                <div class="media-body p-4">
                 <p class="mb-1 text-gray">
                  <i class="ti-file"></i>
                   Course
                 </p>
                  <a href="notice-details.html" class="h5">
                    <?php echo $course_name; ?>
                  </a>
                </div>
              </div>
              <a href="#" class="btn btn-outline-danger">Wait for Approval</a> 
            </div> 
          <?php
        }
     }
   }else{
    ?>
    <div class="alert alert-danger">
      <strong>Oops!</strong> You haven't subscribed to any course.Please go and check Courses to start learning
    </div>
    <?php
   }
  ?>  
  <div class="text-center mt-5">
    <a href="#" class="btn btn-outline-primary btn-icon">
      <i class="ti-reload mr-2"></i>
      load more 
    </a>
  </div>
</div> 