<?php 
//get Course Modules
$Modules=$admin->courseModules($course_id);
//var_dump($Modules);
?>
<section class="padding-y-5 border-bottom border-light">
  <div class="panel-group" id="accordion">
      <?php 
       foreach ($Modules as $key => $value) {
        $attach_url='learn/Uploads/'.$value['attachment'];
        $Quiz=$admin->getQuiz($value['id']);
        $quiz_id=$function->extract_array($Quiz,"id");
        $is_quiz_available=$admin->isQuizAvailable(USER_ID,$quiz_id);
         ?>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="nav-link bg-light rounded text-center p-3 active show" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $value['id']+100; ?>">
                  <?php
                  $credit_title="";
                  if($is_quiz_available){
                    $credit_title=$value['credit'];
                  }else{
                    $credit_title=$value['credit'].' <i class="fa fa-check text-danger"></i> <sub class="text-danger">Module Done</sub>';
                  }
                  echo $credit_title;
                  ?>
                </a>
              </h4>
            </div>
            <div id="<?php echo $value['id']+100; ?>" class="panel-collapse collapse in">
              <div class="panel-body">
                <?php 
                 echo htmlspecialchars_decode($value['summary']);

                ?>
                <a href="<?php echo $attach_url; ?>" target="_blank">
                  <i class="fa fa-file"></i> Click Here to View and Download Attached Document
                </a>
                <div class="row">
                  <div class="col-lg-12">
                      <div class="panel-group">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a class="nav-link bg-light rounded text-center p-1 active show" data-toggle="collapse" href="#<?php echo $value['id']+1000; ?>">Module Quiz</a>
                            </h4>
                          </div>
                          <div id="<?php echo $value['id']+1000; ?>" class="panel-collapse collapse">
                            <div class="panel-body">
                              <?php 
                              $Quiz=$admin->getQuiz($value['id']);
                              $quiz_id=$function->extract_array($Quiz,"id");
                              $quiz_title=$function->extract_array($Quiz,"title");
                              $quiz_summary=$function->extract_array($Quiz,"summary");
                              $is_quiz_available=$admin->isQuizAvailable(USER_ID,$quiz_id);
                               if(count($Quiz)>0){
                                if($is_quiz_available){
                                  ?>
                                    <h4>
                                      <?php echo $quiz_title; ?>
                                    </h4>
                                    <p>
                                      <?php echo htmlspecialchars_decode($quiz_summary); ?>
                                    </p>

                                  <?php
                                  //get Quiz question
                                  foreach ($Quiz as $key => $quiz) {
                                    $Questions=$admin->getQuizQuestions($quiz['id']);
                                    foreach ($Questions as $key => $question) {
                                      ?>
                                        <div class="panel-heading">
                                          <h4 class="panel-title">
                                            <a data-toggle="collapse" href="#<?php echo $question['id']; ?>">
                                              <blockquote class="p-1">
                                                <?php echo $question['question']; ?>
                                              </blockquote>
                                            </a>
                                          </h4>
                                        </div>
                                        <?php include VIEWS.'Course/quiz.php'; ?>
                                      <?php
                                    }
                                  }
                                  ?>
                                        <a quiz="<?php echo $quiz_id; ?>" class="btn btn-primary btn_finish_quiz" href="#">
                                          FINISH QUIZ
                                        </a>
                                  <?php
                                }else{
                                  include VIEWS.'Modules/finished_quiz.php';
                                }
                               }else{
                                ?>
                                  <div class="alert alert-danger">
                                    <strong>oops!</strong>No Quiz currently available.Please contact system Admin.
                                  </div>
                                <?php
                               }
                              ?>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         <?php
       }
      ?>
  </div> 
</section>
