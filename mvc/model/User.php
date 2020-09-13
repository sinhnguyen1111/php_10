<?php
require_once 'model/Model.php';
class User extends Model
{
	var $table ='users';
	function getAll(){
		return $this->select($this->table);
	}

	public function deleteUser($id)
	{
		return $this->delete($this->table,$id);
	}

	public function createUser($data){
		return $this->insert($this->table,$data);
	}
	// public function detailUser(){
	// 	return $this->detail($this->table);
	// }
	public function find($id){
		$id = $_GET['id'];
		$query = "SELECT * FROM users WHERE id=".$id;
		$result = $this->conn->query($query);
		$row = $result->fetch_assoc();
		return $row;
	}
	public function updateUser($data){
		return $this->update($this->table,$data);
	}
}
?>