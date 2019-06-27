<div class="tab-pane fade show active" id="Home" role="tabpanel">
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
                    <div class="col-lg-6 col-md-6 my-2">
                      <div class="media border-right height-100p">
                        <div class="media-body">
                          <span class="text-gray d-block">Instructor:</span>
                          <a href="#" class="h6">J
                            <?php echo $admin->getTeacherField($function->extract_array($courseInfo,'assigned_teacher'),'names'); ?>
                          </a>
                        </div>
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
                   <ul class="nav tab-line nav-justified tab-line tab-line--3x border-bottom mb-5" role="tablist">
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
                        </div> <!-- END row-->
                      </div> <!-- END tab-pane-->
                      
                      <div class="tab-pane fade" id="tabCurriculum" role="tabpanel">
                      <div id="accordionCurriculum">
                        <?php 
                        $Modules=$admin->courseModules($course_id);
                        //var_dump($Modules);
                        foreach ($Modules as $key => $value) {
                           ?>
                            <div class="list-group-item">
                              <span class="row">
                                <span class="col-9 col-md-8" href="#">
                                  <i class="ti-control-play small mr-1 text-primary"></i>
                                   <?php echo $value['credit']; ?>
                                </span>
                              </span>
                            </div>
                           <?php
                        }
                        ?>      
                        </div> <!-- END accordion-->
                      </div> <!-- END tab-pane -->
                      
                      
                      <div class="tab-pane fade" id="tabInstructors" role="tabpanel">
                        <h4 class="mb-4">
                          About Instructors
                        </h4>
                        <?php //include VIEWS.'Course/instructor.php'; ?>  
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