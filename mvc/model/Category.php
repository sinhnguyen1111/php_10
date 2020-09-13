<?php
include_once 'connect.php';
require_once 'model/Model.php';
class Category extends Model
{	
	
	var $table = 'categories';
	public function getAll(){
		return $this->select($this->table);
	} 

	public function addCategory($data){
		return $this->insert($this->table,$data);
	}
	
	function find($id)
	{
		$id = $_GET['id'];
		$query = "SELECT * FROM categories WHERE id=".$id;
		$result = $this->conn->query($query);
		$row = $result->fetch_assoc();
		return $row;
	}
	public function deleteCategory($id){
		return $this->delete($this->table,$id);
	}
	
	public function updateCategory($data){
		// echo 'Thành công';
		return $this->update($this->table,$data);
	}
	// public function detailCategory(){
	// 	// echo 'Thành công';
	// 	// return $this->detail($this->table,$id);
	// }
	

}

?>