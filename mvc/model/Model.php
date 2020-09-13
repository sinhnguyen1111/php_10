<?php
	include_once 'connect.php';
	include_once 'connection.php';
class Model
{
	protected $table;
	var $conn;
	function __construct(){
		$conection = new connection();
		$this->conn = $conection->connect();
	}

	function select($table){
		$query = "SELECT * FROM $this->table";
	// echo $query;
	// $conn = connect();

		
		$result = $this->conn->query($query);
	// var_dump($result);
		$data = array();
		while($row  = $result->fetch_assoc()){
			$data[]=$row;
		}
	return $data;
	}

	function insert($table,$data){
		$query = "INSERT INTO $this->table";

		$string_1='';
		$string_2='';
		$i=0;
		foreach ($data as $column => $value) {
			$i++;
			$string_1.=$column;
			if($i!=count($data)){
				$string_1.=",";

			}

			$string_2 .="'".$value."'";
			if($i!=count($data)){
				$string_2.=",";
			}

		}
		$string = "(".$string_1.")". ' VALUES '."(".$string_2.")";
		$query = $query.$string;
		// echo $query;

		$result = $this->conn->query($query);
	return $result;
	}

	function update($table,$data){
		$query = "UPDATE $table SET ";
		$string_1='';
		$string_2='';

		$i=0;
		foreach ($data as $column => $value) {
			$i++;
			$string_1 .= $column."="."'".$value."'";
			if($i!=count($data)){
				$string_1 .= ",";

			}
			$string_2 = " WHERE id =".$data['id'];
		}
		$string = $string_1.$string_2;
		$query = $query.$string;
		
		$result = $this->conn->query($query);

		return $result;
		// UPDATE categories SET name='vtv3',description='hsh',slug='tin-thoi-su-vtv3' WHERE categories.id=54
	}

	function delete($table,$id){
		$query = "DELETE FROM $table WHERE id=".$id;

		$result =$this->conn->query($query);
		return $result;
	}
	public function detail($table){
		$id = $_GET['id'];
		$query = "SELECT * FROM $table WHERE id = $id";
		$result =$this->conn->query($query);
		$row = $result->fetch_assoc();
		return $row;
	}
}


?>