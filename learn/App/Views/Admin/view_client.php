<?php 
if(isset($_GET['client']) && $_GET['client']!=''){
	$client_id=$_GET['client'];
	$PersonalInfo=$user->getUserPersonalInfo($client_id);
	if(count($PersonalInfo)>0){
		//var_dump($PersonalInfo);
	}else{
		$function->backHome();
	}
}else{
	$function->backHome();
}
$names=$function->extract_array($PersonalInfo,"names");
$email=$function->extract_array($PersonalInfo,"email");
$phone=$function->extract_array($PersonalInfo,"phone");
$degree=$function->extract_array($PersonalInfo,"degree");
$profession=$function->extract_array($PersonalInfo,"profession");
$status=$function->extract_array($PersonalInfo,"status");
$Profession=$admin->getFieldValue(Tables::profession(),"name","id",$profession);
$Degree=$admin->getFieldValue(Tables::degree(),"name","id",$degree);

$StudentCourse=$admin->StudentActiveCourse($client_id);
//var_dump($StudentCourse);
?>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
        	<h3><b>Information for :<?php echo $names; ?></b></h3>
        </div>
		<table class="table table-bordered m-0">
			<thead>
				<tr>
					<th>Names</th>
					<th>E-mail</th>
					<th>Phone</th>
					<th>Profession</th>
					<th>Degree</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php echo $names; ?></td>
					<td><?php echo $email; ?></td>
					<td><?php echo $phone; ?></td>
					<td><?php echo $Profession; ?></td>
					<td>
						<?php echo $Degree ?>
					</td>
					<td>
						<span class="badge badge-success">
							ACTIVE
						</span>
					</td>
				</tr>
			</tbody>
		</table>
		<?php 
		 if(count($StudentCourse)>0){
		 	?>
        <div class="card-box table-responsive">
        	<h4><b>Courses for :<?php echo $names; ?></b></h4>
        </div>
			<table class="table table-bordered m-0">
				<thead>
					<tr>
						<th>Course</th>
						<th>Credits No</th>
						<th>Score</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					foreach ($StudentCourse as $key => $request) {
						$courseInfo=$admin->getCourseInfo($request['course_id']);
						$course_name=$function->extract_array($courseInfo,"title");
						$credit_no=$function->extract_array($courseInfo,"credit_no").' CPD Credits';
						?>
						<tr>
							<td><?php echo $course_name; ?></td>
							<td><?php echo $credit_no; ?></td>
							<td><?php echo $phone; ?></td>
							<td>
								<span class="badge badge-success">
									TAKEN
								</span>
							</td>
						</tr>
						<?php
					}
					?>
				</tbody>
			</table>
		 	<?php
		 }
		?>
    </div>
</div>