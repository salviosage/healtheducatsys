<?php 

class Activity extends Execute{

	public function save_login_logs($user_ip,$attempt_time,$attempt_date){
		$array=array("user_ip"=>$user_ip,"failed"=>1,"total_attempts"=>1,"attempt_time"=>$attempt_time,"attempt_date"=>$attempt_date);
		return $this->multi_insert(Tables::failed_logins(),$array);
	}
	//check returning ip address
	public function check_ip_address($user_ip){
		$credentials=array("user_ip"=>$user_ip);
		$result=$this->multi_select(Tables::failed_logins(),$credentials);
		$status=false;
		foreach ($result as $key => $value) {
			if($value['user_ip']==$user_ip){
				$status=true;
			}else{
				$status=false;
			}
		}
		return $status;
	}
	//get total attempts
	public function get_total_attempts($user_ip){
		$credentials=array("user_ip"=>$user_ip);
		$result=$this->select_multi_clause(Tables::failed_logins(),$credentials);
		$total_attempts=0;
		foreach ($result as $key => $value) {
			$total_attempts=(int)$value['total_attempts'];
		}
		return $total_attempts;
	}
	//save theme color
	public function saveTheme($user_id,$theme_color,$change_date){
		$array=array("user_id"=>$user_id,"theme_color"=>$theme_color,"status"=>1,"change_date"=>$change_date);
		return $this->multi_insert(Tables::themes(),$array);
	}
	//get user theme
	public function getUserTheme($user_id){
		$credentials=array("user_id"=>$user_id);
		$result=$this->select_multi_clause(Tables::themes(),$credentials);
		$theme_color='';
		foreach ($result as $key => $value) {
			$theme_color=$value['theme_color'];
		}
		return $theme_color;
	}
	//check if user have change his/her theme
	public function checkUserTheme($user_id){
		$credentials=array("user_id"=>$user_id);
		$result=$this->multi_select(Tables::themes(),$credentials);
		if(count($result)>0){
			return true;
		}else{
			return false;
		}
	}
	public function updateUserTheme($user_id,$theme_color,$change_date){
		$where=array("user_id"=>$user_id);
		$array=array("theme_color"=>$theme_color,"change_date"=>$change_date);
		return $this->query_update(Tables::themes(),$where,$array);
	}
	
}
$activity=new Activity();
?>