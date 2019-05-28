<?php 
if(isset($_GET['credit']) && $_GET['credit']!='' && isset($_GET['title']) && $_GET['title']!=''){
    $credit_id=$function->sanitize($_GET['credit']);
    $title=$function->sanitize($_GET['title']);
    //$addCreditUrl="?request=add_course_credit&title=".$title."&course=".$course_id;
    //load credit credits
    $Quizes=$admin->getQuiz($credit_id);
    $quiz_id=$function->extract_array($Quizes,"id");
    $quiz_title=$function->extract_array($Quizes,"title");
    $Questions=$admin->getQuizQuestions($function->extract_array($Quizes,"id"));
    $correct_answer=$function->extract_array($Questions,"correct");
}else{
    backHome();
}
function backHome(){
    ?>
    <script type="text/javascript">
        window.location='index?request=assigned_courses';
    </script>
    <?php
}
?>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive" style="border: none;">
            <h4 class="m-t-0 header-title"><b>Available Quizes (Questions and Answers)</b>
                <?php 
                if(count($Quizes)==0){
                    ?>
                    <button id="btnAddQuiz" credit="<?php echo $credit_id; ?>" title="<?php echo $title; ?>" class="btn btn-primary waves-effect waves-light pull-right">ADD NEW QUIZ</button>
                    <?php
                }
                ?>
                <button id="btnQuestions" quiz="<?php echo $quiz_id; ?>" title="<?php echo $quiz_title; ?>" class="btn btn-success waves-effect waves-light pull-right">ADD QUESTION & ANSWER</button>
            </h4>
            <p>Credit: <?php echo $title; ?></p>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-border panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Quiz:<?php echo $function->extract_array($Quizes,"title"); ?>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <p>
                              <?php echo htmlspecialchars_decode($function->extract_array($Quizes,"summary")); ?>  
                            </p>
                            <h3>Question & Answers</h3>
                            <?php 
                            if(count($Questions)>0){
                                ?>
                                <div id="accordion2" class="accordion" role="tablist" aria-multiselectable="true">
                                    <?php 
                                    $counter=1;
                                    foreach ($Questions as $key => $value) {
                                        ?>
                                        <div class="card">
                                            <div class="card-header" role="tab" id="headingOne">
                                                <h5 class="mb-0">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapse<?php echo $counter;?>" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                                                      <blockquote>
                                                          <?php echo '#'.$counter.' '.$value['question']; ?>
                                                      </blockquote>
                                                    </a>
                                                  </h5>
                                            </div>
                                            <div id="collapse<?php echo $counter;?>" class="collapse" role="tabpanel" aria-labelledby="headingOne" style="">
                                                <div class="card-body">
                                                    <ul  class="answers_list" class="list-group">
                                                        <?php
                                                        $correct_answer=$value['correct'];
                                                        if($correct_answer=='answer1'){
                                                            ?>
                                                            <li class="list-group-item active">
                                                                <?php echo $value['answer1']; ?>
                                                                <a question="<?php echo $value['id']; ?>" name="answer1" class="btn btn-success btn-xs pull-right answer1">
                                                                    <i class="fa fa-check"></i>
                                                                </a>
                                                            </li>
                                                            <?php
                                                        }else{
                                                            ?>
                                                            <li class="list-group-item">
                                                                <?php echo $value['answer1']; ?>
                                                                <a question="<?php echo $value['id']; ?>" name="answer1" class="btn btn-success btn-xs pull-right answer1">
                                                                    <i class="fa fa-check"></i>
                                                                </a>
                                                            </li>
                                                            <?php
                                                        }
                                                        ?>
                                                        <?php 
                                                        if($correct_answer=='answer2'){
                                                            ?>
                                                            <li class="list-group-item active">
                                                                <?php echo $value['answer2']; ?>
                                                                <a question="<?php echo $value['id']; ?>" name="answer2" class="btn btn-success btn-xs pull-right answer2">
                                                                    <i class="fa fa-check"></i>
                                                                </a>
                                                            </li>
                                                            <?php
                                                        }else{
                                                            ?>
                                                            <li class="list-group-item">
                                                                <?php echo $value['answer2']; ?>
                                                                <a question="<?php echo $value['id']; ?>" name="answer2" class="btn btn-success btn-xs pull-right answer2">
                                                                    <i class="fa fa-check"></i>
                                                                </a>
                                                            </li>
                                                            <?php
                                                        }
                                                        ?>
                                                        <?php 
                                                        if($correct_answer=='answer3'){
                                                            ?>
                                                            <li class="list-group-item active">
                                                                <?php echo $value['answer3']; ?>
                                                                <a question="<?php echo $value['id']; ?>" name="answer3" class="btn btn-success btn-xs pull-right answer3">
                                                                    <i class="fa fa-check"></i>
                                                                </a>
                                                            </li>
                                                            <?php
                                                        }else{
                                                            ?>
                                                            <li class="list-group-item">
                                                                <?php echo $value['answer3']; ?>
                                                                <a question="<?php echo $value['id']; ?>" name="answer3" class="btn btn-success btn-xs pull-right answer3">
                                                                    <i class="fa fa-check"></i>
                                                                </a>
                                                            </li>
                                                            <?php
                                                        }
                                                        ?>
                                                        <?php 
                                                        if($correct_answer=='answer4'){
                                                            ?>
                                                            <li class="list-group-item active">
                                                                <?php echo $value['answer4']; ?>
                                                                <a question="<?php echo $value['id']; ?>" name="answer4" class="btn btn-success btn-xs pull-right answer4">
                                                                    <i class="fa fa-check"></i>
                                                                </a>
                                                            </li>
                                                            <?php
                                                        }else{
                                                            ?>
                                                            <li class="list-group-item">
                                                                <?php echo $value['answer4']; ?>
                                                                <a question="<?php echo $value['id']; ?>" name="answer4" class="btn btn-success btn-xs pull-right answer4">
                                                                    <i class="fa fa-check"></i>
                                                                </a>
                                                            </li>
                                                            <?php
                                                        }
                                                        ?>
                                                        <?php 
                                                        if($correct_answer=='answer5'){
                                                            ?>
                                                            <li class="list-group-item active">
                                                                <?php echo $value['answer5']; ?>
                                                                <a question="<?php echo $value['id']; ?>" name="answer5" class="btn btn-success btn-xs pull-right answer5">
                                                                    <i class="fa fa-check"></i>
                                                                </a>
                                                            </li>
                                                            <?php
                                                        }else{
                                                            ?>
                                                            <li class="list-group-item">
                                                                <?php echo $value['answer5']; ?>
                                                                <a question="<?php echo $value['id']; ?>" name="answer5" class="btn btn-success btn-xs pull-right answer5">
                                                                    <i class="fa fa-check"></i>
                                                                </a>
                                                            </li>
                                                            <?php
                                                        }
                                                        ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        $counter++;
                                    }
                                    ?>
                                </div>
                                <?php
                            }else{
                                ?>
                                <div class="alert alert-danger">
                                    No Question and answers available on this Quiz.<b>You can add them using Above Button</b>
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