<?php 
class Query extends Database{

	protected function select($query){
		$conn=$this->connect();
		$result=array();
		$statement=$conn->query($query) or die($conn->error);
		while ($row=$statement->fetch_assoc()) {
			$result[]=$row;
		}

		return $result;
	}

	//insert function
	protected function insert($query){
		$statement=$this->connect()->query($query);

		return $statement;
	}
	protected function insertRecord($query){
		$conn=$this->connect();
		$result = $conn->query($query) or die($conn->error);
		return $result;
	}
	//update function
	protected function update($query){
		$conn=$this->connect();
		$statement=$conn->query($query) or die($conn->error);

		return $statement;
	}

	//rows counter
	protected function rows($query){
		$statement=$this->connect()->query($query);
		$numRows=$statement->num_rows;

		return $numRows;
	}
}
?>