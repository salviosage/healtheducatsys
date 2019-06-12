<?php 
class User extends Execute{

	public function getUsername($user_id){
		$credentials=array("id"=>$user_id);
		$result_set=$this->select_multi_clause(Tables::users(),$credentials);
		$username='';
		foreach ($result_set as $key => $value) {
			$username=$value['username'];
		}
		return $username;
	}
	public function getUserField($user_id,$field_name){
		$credentials=array("id"=>$user_id);
		$result_set=$this->select_multi_clause(Tables::users(),$credentials);
		$field_value='';
		foreach ($result_set as $key => $value) {
			$field_value=$value[$field_name];
		}
		return $field_value;
	}
	public function getUserPersonalInfo($user_id){
		$sql="SELECT * FROM ".Tables::users()." WHERE id=\"$user_id\" LIMIT 1";
		return $this->querying($sql);
	}
	public function getUserProffession($pro_id){
		$sql="SELECT * FROM users_profession WHERE id=\"$pro_id\"";
		return $this->querying($sql);
	}
	public function updateProfileImage($user_id,$image_path){
		$array=array("profile_image"=>$image_path);
		$where=array("id"=>$user_id);
		return $this->query_update(Tables::users(),$where,$array);
	}
	public function validatePwd($user_id,$current_pwd){
		$sql="SELECT * FROM ".Tables::users()." WHERE id=\"$user_id\" AND password=\"$current_pwd\"";
		$status=false;
		$result_set=$this->querying($sql);
		if(count($result_set)>0){
			$status=true;
		}else{
			$status=false;
		}
		return $status;
	}
	public function updateUserPassword($user_id,$new_pwd,$current_date){
		$array=array("password"=>$new_pwd,"save_date"=>$current_date);
		$where=array("id"=>$user_id);
		return $this->query_update(Tables::users(),$where,$array);
	}
	public function updateuserProfile($user_id,$user_names,$user_email,$user_phone,$user_address,$current_date){
		$array=array("names"=>$user_names,"email"=>$user_email,"phone"=>$user_phone,"address"=>$user_address,"save_date"=>$current_date);
		$where=array("id"=>$user_id);
		return $this->query_update(Tables::users(),$where,$array);
	}
}
$user=new User();
?>