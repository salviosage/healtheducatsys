<div class="tab-pane fade show" id="Home" role="tabpanel">
 <div class="p-3">
    <div class="tab-pane fade show" id="Home" role="tabpanel">
        <section class="paddingBottom-100">
            <div class="container">
            
             <div class="row">
                <div class="col-lg-9 marginTop-30">
                  <h1>
                    <?php echo $name; ?>
                  </h1>
                  <div class="row mt-3">
                    <div class="col-lg-3 col-md-6 my-2">
                      <div class="media border-right height-100p">
                        <div class="media-body">
                          <span class="text-gray d-block">Instructor:</span>
                          <a href="#" class="h6">J
                            <?php echo $admin->getTeacherField($function->extract_array($courseInfo,'assigned_teacher'),'names'); ?>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 my-2">
                      <div class="border-right height-100p">
                        <span class="text-gray d-block">Categories:</span>
                        <a href="#" class="h6">Development</a>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 my-2">
                      <div class="text-md-right height-100p">
                        <h2 class="font-weight-bold text-primary mb-2">
                          <?php echo $function->extract_array($courseInfo,'course_price').' RWF'; ?>
                        </h2>
                        <?php 
                        //check if student have already requested this course
                        $hasRequested=$admin->isCourseRequested($course_id,USER_ID);
                        if(!$hasRequested){
                          ?>
                          <a id="btn_request_course" course="<?php echo $course_id; ?>" class="btn btn-primary" student="<?php echo USER_ID; ?>">Take Course</a>
                          <?php
                        }else{
                          //check if it has been approved
                          $approve_state=$admin->isRequestedApproved($course_id,USER_ID);
                          if($approve_state){
                            ?>
                            <a course="<?php echo $course_id; ?>" class="btn btn-info" student="<?php echo USER_ID; ?>" style="background: #337AB7;color: #fff;">
                              <i class="fa fa-check"></i> Start Learning
                            </a>
                            <?php
                          }else{
                            ?>
                            <a course="<?php echo $course_id; ?>" class="btn btn-danger disabled" student="<?php echo USER_ID; ?>" >Request Sent</a>
                            <?php
                          }
                        }
                        ?>
                      </div>
                    </div>
                  </div> <!-- END row-->
                  <div class="col-lg-12">
                    <?php 
                      $image_url='learn/Courses/'.$function->extract_array($courseInfo,'path');
                    ?>
                    <img src="<?php echo $image_url; ?>" class='responsive'>
                  </div>                                
                  <div class="col-12 mt-4">
                   <ul class="nav tab-line tab-line tab-line--3x border-bottom mb-5" role="tablist">
                     <li class="nav-item">
                      <a class="nav-link active" data-toggle="tab" href="#tabDescription" role="tab" aria-selected="true">
                        Description
                      </a>
                     </li>
                     <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#tabCurriculum" role="tab" aria-selected="true">
                        Curriculum
                      </a>
                     </li>
                     <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#tabInstructors" role="tab" aria-selected="true">
                        Instructors
                      </a>
                     </li>
                     <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#tabReviews" role="tab" aria-selected="true">
                        Reviews
                      </a>
                     </li>
                   </ul>
                    <div class="tab-content">
                      <div class="tab-pane fade show active" id="tabDescription" role="tabpanel">
                        <h4>
                          Course Description
                        </h4>
                        <p>
                          <?php echo htmlspecialchars_decode($function->extract_array($courseInfo,'summary')); ?>
                        </p>                                      
                        <div class="row mt-5">
                         <div class="col-12">
                           <h4>
                            What Will I Learn?
                          </h4>
                         </div>
                          <div class="col-md-12 my-2">
                            <ul class="list-unstyled list-style-icon list-icon-check">
                              <?php 
                              foreach ($Tolearn as $key => $value) {
                                ?>
                                <li>
                                  <?php echo $value['to_learn']; ?>
                                </li>
                                <?php
                              }
                              ?>
                              
                            </ul>
                          </div>                                         
                          <div class="col-md-6 my-2">
                           <h4>
                             Course Requirments
                           </h4>
                            <ul class="list-unstyled list-style-icon list-icon-bullet">
                              <li>Learn how to captivate your audience</li>
                              <li>Take your business / job to the next level</li>
                              <li>Overcome the fear of public speaking</li>
                              <li>Learn how to captivate your audience</li>
                              <li>Take your business / job to the next level</li>
                            </ul>
                          </div> 
                          
                          <div class="col-md-6 my-2">
                           <h4>
                             Who is the Target Audience?
                           </h4>
                            <ul class="list-unstyled list-style-icon list-icon-bullet">
                              <li>Learn how to captivate your audience</li>
                              <li>Take your business / job to the next level</li>
                              <li>Overcome the fear of public speaking</li>
                              <li>Learn how to captivate your audience</li>
                              <li>Take your business / job to the next level</li>
                            </ul>
                          </div> 
                        </div> <!-- END row-->
                      </div> <!-- END tab-pane-->
                      
                      <div class="tab-pane fade" id="tabCurriculum" role="tabpanel">
                      <div id="accordionCurriculum">
          
      
                        
      
                        <div class="list-group-item">
                          <span class="row">
                            <span class="col-9 col-md-8" href="#">
                              <i class="ti-control-play small mr-1 text-primary"></i>
                              Creating A Full Webpage
                            </span>
                            <span class="col-3 col-md-2 ml-auto text-right">7:12</span>
                          </span>
                        </div>
      
                        <div class="list-group-item">
                          <span class="row">
                            <span class="col-9 col-md-8" href="#">
                              <i class="ti-files small mr-1 text-primary"></i>
                              Accessing Elements - Files
                            </span>
                            <span class="col-3 col-md-2 ml-auto text-right">4:07</span>
                          </span>
                        </div>
      
                        <div class="list-group-item">
                          <span class="row">
                            <span class="col-9 col-md-8" href="#">
                              <i class="ti-control-play small mr-1 text-primary"></i>
                              Responding To A Click
                            </span>
                            <span class="col-3 col-md-2 ml-auto text-right">4:07</span>
                          </span>
                        </div>
      
                        <div class="list-group-item">
                          <span class="row">
                            <span class="col-9 col-md-8" href="#">
                              <i class="ti-control-play small mr-1 text-primary"></i>
                              Changing Website Content - Files
                            </span>
                            <span class="col-3 col-md-2 ml-auto text-right">4:07</span>
                          </span>
                        </div>
          
                   
          
                        </div> <!-- END accordion-->
                      </div> <!-- END tab-pane -->
                      
                      
                      <div class="tab-pane fade" id="tabInstructors" role="tabpanel">
                        <h4 class="mb-4">
                          About Instructors
                        </h4>
                        <?php include VIEWS.'Course/instructor.php'; ?>  
                      </div> <!-- END tab-pane -->
                      
                     
                      
                    </div> <!-- END tab-content-->
                </div> <!-- END col-12 -->
                </div> <!-- END col-lg-9 -->
                
               
               
             </div> <!-- END row-->
            </div> <!-- END container-->
          </section>
     
    </div>
 </div>
</div>