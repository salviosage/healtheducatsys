<?php 
require 'const.php';
require APP_URL;
require AUTH_URL;
require AUTH_CONST;
$correct_answer_counter=0;
$Questions=$admin->getQuizQuestions(5);
foreach ($Questions as $key => $value) {
	$userAnswer=$admin->getQuestionAnswer($value['id'],USER_ID);
	$user_answer=$function->extract_array($userAnswer,"answer");
	$correct_answer=$function->extract_array($Questions,"correct");
	if($correct_answer==$user_answer){
		$correct_answer_counter=$correct_answer_counter+1;
	}
}
$questions_counter=count($Questions);
$answer_rate=(100/$questions_counter);
$per_centage=$answer_rate * $correct_answer_counter.' %';
//var_dump($Questions);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		window.print();
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
       <span style="font-size:50px; font-weight:bold;background: #009966;padding: 10px;color: #Fff;margin-top: 10px;">Certificate of Completion</span>
       <br><br>
       <span style="font-size:25px"><i>This is to certify that</i></span>
       <br><br>
       <span style="font-size:30px"><b><?php echo USER_NAMES; ?></b></span><br/><br/>
       <span style="font-size:25px"><i>has completed the course</i></span> <br/><br/>
       <span style="font-size:30px;color: #0066ff;">Java Essential Training</span> <br/><br/>
       <span style="font-size:20px">with score of <b><?php echo $per_centage; ?></b></span> <br/><br/><br/><br/>
       <span style="font-size:25px"><i>Completed Date</i></span><br>
       <span style="font-size:25px"><i><?php echo date('d-m-Y'); ?></i></span><br>
<table style="margin-top:40px;float:left">
<tr>
<td><span><b><?php echo USER_NAMES; ?></b></td>
</tr>
<tr>
<td style="width:200px;float:left;border:0;border-bottom:1px solid #000;"></td>
</tr>
<tr>
<td style="text-align:center"><span><b>Signature</b></td>
</tr>
</table>
<table style="margin-top:40px;float:right">
<tr>
<td><span><b>Jean damascene Hakizima</b></td>
</tr>
<tr>
<td style="width:200px;float:right;border:0;border-bottom:1px solid #000;"></td>
</tr>
<tr>
<td style="text-align:center"><span><b>Signature</b></td>
</tr>
<tr>
	<td>
		<img src="assets/img/logo-white.png">
	</td>
</tr>
</table>
</div>
</div>
</center>
</body>
</html>