<?php
	require_once 'model/Model.php';
	class Post extends Model
	{
		var $table = 'posts';
		function getAll(){
			return $this->select($this->table);
		}

		public function addPosts($data)
		{
			return $this->insert($this->table,$data);
		}

		public function deletePost($id)
		{
			return $this->delete($this->table,$id);
		}

		public function detailPost($data){
			$data=$_POST;
			var_dump($data);
		}

		public function find($id)
	{
		$id = $_GET['id'];
		$query = "SELECT * FROM posts WHERE id=".$id;
		$result = $this->conn->query($query);
		$row = $result->fetch_assoc();
		return $row;
	}
		public function updatePost($data){
			return $this->update($this->table,$data);
		}
	}
?>