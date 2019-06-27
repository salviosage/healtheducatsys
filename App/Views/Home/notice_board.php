<?php 
$Courses=$admin->loadCourses('ACTIVE');
//var_dump($Courses);
?>
<div class="col-lg-4 mt-5 mt-md-0">
  <div class="card shadow-v2 z-index-5" data-offset-top-xl="-160">
    <div class="card-header bg-primary text-white border-bottom-0">
      <span class="lead font-semiBold text-uppercase">
        Notice Board
      </span>
    </div>
    <?php 
    $counter=0;
    foreach ($Courses as $key => $value) {
      $course_url='course-details?name='.$value['title'].'&key='.$function->generateHash().'&course_id='.$value['id'];
      if($counter<4){
        ?>
        <div class="p-4 border-bottom wow fadeInUp">
          <p class="text-primary mb-1">
            <?php 
            echo $function->string_date_format($value['timestamp']);
            ?>
          </p>
          <a href="<?php echo $course_url; ?>">
            <?php echo $value['title']; ?>
          </a>
        </div> 
        <?php
      }
      $counter++;
    }
    ?>       
    <div class="p-4">
      <a href="#" class="btn btn-link pl-0">
        View All Notices
      </a>
    </div>
  </div>
</div>