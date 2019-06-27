<div id="<?php echo $question['id']; ?>" class="panel-collapse">
  <?php 
  $QuestionAnswer=$admin->getQuestionAnswer($question['id'],USER_ID);
  $chosen_answer=$function->extract_array($QuestionAnswer,"answer");
  $correct_answer=$admin->getCorrectAnswer($question['id']);
  //var_dump($correct_answer);
  //var_dump($chosen_answer);
  ?>
  <div class="panel-body">
    <ul class="questions_list" style="list-style: none;">
      <?php 
       if($correct_answer=="answer1"){
          ?>
          <li style="list-style: none;">
              <div class="radio">
                <label>
                  <input class="radio_answer" question="<?php echo $question['id']; ?>" answer="answer1" type="radio" name="optradio" style="padding: 5px;margin: 5px;"><?php echo $question['answer1'] ?>
                  <i class="fa fa-check text-success"></i>
                </label>
              </div>
          </li>
          <?php
       }elseif($correct_answer=="answer2"){
         ?>
          <li style="list-style: none;">
              <div class="radio">
                <label>
                  <input class="radio_answer" question="<?php echo $question['id']; ?>" answer="answer2" type="radio" name="optradio" style="padding: 5px;margin: 5px;"><?php echo $question['answer2'] ?>
                  <i class="fa fa-check text-success"></i>
                </label>
              </div>
          </li>
         <?php
       }elseif($correct_answer=="answer3"){
         ?>
          <li style="list-style: none;">
              <div class="radio">
                <label>
                  <input class="radio_answer" question="<?php echo $question['id']; ?>" answer="answer3" type="radio" name="optradio" style="padding: 5px;margin: 5px;"><?php echo $question['answer3'] ?>
                  <i class="fa fa-check text-success"></i>
                </label>
              </div>
          </li>
         <?php
       }elseif($correct_answer=="answer4"){
         ?>
          <li style="list-style: none;">
              <div class="radio">
                <label>
                  <input class="radio_answer" question="<?php echo $question['id']; ?>" answer="answer4" type="radio" name="optradio" style="padding: 5px;margin: 5px;"><?php echo $question['answer4'] ?>
                  <i class="fa fa-check text-success"></i>
                </label>
              </div>
          </li>
         <?php
       }elseif($correct_answer=="answer5"){
         ?>
          <li style="list-style: none;">
              <div class="radio">
                <label>
                  <input class="radio_answer" question="<?php echo $question['id']; ?>" answer="answer5" type="radio" name="optradio" style="padding: 5px;margin: 5px;"><?php echo $question['answer5'] ?>
                  <i class="fa fa-check text-success"></i>
                </label>
              </div>
          </li>
         <?php
       }
      ?>
    </ul>
  </div>
</div>