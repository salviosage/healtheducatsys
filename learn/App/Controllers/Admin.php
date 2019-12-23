<?php 
class Admin extends Execute{
	private $allowed_status=array("ACTIVE","SUBMITTED","ENDED","PENDING");
	private $users_types=array(1,2,3,4,5);

	public function getFieldValue($table,$field_name,$id_name,$id_value){
		$sql="SELECT ".$field_name." FROM ".$table." WHERE ".$id_name."=".$id_value;
		$result=$this->querying($sql);
		$field_value='';
		foreach ($result as $key => $value) {
			$field_value=$value[$field_name];
		}
		return $field_value;
	}
	public function changeFieldValue($table,$field_name,$field_value,$id_name,$id_value){
		$array=array($field_name=>$field_value);
		$where=array($id_name=>$id_value);
		return $this->query_update($table,$where,$array);
	}
	//register teacher
	public function registerTeacher($names,$email,$password,$phone,$address,$degree,$profession,$token){
		$array=array("names"=>$names,"email"=>$email,"password"=>$password,"phone"=>$phone,"user_type"=>2,"verified"=>0,"verification_code"=>mt_rand(10,10000),"address"=>$address,"status"=>0,"degree"=>$degree,"profession"=>$profession,"token"=>$token);
		return $this->multi_insert(Tables::users(),$array);
	}
	//register student
	public function registerStudent($names,$email,$password,$phone,$address,$degree,$profession,$token){
		$array=array("names"=>$names,"email"=>$email,"password"=>$password,"phone"=>$phone,"user_type"=>3,"verified"=>1,"verification_code"=>mt_rand(10,10000),"address"=>$address,"status"=>1,"degree"=>$degree,"profession"=>$profession,"token"=>$token);
		return $this->multi_insert(Tables::users(),$array);
	}
	//save course
	public function saveCourse($title,$price,$teacher,$summary,$current_date,$course_token){
		$array=array("title"=>$title,"course_price"=>$price,"assigned_teacher"=>$teacher,"summary"=>$summary,"status"=>'ACTIVE',"regDate"=>$current_date,"token"=>$course_token);
		return $this->multi_insert(Tables::courses(),$array);
	}
	public function editCourse($course_id,$title,$price,$teacher,$summary,$current_date){
		$array=array("title"=>$title,"course_price"=>$price,"assigned_teacher"=>$teacher,"summary"=>$summary,"status"=>'ACTIVE',"regDate"=>$current_date);
		$where=array("id"=>$course_id);
		return $this->query_update(Tables::courses(),$where,$array);
	}
	//load available courses
	public function loadCourses($status){
		$sql='';
		if($status=='*'){
			$sql="SELECT * FROM ".Tables::courses()." WHERE status!='DELETED' ORDER BY id DESC LIMIT 50";
		}elseif(in_array(strtoupper($status), $this->allowed_status)){
			$sql="SELECT * FROM ".Tables::courses()." WHERE status=\"$status\" ORDER BY id DESC LIMIT 50";
		}else{
			$sql="SELECT * FROM ".Tables::courses()." ORDER BY id DESC LIMIT 50";	
		}

		return $this->querying($sql);	
	}
	public function getPublicCourses($limit){
		$sql="SELECT * FROM ".Tables::courses()." WHERE status='ACTIVE' ORDER BY id LIMIT ".$limit;
		return $this->querying($sql);
	}
	//load course instructor
	public function unverifiedTeachers(){
		$sql="SELECT * FROM ".Tables::users()." WHERE user_type=2 AND verified=0 ORDER BY names ASC";
		return $this->querying($sql);

	}
	public function verifiedTeachers(){
		$sql="SELECT * FROM ".Tables::users()." WHERE user_type=2 AND (verified=1 AND status=1) ORDER BY names ASC";
		return $this->querying($sql);

	}
	//verify reg instructor
	public function verifyRegTeacher($teacher_id){
		$array=array("verified"=>1,"status"=>1);
		$where=array("id"=>$teacher_id);
		return $this->query_update(Tables::users(),$where,$array);
	}
	public function clientsList(){
		$sql="SELECT * FROM ".Tables::users()." WHERE user_type=3 AND (verified=1 AND status=1) ORDER BY names ASC";
		return $this->querying($sql);

	}
	public function saveTeacher($names,$email,$phone,$status){
		$array=array("names"=>$names,"email"=>$email,"password"=>'123456',"phone"=>$phone,"user_type"=>2,"verified"=>1,"verification_code"=>mt_rand(10,10000),"status"=>$status);
		return $this->multi_insert(Tables::users(),$array);
	}
	public function saveUser($names,$email,$phone,$password,$status,$token,$save_date){
		$array=array("names"=>$names,"email"=>$email,"password"=>$password,"phone"=>$phone,"user_type"=>4,"verified"=>1,"verification_code"=>mt_rand(1000,10000),"status"=>$status,"token"=>$token,"save_date"=>$save_date);
		return $this->multi_insert(Tables::users(),$array);
	}
	public function getTeacherField($teacher_id,$field_name){
		$array="SELECT * FROM ".Tables::users()." WHERE user_type=2 AND id=\"$teacher_id\"";
		$result=$this->querying($array);
		$field_value='';
		foreach ($result as $key => $value) {
			$field_value=$value[$field_name];
		}
		return $field_value;
	}
	public function loadCourseInfo($course_id){
		$sql="SELECT * FROM ".Tables::courses()." WHERE id=\"$course_id\" LIMIT 1";
		return $this->querying($sql);
	}
	public function getSystemTeachers($status){
		$sql='';
		if($status=='*'){
			$sql="SELECT * FROM ".Tables::users()." WHERE user_type=2";
		}elseif(in_array(strtoupper($status), $this->allowed_status)){
			$sql="SELECT * FROM ".Tables::users()." WHERE status=\"$status\" AND user_type=2";
		}
		$sql.=" ORDER BY id DESC";
		return $this->querying($sql);
	}
	//load assigned courses
	public function loadTeacherCourses($teacher_id){
		$sql="SELECT * FROM ".Tables::courses()." WHERE assigned_teacher=\"$teacher_id\" ORDER BY id DESC LIMIT 50";
		return $this->querying($sql);
	}
	//load users
	public function loadUsers($user_type,$status){
		$sql='SELECT * FROM '.Tables::users();
		if(in_array($user_type, $this->users_types)){
			$sql.=" WHERE user_type=\"$user_type\"";
		}
		if(in_array($status, $this->users_types)){
			$sql.=" AND status=\"$status\"";
		}
		$sql.=" ORDER BY id DESC LIMIT 50";
		return $this->querying($sql);
	}
	//save course credits
	public function saveCourseCredits($course_id,$teacher_id,$title,$summary,$attachment,$current_date,$credit_type,$video_url){
		$array=array("course_id"=>$course_id,"teacher_id"=>$teacher_id,"credit"=>$title,"summary"=>$summary,"attachment"=>$attachment,"status"=>'ACTIVE',"save_date"=>$current_date,"credit_type"=>$credit_type,"video_url"=>$video_url);
		return $this->multi_insert(Tables::credits(),$array);
	}
	//load course credits
	public function getCourseCredits($course_id,$teacher_id){
		$sql="SELECT * FROM ".Tables::credits()." WHERE course_id=\"$course_id\" AND teacher_id=\"$teacher_id\" ORDER BY id DESC LIMIT 50";
		return $this->querying($sql);
	}
	public function getCourseInfo($course_id){
		$sql="SELECT * FROM ".Tables::courses()." WHERE id=\"$course_id\" OR token=\"$course_id\" AND status!='DELETED' LIMIT 1";
		return $this->querying($sql);
	}
	public function courseModules($course_id){
		$sql="SELECT * FROM ".Tables::credits()." WHERE course_id=\"$course_id\" AND status!='DELETED' ORDER BY id ASC LIMIT 50";
		return $this->querying($sql);
	}
	//save credit quiz
	public function saveQuiz($credit,$title,$summary,$current_date){
		$array=array("credit_id"=>$credit,"title"=>$title,"summary"=>$summary,"save_date"=>$current_date);
		return $this->multi_insert(Tables::quiz(),$array);
	}
	//load credit quiz
	public function getQuiz($credit){
		$sql="SELECT * FROM ".Tables::quiz()." WHERE credit_id=\"$credit\" ORDER BY id DESC LIMIT 50";
		return $this->querying($sql);
	}
	//load quiz questions and answers
	public function getQuizQuestions($quiz){
		$sql="SELECT * FROM ".Tables::questions()." WHERE quiz_id=\"$quiz\" ORDER BY id ASC LIMIT 50";
		return $this->querying($sql);
	}
	//get question correct answer
	public function getCorrectAnswer($question_id){
		$sql="SELECT correct FROM ".Tables::questions()." WHERE id=\"$question_id\" LIMIT 1";
		$result=$this->querying($sql);
		$correct_answer="";
		foreach ($result as $key => $value) {
			$correct_answer=$value['correct'];
		}
		return $correct_answer;
	}
	//save question
	public function saveQuestion($quiz_id,$question,$answer1,$answer2,$answer3,$answer4,$answer5,$current_date){
		$array=array("quiz_id"=>$quiz_id,"question"=>$question,"answer1"=>$answer1,"answer2"=>$answer2,"answer3"=>$answer3,"answer4"=>$answer4,"answer5"=>$answer5,"status"=>'ACTIVE',"save_date"=>$current_date);
		return $this->multi_insert(Tables::questions(),$array);
	}
	//choose correct answer
	public function correctAnswer($question_id,$field_name){
		$array=array("correct"=>$field_name);
		$where=array("id"=>$question_id);
		return $this->query_update(Tables::questions(),$where,$array);
	}
	//get users profession categories
	public function getProfessionDegree($type){
		$sql="";
		if($type==1){
			$sql="SELECT * FROM users_profession ORDER BY name ASC ";
		}elseif($type==2){
			$sql="SELECT * FROM users_degree ORDER BY name ASC ";
		}
		
		return $this->querying($sql);
	}
	//get profession name from id
	public function getProfDegreeFromId($table,$prof_id){
		$sql="SELECT name FROM ".$table." WHERE id=\"$prof_id\" LIMIT 1 ";
		$result=$this->querying($sql);
		$prof='';
		foreach ($result as $key => $value) {
			$prof=$value['name'];
		}
		return $prof;
	}
	//requesting course
	public function StudentCourseRequest(){
		$sql="SELECT * FROM ".Tables::requesting()." WHERE status!='DELETED' ORDER BY id DESC";
		return $this->querying($sql);
	}
	public function StudentCourse($student_id){
		$sql="SELECT * FROM ".Tables::requesting()." WHERE student_id=\"$student_id\" AND status!='DELETED' ORDER BY id DESC LIMIT 10";
		return $this->querying($sql);
	}
	public function StudentActiveCourse($student_id){
		$sql="SELECT * FROM ".Tables::requesting()." WHERE student_id=\"$student_id\" AND status='APPROVED'";
		return $this->querying($sql);
	}
	public function saveStudentCourseRequest($token,$course_id,$student_id,$save_date){
		$array=array("token"=>$token,"course_id"=>$course_id,"student_id"=>$student_id,"status"=>'REQUESTED',"request_date"=>$save_date);
		return $this->multi_insert(Tables::requesting(),$array);
	}
	//check if student have already requested a course
	public function isCourseRequested($course_id,$student_id){
		$sql="SELECT * FROM ".Tables::requesting()." WHERE course_id=\"$course_id\" AND student_id=\"$student_id\"";
		$result=$this->querying($sql);
		$status=false;
		if(count($result)>0){
			$status=true;
		}else{
			$status=false;
		}
		return $status;
	}
	public function isRequestedApproved($course_id,$student_id){
		$sql="SELECT * FROM ".Tables::requesting()." WHERE (course_id=\"$course_id\" AND student_id=\"$student_id\") AND status='APPROVED'";
		$result=$this->querying($sql);
		$status=false;
		if(count($result)>0){
			$status=true;
		}else{
			$status=false;
		}
		return $status;
	}
	public function saveToLearn($token,$course_id,$to_learn,$save_date){
		$array=array("token"=>$token,"course_id"=>$course_id,"to_learn"=>$to_learn,"status"=>'ACTIVE',"save_date"=>$save_date);
		return $this->multi_insert(Tables::to_learn(),$array);
	}
	public function getWhatToLearn($course_id){
		$sql="SELECT * FROM ".Tables::to_learn()." WHERE course_id=\"$course_id\" AND status!='DELETED' ORDER BY id DESC";
		return $this->querying($sql);
	}
	public function savePublicMessage($names,$email,$phone,$message,$token,$save_date){
		$array=array("token"=>$token,"names"=>$names,"email"=>$email,"phone"=>$phone,"message"=>$message,"status"=>'UNREAD',"sent_date"=>$save_date);
		return $this->multi_insert(Tables::contact_us(),$array);
	}
	public function getPublicMessage($status,$limit){
		$sql="SELECT * FROM ".Tables::contact_us();
		if($status!="*"){
			$sql.=" WHERE status=\"$status\" ";
		}
		$sql.=" ORDER BY id DESC";
		if($limit>0){
			$sql.=" LIMIT ".$limit;
		}
		
		//return $sql;
		return $this->querying($sql);
	}
	//save newsletter subscription
	public function saveNewsLetterSubscriber($names,$email,$token,$save_date){
		$array=array("token"=>$token,"full_names"=>$names,"email"=>$email,"status"=>'UNSEND',"save_date"=>$save_date);
		return $this->multi_insert(Tables::subscribers(),$array);
	}
	public function getNewsLetterSubscribers(){
		$sql="SELECT * FROM ".Tables::subscribers()." ORDER BY id DESC ";
		return $this->querying($sql);
	}
	///////////////// answer question ///////////////////////////////////////////////
	public function answerQuestion($user_id,$question,$answer,$token,$save_date){
		$array=array("user_id"=>$user_id,"token"=>$token,"question_id"=>$question,"answer"=>$answer,"status"=>'ANSWERED',"save_date"=>$save_date);
		return $this->multi_insert(Tables::answering(),$array);
	}
	public function updateAnswer($question,$answer,$user_id,$save_date){
		$array=array("answer"=>$answer,"save_date"=>$save_date);
		$where=array("question_id"=>$question,"user_id"=>$user_id);
		return $this->query_update(Tables::answering(),$where,$array);
	}
	public function getQuestionAnswer($question,$user_id){
		$sql="SELECT * FROM ".Tables::answering()." WHERE question_id=\"$question\" AND user_id=\"$user_id\"";
		return $this->querying($sql);
	}
	public function finishQuiz($token,$quiz_id,$user_id,$save_date){
		$array=array("token"=>$token,"quiz_id"=>$quiz_id,"user_id"=>$user_id,"status"=>'FINISHED',"save_date"=>$save_date);
		return $this->multi_insert(Tables::users_quiz(),$array);
	}
	//check user quiz if it is available
	public function isQuizAvailable($user_id,$quiz_id){
		$sql="SELECT * FROM ".Tables::users_quiz()." WHERE quiz_id=\"$quiz_id\" AND user_id=\"$user_id\"";
		$result=$this->querying($sql);
		$status=false;
		if(count($result)==0){
			$status=true;
		}else{
			$status=false;
		}
		return $status;
	}
	public function checkingemail($user_email){
		$sql="SELECT * FROM system_users WHERE email=\"$user_email\"";
		
		$result=$this->querying($sql);
		$status=false;
		if(count($result)==0){
			echo "<script>alert('this email have  been used with other user')";
		}else{
			$status=false;
		}
		return $status;
	}

}
$admin=new Admin();
?>