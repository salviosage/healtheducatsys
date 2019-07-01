<?php 
require 'const.php';
require APP_URL;
require AUTH_URL;
require AUTH_CONST;
if(isset($_GET['course'])){
	$course_id=$function->sanitize($_GET['course']);
	$courseInfo=$admin->getCourseInfo($course_id);
	if(count($courseInfo)){
		//get Course Credits
		$correct_answer_counter=0;
		$questions_counter=0;
		$courseModules=$admin->courseModules($course_id);
		if(count($courseModules)>0){
			//get Module Quiz
			foreach ($courseModules as $key => $module) {
				//get Module Quiz
				$Quiz=$admin->getQuiz($module['id']);
				$quiz_id=$function->extract_array($Quiz,'id');
				//Quiz Questions
				$Questions=$admin->getQuizQuestions($quiz_id);
				foreach ($Questions as $key => $question) {
					$questions_counter++;
					$userAnswers=$admin->getQuestionAnswer($question['id'],USER_ID);
					$user_answer=$function->extract_array($userAnswers,"answer");
					$user_answer=strtolower($user_answer);
					$user_answer=$function->getLastCharacter($user_answer);
					$correct_answer=$question['correct'];
					$correct_answer=$function->getLastCharacter(strtolower($correct_answer));
					if($user_answer==$correct_answer){
						$correct_answer_counter=$correct_answer_counter+1;
						//echo 'Quiz: <strong></strong> '.$quiz_id.' ,'.$question['question'].' (<strong>'.$correct_answer.' : '.$user_answer.'</strong>)<br>';
					}else{
						?>
<!-- 						<p style="border:1px solid red;padding: 5px;">
							<?php 
							//echo 'Quiz: <strong></strong> '.$quiz_id.' ,'.$question['question'].' (<strong>'.$correct_answer.' : '.$user_answer.'</strong>)<br>';
							?>
						</p> -->
						<?php
					}
				}
				//echo "<br>".$correct_answer_counter;
			}
		}else{
			backHome();
		}
	}else{
		backHome();
	}
}else{
	backHome();
}
function backHome(){
	?>
	<script type="text/javascript">window.location="home";</script>
	<?php
}
$answer_rate=(100/$questions_counter);
$per_centage=round($answer_rate * $correct_answer_counter).' %';
$course_name=$function->extract_array($courseInfo,"title");
$credit_no=$function->extract_array($courseInfo,"credit_no").' CPD Credits';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		//window.print();
	</script>
	<style type="text/css">
		#div_body{
			background: url(assets/img/cert.jpg);
			background-repeat: no-repeat;
			background-size: 160%;
			background-position: center;
			/*background-position: center;*/
		}
	</style>
</head>
<body>
<center>
<style>
.signature, .title { 
float:left;
  border-top: 1px solid #000;
  width: 200px; 
  text-align: center;
}
</style>
<div id="div_body" style="width:800px; height:650px; padding:5px; text-align:center; border: 10px solid #787878">
<div style="width:750px; height:600px; padding:10px; text-align:center; border: 5px solid #787878">
	<span style="margin: 10px;">on <?php echo date('d-m-Y'); ?></span><br><br>
	<img src="assets/img/logo-white.png">
       <span style="font-size:50px; font-weight:bold;background: #009966;padding: 10px;color: #Fff;margin-top: 10px;">Certificate of Completion</span>
       <br><br>
       <span style="font-size:20px"><i>This is to certify that</i></span><br>
       <br>
       <span style="font-size:30px"><b><?php echo USER_NAMES; ?></b></span><br/>
       <span style="font-size:20px"><i>has completed the course</i></span> <br/>
       <span style="font-size:30px;color: #0066ff;"><?php echo $course_name; ?></span>
       <sub>
       	 <strong><?php echo $credit_no; ?></strong>
       </sub><br>
       <span style="font-size:20px">with score of <b><?php echo $per_centage; ?></b></span><br/><br>
       <span style="font-size:20px"><i>Completed Date</i></span><br>
       <span style="font-size:18px"><i><?php echo date('d-M-Y'); ?></i></span><br>
<table style="margin-top:20px;float:right;margin-right: 32%;">
<tr>
<td><span><b>Jean damascene Hakizima</b></td>
</tr>
<tr>
<td style="width:200px;float:right;border:0;border-bottom:1px solid #000;"></td>
</tr>
<tr>
	<td>
		<span style="font-weight: bold;text-align: center;">
			<center>Managing Director</center>
		</span>
	</td>
</tr>
<tr>
<td style="text-align:center">
	<img src="assets/img/sign.png" style="width: 150px;">
</td>
</tr>
<tr>
	<td>
		<img src="assets/img/logo-white.png" onclick="window.print();" style="margin-left: 40px;">
	</td>
</tr>
</table>
</div>
</div>
</center>
</body>
</html>