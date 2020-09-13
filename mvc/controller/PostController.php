<?php
require_once 'model/Post.php';
include_once 'controller/Controller.php';
	class PostController extends Controller

	{
		var $model;
		public function __construct(){
			$this->model= new Post();
		}
		function list(){
			
			$posts= $this->model->getAll();
			// var_dump($post);
			$this->view('post/list.php',['posts'=>$posts]);
			// require_once 'view/post/list.php';
		}
		public function create()
		{
			require_once 'view/post/create.php';
		}
		public function store($data)
		{
			// $data = $_POST;
			// $model = new Post();
			$posts = $this->model->addPosts($data);
			$this->redirect('index.php?mod=post&act=list');
		}
		public function delete(){
			$id = $_GET['id'];
			$posts = $this->model->deletePost($id);
			$this->redirect('index.php?mod=post&act=list');
		}
		// public function show(){
		// 	$id = $_GET['id'];
		// 	$posts = $this->model->detailPost($id);
		// 	// require_once 'view/post/detail.php';
		// }
		public function edit($id){
			// $id = $_GET['id'];
			// $posts=$this->model->find($id);
			$this->view('post/edit.php',[]);
		}

		public function update($data){
			$data=$_POST;
			// var_dump($data);
			// die();
			$posts=$this->model->updatePost($data);
			$this->redirect('index.php?mod=post&act=list');
		}
		public function show(){
			$id = $_GET['id'];
			// $categories=$this->model->detailCategory();
			require_once 'view/post/detail.php';
		
		}



	}
	

?>