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
              <?php echo $question['question'].' <font class="text-success">Correct Answer</font>'; ?>
            </blockquote>
          </a>
        </h4>
      </div>
      <?php include 'finished_questions.php'; ?>
    <?php
  }
}
?>
<div class="row">
  <div class="col-lg-12">
    <table class="table table-responsive">
      <thead>
        <tr>
          <th>
            Question
          </th>
          <th>
            Chosen Answer
          </th>
          <th>
            Correct Answer
          </th>
        </tr>
      </thead>
      <tbody>
        <?php 
        foreach ($Quiz as $key => $quiz) {
          $Questions=$admin->getQuizQuestions($quiz['id']);
          foreach ($Questions as $key => $question) {
            $QuestionAnswer=$admin->getQuestionAnswer($question['id'],USER_ID);
            $chosen_answer=$function->extract_array($QuestionAnswer,"answer");
            $correct_answer=$admin->getCorrectAnswer($question['id']);
            ?>
            <tr>
              <td>
                <?php echo $question['question']; ?>
              </td>
              <td>
                <span class="badge badge-info">
                  <?php echo $chosen_answer; ?>
                </span>
                
              </td>
              <td>
                <span class="badge badge-success">
                  <?php echo $correct_answer; ?>
                </span>
              </td>
            </tr>
            <?php
          }
        }
        ?>
      </tbody>
    </table>
  </div>
</div>