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
}
$user=new User();
?>