<?php 

class Tables {
	public function users(){
		return 'system_users';
	}
	public function courses(){
		return 'courses';
	}
	public function credits(){
		return 'course_credits';
	}
	public function quiz(){
		return 'credit_quiz';
	}
	public function questions(){
		return 'questions';
	}
	public function failed_logins(){
		return 'failed_logins';
	}

	//fields section
	public function user_email(){
		return 'email';
	}
	public function user_phone(){
		return 'phone';
	}
	public function themes(){
		return 'theme_colors';
	}
}
$tables=new Tables();
?>