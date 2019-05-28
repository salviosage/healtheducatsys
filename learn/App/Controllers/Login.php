<?php 
class Login extends Execute{

	public function loginTable(){
		return "system_users";
	}

	public function ajax_login(){
		$email=$function->sanitize($_POST['email']);
		$password=$function->sanitize($_POST['password']);
	}

	public function validate_login($username = '', $password = ''){
		$credentials=array("email"=>$username,"password"=>$password);
		$status=false;
		$resultSet=$this->multi_select("system_users",$credentials);
		if(is_array($resultSet)){
			if(count($resultSet)>0){
				foreach ($resultSet as $key => $value) {
					if($value['email']==$username && $value['password']==$password){
						$status=true;
					}else{
						$status=false;
					}
				}
			}else{
				//login failed record
				$status=false;
			}
		}else{
			$status=false;
		}
		return $status;
	}
	public function session_data($username = '', $password = ''){
		$credentials=array("email"=>$username,"password"=>$password);
		$resultSet=$this->select_multi_clause("system_users",$credentials);
		return $resultSet;
	}
}
$login=new Login();
?>