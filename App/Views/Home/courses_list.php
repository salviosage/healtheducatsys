<?php 
$available_courses=$admin->loadPublicCourses('ACTIVE');
?>
<section class="padding-y-100 bg-light-v5">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-5">
        <h2 class="mb-4">
          Browse Our Top Courses
        </h2>
        <div class="width-3rem height-4 rounded bg-primary mx-auto"></div>
      </div>
      
      <div class="col-12">
        
      <div class="tab-content">
       
        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
          <div class="row">
            <?php 
            foreach ($available_courses as $key => $course) {
              $image_url='learn/Courses/'.$course['path'];
              $course_url='course?name='.$course['title'].'&key='.$function->generateHash().'&course_id='.$course['id'];
              ?>
              <div class="col-lg-4 col-md-6 marginTop-30">
                <div class="card text-gray overflow-hidden height-100p shadow-v1">
                 <span class="ribbon-badge font-size-sm bg-success text-white">Best selling</span>
                  <img class="card-img-top" src="<?php echo $image_url; ?>" alt="">
                  <div class="card-body">
                    <a href="<?php echo $course_url; ?>" class="h5">
                      <?php echo $course['title']; ?>
                    </a>
                    <p class="my-3">
                      <i class="ti-user mr-2"></i>
                      <?php echo $admin->getTeacherField($course['assigned_teacher'],'names'); ?>
                    </p>
                    <ul class="list-unstyled ec-review-rating">
                      <li class="active"><i class="fas fa-star"></i></li>
                      <li class="active"><i class="fas fa-star"></i></li>
                      <li class="active"><i class="fas fa-star"></i></li>
                      <li class="active"><i class="fas fa-star"></i></li>
                      <li class="active"><i class="fas fa-star"></i></li>
                      <li class="text-gray">
                        <span>(4.9)</span>
                        <span>4578</span>
                      </li>
                    </ul>

                  </div>
                  <div class="card-footer media align-items-center justify-content-between">
                    <ul class="list-unstyled mb-0">
                      <li class="mb-1">
                        <i class="fa fa-book"></i>
                        <?php echo count($admin->getCourseCredits($course['id'],$course['assigned_teacher'])).' Credits'; ?>
                      </li>
                    </ul>
                    <h4 class="h5">
                      <span class="text-primary">
                        <?php echo $course['course_price'].' RWF'; ?>
                      </span>
                    </h4>
                  </div>
                </div>
              </div>
              <?php
            }
            ?>
          </div> <!-- END row-->
        </div> <!-- END tab-pane -->
        
        <div class="tab-pane fade" id="tab2" role="tabpanel">
          <div class="row">
            
            <div class="col-lg-4 col-md-6 marginTop-30">
              <div class="card text-gray overflow-hidden height-100p shadow-v1">
                <img class="card-img-top" src="assets/img/360x220/4.jpg" alt="">
                <div class="card-body">
                  <a href="course-details.html" class="h5">
                    Java 8 Essential Training For Beginners 
                  </a>
                  <p class="my-3">
                    <i class="ti-user mr-2"></i>
                    Anthony Brooks
                  </p>
                  <ul class="list-unstyled ec-review-rating">
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="text-gray">
                      <span>(4.9)</span>
                      <span>4578</span>
                    </li>
                  </ul>
                </div>
                <div class="card-footer media align-items-center justify-content-between">
                  <ul class="list-unstyled mb-0">
                    <li class="mb-1">
                      <i class="ti-headphone small mr-2"></i>
                      46 lectures
                    </li>
                    <li class="mb-1">
                      <i class="ti-time small mr-2"></i>
                      27.5 hours
                    </li>
                  </ul>
                  <h4 class="h5">
                    <span class="text-success">Free</span>
                  </h4>
                </div>
              </div>
            </div>
            
            <div class="col-lg-4 col-md-6 marginTop-30">
              <div class="card text-gray overflow-hidden height-100p shadow-v1">            
                <img class="card-img-top" src="assets/img/360x220/5.jpg" alt="">
                <div class="card-body">
                  <a href="course-details.html" class="h5">
                    Visual Basic Essential Training
                  </a>
                  <p class="my-3">
                    <i class="ti-user mr-2"></i>
                    Andrew Mead, John Doe
                  </p>
                  <ul class="list-unstyled ec-review-rating">
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="text-gray">
                      <span>(4.9)</span>
                      <span>4578</span>
                    </li>
                  </ul>
                </div>
                <div class="card-footer media align-items-center justify-content-between">
                  <ul class="list-unstyled mb-0">
                    <li class="mb-1">
                      <i class="ti-headphone small mr-2"></i>
                      46 lectures
                    </li>
                    <li class="mb-1">
                      <i class="ti-time small mr-2"></i>
                      27.5 hours
                    </li>
                  </ul>
                  <h4 class="h5 text-right">
                    <span class="text-primary d-block">$10</span>
                    <s class="small">$129</s>
                  </h4>
                </div>
              </div>
            </div>
            
            <div class="col-lg-4 col-md-6 marginTop-30">
              <div class="card text-gray overflow-hidden height-100p shadow-v1">
               <span class="ribbon-badge font-size-sm bg-info text-white">Trending</span>
                <img class="card-img-top" src="assets/img/360x220/3.jpg" alt="">
                <div class="card-body">
                  <a href="course-details.html" class="h5">
                    Programming Real-World Examples
                  </a>
                  <p class="my-3">
                    <i class="ti-user mr-2"></i>
                    Adam Kury
                  </p>
                  <ul class="list-unstyled ec-review-rating">
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="text-gray">
                      <span>(4.9)</span>
                      <span>4578</span>
                    </li>
                  </ul>
                </div>
                <div class="card-footer media align-items-center justify-content-between">
                  <ul class="list-unstyled mb-0">
                    <li class="mb-1">
                      <i class="ti-headphone small mr-2"></i>
                      46 lectures
                    </li>
                    <li class="mb-1">
                      <i class="ti-time small mr-2"></i>
                      27.5 hours
                    </li>
                  </ul>
                  <h4 class="h5">
                    <span class="text-primary">$249</span>
                  </h4>
                </div>
              </div>
            </div>
          </div> <!-- END row-->
        </div> <!-- END tab-pane -->
        
        <div class="tab-pane fade" id="tab3" role="tabpanel">
          <div class="row">
           
            <div class="col-lg-4 col-md-6 marginTop-30">
              <div class="card text-gray overflow-hidden height-100p shadow-v1">
               <span class="ribbon-badge font-size-sm bg-success text-white">Best selling</span>
                <img class="card-img-top" src="assets/img/360x220/1.jpg" alt="">
                <div class="card-body">
                  <a href="course-details.html" class="h5">
                    The Web Developer Bootcamp In Austin
                  </a>
                  <p class="my-3">
                    <i class="ti-user mr-2"></i>
                    Andrew Mead
                  </p>
                  <ul class="list-unstyled ec-review-rating">
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="text-gray">
                      <span>(4.9)</span>
                      <span>4578</span>
                    </li>
                  </ul>

                </div>
                <div class="card-footer media align-items-center justify-content-between">
                  <ul class="list-unstyled mb-0">
                    <li class="mb-1">
                      <i class="ti-headphone small mr-2"></i>
                      46 lectures
                    </li>
                    <li class="mb-1">
                      <i class="ti-time small mr-2"></i>
                      27.5 hours
                    </li>
                  </ul>
                  <h4 class="h5">
                    <span class="text-primary">$180</span>
                  </h4>
                </div>
              </div>
            </div>
            
            <div class="col-lg-4 col-md-6 marginTop-30">
              <div class="card text-gray overflow-hidden height-100p shadow-v1">            
                <img class="card-img-top" src="assets/img/360x220/2.jpg" alt="">
                <div class="card-body">
                  <a href="course-details.html" class="h5">
                    C++ Essential Training
                  </a>
                  <p class="my-3">
                    <i class="ti-user mr-2"></i>
                    Andrew Mead, John Doe
                  </p>
                  <ul class="list-unstyled ec-review-rating">
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="text-gray">
                      <span>(4.9)</span>
                      <span>4578</span>
                    </li>
                  </ul>
                </div>
                <div class="card-footer media align-items-center justify-content-between">
                  <ul class="list-unstyled mb-0">
                    <li class="mb-1">
                      <i class="ti-headphone small mr-2"></i>
                      46 lectures
                    </li>
                    <li class="mb-1">
                      <i class="ti-time small mr-2"></i>
                      27.5 hours
                    </li>
                  </ul>
                  <h4 class="h5 text-right">
                    <span class="text-primary d-block">$10</span>
                    <s class="small">$129</s>
                  </h4>
                </div>
              </div>
            </div>
            
            <div class="col-lg-4 col-md-6 marginTop-30">
              <div class="card text-gray overflow-hidden height-100p shadow-v1">
                <img class="card-img-top" src="assets/img/360x220/3.jpg" alt="">
                <div class="card-body">
                  <a href="course-details.html" class="h5">
                    Programming Real-World Examples
                  </a>
                  <p class="my-3">
                    <i class="ti-user mr-2"></i>
                    Adam Kury
                  </p>
                  <ul class="list-unstyled ec-review-rating">
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="text-gray">
                      <span>(4.9)</span>
                      <span>4578</span>
                    </li>
                  </ul>
                </div>
                <div class="card-footer media align-items-center justify-content-between">
                  <ul class="list-unstyled mb-0">
                    <li class="mb-1">
                      <i class="ti-headphone small mr-2"></i>
                      46 lectures
                    </li>
                    <li class="mb-1">
                      <i class="ti-time small mr-2"></i>
                      27.5 hours
                    </li>
                  </ul>
                  <h4 class="h5">
                    <span class="text-primary">$249</span>
                  </h4>
                </div>
              </div>
            </div>
            
            <div class="col-lg-4 col-md-6 marginTop-30">
              <div class="card text-gray overflow-hidden height-100p shadow-v1">
                <img class="card-img-top" src="assets/img/360x220/4.jpg" alt="">
                <div class="card-body">
                  <a href="course-details.html" class="h5">
                    Java 8 Essential Training For Beginners 
                  </a>
                  <p class="my-3">
                    <i class="ti-user mr-2"></i>
                    Anthony Brooks
                  </p>
                  <ul class="list-unstyled ec-review-rating">
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="text-gray">
                      <span>(4.9)</span>
                      <span>4578</span>
                    </li>
                  </ul>
                </div>
                <div class="card-footer media align-items-center justify-content-between">
                  <ul class="list-unstyled mb-0">
                    <li class="mb-1">
                      <i class="ti-headphone small mr-2"></i>
                      46 lectures
                    </li>
                    <li class="mb-1">
                      <i class="ti-time small mr-2"></i>
                      27.5 hours
                    </li>
                  </ul>
                  <h4 class="h5">
                    <span class="text-success">Free</span>
                  </h4>
                </div>
              </div>
            </div>
            
            <div class="col-lg-4 col-md-6 marginTop-30">
              <div class="card text-gray overflow-hidden height-100p shadow-v1">            
                <img class="card-img-top" src="assets/img/360x220/5.jpg" alt="">
                <div class="card-body">
                  <a href="course-details.html" class="h5">
                    Visual Basic Essential Training
                  </a>
                  <p class="my-3">
                    <i class="ti-user mr-2"></i>
                    Andrew Mead, John Doe
                  </p>
                  <ul class="list-unstyled ec-review-rating">
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="text-gray">
                      <span>(4.9)</span>
                      <span>4578</span>
                    </li>
                  </ul>
                </div>
                <div class="card-footer media align-items-center justify-content-between">
                  <ul class="list-unstyled mb-0">
                    <li class="mb-1">
                      <i class="ti-headphone small mr-2"></i>
                      46 lectures
                    </li>
                    <li class="mb-1">
                      <i class="ti-time small mr-2"></i>
                      27.5 hours
                    </li>
                  </ul>
                  <h4 class="h5 text-right">
                    <span class="text-primary d-block">$10</span>
                    <s class="small">$129</s>
                  </h4>
                </div>
              </div>
            </div>
            
            <div class="col-lg-4 col-md-6 marginTop-30">
              <div class="card text-gray overflow-hidden height-100p shadow-v1">
               <span class="ribbon-badge font-size-sm bg-info text-white">Trending</span>
                <img class="card-img-top" src="assets/img/360x220/3.jpg" alt="">
                <div class="card-body">
                  <a href="course-details.html" class="h5">
                    Programming Real-World Examples
                  </a>
                  <p class="my-3">
                    <i class="ti-user mr-2"></i>
                    Adam Kury
                  </p>
                  <ul class="list-unstyled ec-review-rating">
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="text-gray">
                      <span>(4.9)</span>
                      <span>4578</span>
                    </li>
                  </ul>
                </div>
                <div class="card-footer media align-items-center justify-content-between">
                  <ul class="list-unstyled mb-0">
                    <li class="mb-1">
                      <i class="ti-headphone small mr-2"></i>
                      46 lectures
                    </li>
                    <li class="mb-1">
                      <i class="ti-time small mr-2"></i>
                      27.5 hours
                    </li>
                  </ul>
                  <h4 class="h5">
                    <span class="text-primary">$249</span>
                  </h4>
                </div>
              </div>
            </div>
          </div> <!-- END row-->
        </div> <!-- END tab-pane -->
        
        <div class="tab-pane fade" id="tab4" role="tabpanel">
          <div class="row">
            
            <div class="col-lg-4 col-md-6 marginTop-30">
              <div class="card text-gray overflow-hidden height-100p shadow-v1">
                <img class="card-img-top" src="assets/img/360x220/4.jpg" alt="">
                <div class="card-body">
                  <a href="course-details.html" class="h5">
                    Java 8 Essential Training For Beginners 
                  </a>
                  <p class="my-3">
                    <i class="ti-user mr-2"></i>
                    Anthony Brooks
                  </p>
                  <ul class="list-unstyled ec-review-rating">
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="text-gray">
                      <span>(4.9)</span>
                      <span>4578</span>
                    </li>
                  </ul>
                </div>
                <div class="card-footer media align-items-center justify-content-between">
                  <ul class="list-unstyled mb-0">
                    <li class="mb-1">
                      <i class="ti-headphone small mr-2"></i>
                      46 lectures
                    </li>
                    <li class="mb-1">
                      <i class="ti-time small mr-2"></i>
                      27.5 hours
                    </li>
                  </ul>
                  <h4 class="h5">
                    <span class="text-success">Free</span>
                  </h4>
                </div>
              </div>
            </div>
            
            <div class="col-lg-4 col-md-6 marginTop-30">
              <div class="card text-gray overflow-hidden height-100p shadow-v1">            
                <img class="card-img-top" src="assets/img/360x220/5.jpg" alt="">
                <div class="card-body">
                  <a href="course-details.html" class="h5">
                    Visual Basic Essential Training
                  </a>
                  <p class="my-3">
                    <i class="ti-user mr-2"></i>
                    Andrew Mead, John Doe
                  </p>
                  <ul class="list-unstyled ec-review-rating">
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="text-gray">
                      <span>(4.9)</span>
                      <span>4578</span>
                    </li>
                  </ul>
                </div>
                <div class="card-footer media align-items-center justify-content-between">
                  <ul class="list-unstyled mb-0">
                    <li class="mb-1">
                      <i class="ti-headphone small mr-2"></i>
                      46 lectures
                    </li>
                    <li class="mb-1">
                      <i class="ti-time small mr-2"></i>
                      27.5 hours
                    </li>
                  </ul>
                  <h4 class="h5 text-right">
                    <span class="text-primary d-block">$10</span>
                    <s class="small">$129</s>
                  </h4>
                </div>
              </div>
            </div>
            
            <div class="col-lg-4 col-md-6 marginTop-30">
              <div class="card text-gray overflow-hidden height-100p shadow-v1">
               <span class="ribbon-badge font-size-sm bg-info text-white">Trending</span>
                <img class="card-img-top" src="assets/img/360x220/3.jpg" alt="">
                <div class="card-body">
                  <a href="course-details.html" class="h5">
                    Programming Real-World Examples
                  </a>
                  <p class="my-3">
                    <i class="ti-user mr-2"></i>
                    Adam Kury
                  </p>
                  <ul class="list-unstyled ec-review-rating">
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="text-gray">
                      <span>(4.9)</span>
                      <span>4578</span>
                    </li>
                  </ul>
                </div>
                <div class="card-footer media align-items-center justify-content-between">
                  <ul class="list-unstyled mb-0">
                    <li class="mb-1">
                      <i class="ti-headphone small mr-2"></i>
                      46 lectures
                    </li>
                    <li class="mb-1">
                      <i class="ti-time small mr-2"></i>
                      27.5 hours
                    </li>
                  </ul>
                  <h4 class="h5">
                    <span class="text-primary">$249</span>
                  </h4>
                </div>
              </div>
            </div>
          </div> <!-- END row-->
        </div> <!-- END tab-pane -->
        
        <div class="tab-pane fade" id="tab5" role="tabpanel">
          <div class="row">
           
            <div class="col-lg-4 col-md-6 marginTop-30">
              <div class="card text-gray overflow-hidden height-100p shadow-v1">
               <span class="ribbon-badge font-size-sm bg-success text-white">Best selling</span>
                <img class="card-img-top" src="assets/img/360x220/1.jpg" alt="">
                <div class="card-body">
                  <a href="course-details.html" class="h5">
                    The Web Developer Bootcamp In Austin
                  </a>
                  <p class="my-3">
                    <i class="ti-user mr-2"></i>
                    Andrew Mead
                  </p>
                  <ul class="list-unstyled ec-review-rating">
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="text-gray">
                      <span>(4.9)</span>
                      <span>4578</span>
                    </li>
                  </ul>

                </div>
                <div class="card-footer media align-items-center justify-content-between">
                  <ul class="list-unstyled mb-0">
                    <li class="mb-1">
                      <i class="ti-headphone small mr-2"></i>
                      46 lectures
                    </li>
                    <li class="mb-1">
                      <i class="ti-time small mr-2"></i>
                      27.5 hours
                    </li>
                  </ul>
                  <h4 class="h5">
                    <span class="text-primary">$180</span>
                  </h4>
                </div>
              </div>
            </div>
            
            <div class="col-lg-4 col-md-6 marginTop-30">
              <div class="card text-gray overflow-hidden height-100p shadow-v1">            
                <img class="card-img-top" src="assets/img/360x220/2.jpg" alt="">
                <div class="card-body">
                  <a href="course-details.html" class="h5">
                    C++ Essential Training
                  </a>
                  <p class="my-3">
                    <i class="ti-user mr-2"></i>
                    Andrew Mead, John Doe
                  </p>
                  <ul class="list-unstyled ec-review-rating">
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="text-gray">
                      <span>(4.9)</span>
                      <span>4578</span>
                    </li>
                  </ul>
                </div>
                <div class="card-footer media align-items-center justify-content-between">
                  <ul class="list-unstyled mb-0">
                    <li class="mb-1">
                      <i class="ti-headphone small mr-2"></i>
                      46 lectures
                    </li>
                    <li class="mb-1">
                      <i class="ti-time small mr-2"></i>
                      27.5 hours
                    </li>
                  </ul>
                  <h4 class="h5 text-right">
                    <span class="text-primary d-block">$10</span>
                    <s class="small">$129</s>
                  </h4>
                </div>
              </div>
            </div>
            
            <div class="col-lg-4 col-md-6 marginTop-30">
              <div class="card text-gray overflow-hidden height-100p shadow-v1">
                <img class="card-img-top" src="assets/img/360x220/3.jpg" alt="">
                <div class="card-body">
                  <a href="course-details.html" class="h5">
                    Programming Real-World Examples
                  </a>
                  <p class="my-3">
                    <i class="ti-user mr-2"></i>
                    Adam Kury
                  </p>
                  <ul class="list-unstyled ec-review-rating">
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="text-gray">
                      <span>(4.9)</span>
                      <span>4578</span>
                    </li>
                  </ul>
                </div>
                <div class="card-footer media align-items-center justify-content-between">
                  <ul class="list-unstyled mb-0">
                    <li class="mb-1">
                      <i class="ti-headphone small mr-2"></i>
                      46 lectures
                    </li>
                    <li class="mb-1">
                      <i class="ti-time small mr-2"></i>
                      27.5 hours
                    </li>
                  </ul>
                  <h4 class="h5">
                    <span class="text-primary">$249</span>
                  </h4>
                </div>
              </div>
            </div>
            
            <div class="col-lg-4 col-md-6 marginTop-30">
              <div class="card text-gray overflow-hidden height-100p shadow-v1">
                <img class="card-img-top" src="assets/img/360x220/4.jpg" alt="">
                <div class="card-body">
                  <a href="course-details.html" class="h5">
                    Java 8 Essential Training For Beginners 
                  </a>
                  <p class="my-3">
                    <i class="ti-user mr-2"></i>
                    Anthony Brooks
                  </p>
                  <ul class="list-unstyled ec-review-rating">
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="text-gray">
                      <span>(4.9)</span>
                      <span>4578</span>
                    </li>
                  </ul>
                </div>
                <div class="card-footer media align-items-center justify-content-between">
                  <ul class="list-unstyled mb-0">
                    <li class="mb-1">
                      <i class="ti-headphone small mr-2"></i>
                      46 lectures
                    </li>
                    <li class="mb-1">
                      <i class="ti-time small mr-2"></i>
                      27.5 hours
                    </li>
                  </ul>
                  <h4 class="h5">
                    <span class="text-success">Free</span>
                  </h4>
                </div>
              </div>
            </div>
            
            <div class="col-lg-4 col-md-6 marginTop-30">
              <div class="card text-gray overflow-hidden height-100p shadow-v1">            
                <img class="card-img-top" src="assets/img/360x220/5.jpg" alt="">
                <div class="card-body">
                  <a href="course-details.html" class="h5">
                    Visual Basic Essential Training
                  </a>
                  <p class="my-3">
                    <i class="ti-user mr-2"></i>
                    Andrew Mead, John Doe
                  </p>
                  <ul class="list-unstyled ec-review-rating">
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="text-gray">
                      <span>(4.9)</span>
                      <span>4578</span>
                    </li>
                  </ul>
                </div>
                <div class="card-footer media align-items-center justify-content-between">
                  <ul class="list-unstyled mb-0">
                    <li class="mb-1">
                      <i class="ti-headphone small mr-2"></i>
                      46 lectures
                    </li>
                    <li class="mb-1">
                      <i class="ti-time small mr-2"></i>
                      27.5 hours
                    </li>
                  </ul>
                  <h4 class="h5 text-right">
                    <span class="text-primary d-block">$10</span>
                    <s class="small">$129</s>
                  </h4>
                </div>
              </div>
            </div>
            
            <div class="col-lg-4 col-md-6 marginTop-30">
              <div class="card text-gray overflow-hidden height-100p shadow-v1">
               <span class="ribbon-badge font-size-sm bg-info text-white">Trending</span>
                <img class="card-img-top" src="assets/img/360x220/3.jpg" alt="">
                <div class="card-body">
                  <a href="course-details.html" class="h5">
                    Programming Real-World Examples
                  </a>
                  <p class="my-3">
                    <i class="ti-user mr-2"></i>
                    Adam Kury
                  </p>
                  <ul class="list-unstyled ec-review-rating">
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="text-gray">
                      <span>(4.9)</span>
                      <span>4578</span>
                    </li>
                  </ul>
                </div>
                <div class="card-footer media align-items-center justify-content-between">
                  <ul class="list-unstyled mb-0">
                    <li class="mb-1">
                      <i class="ti-headphone small mr-2"></i>
                      46 lectures
                    </li>
                    <li class="mb-1">
                      <i class="ti-time small mr-2"></i>
                      27.5 hours
                    </li>
                  </ul>
                  <h4 class="h5">
                    <span class="text-primary">$249</span>
                  </h4>
                </div>
              </div>
            </div>
          </div> <!-- END row-->
        </div> <!-- END tab-pane -->
        
      </div> <!-- END tab-content-->
      </div> <!-- END col-12 -->
      <div class="col-12 text-center mt-5">
        <a href="all-courses.html" class="btn btn-primary">explore all courses  </a>
      </div>
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>