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
	public function profession(){
		return 'users_profession';
	}
	public function degree(){
		return 'users_degree';
	}
	public function requesting(){
		return "courses_requesting";
	}
	public function to_learn(){
		return 'what_to_learn';
	}
	public function contact_us(){
		return 'contact_us';
	}
	public function subscribers(){
		return 'newsletter_subscribers';
	}
	public function answering(){
		return 'questions_answers';
	}
	public function users_quiz(){
		return "users_quiz";
	}
	public function checkingemail(){
		return "email";
	}
}
$tables=new Tables();
?>