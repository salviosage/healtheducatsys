<?php 

class Alternate extends Database{
	var $conn;
	public function __construct(){
		$conn=$this->connect();
	}
	public function alter(){
		$conn=$this->connect();
        $sql = "SELECT * FROM failed_logins";
        $result = $conn->query($sql) or die($conn->error);
        return $result;
	}
}
$alter=new Alternate();
?>