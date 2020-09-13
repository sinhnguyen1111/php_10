<?php
include_once 'model/Category.php';
include_once 'controller/Controller.php';
	class categoryController extends Controller
	{
		var $model;
		public function __construct(){
			$this->model = new Category();
		}
		
		public function list(){
			// echo 'Hiển thị';
			// $category_1 = new Category();
			$categories = $this->model->getAll();

			$this->view('category/list.php',['categories'
				=>$categories]);			 
			// require_once 'view/category/list.php';

		}
		public function create()
		{

			require_once 'view/category/create.php';
		}

		public function store($data)
		{
			// $model = new Category();
			$categories = $this->model->addCategory($data);
			$this->redirect('index.php?mod=category&act=list');
			// header ('location: ?mod=category&act=list');
		}

		public function delete($id){
			$id=$_GET['id'];
			$categories = $this->model->deleteCategory($id);
			$this->redirect('index.php?mod=category&act=list');
		}

		public function edit($id){
			$id=$_GET['id'];
			$categories=$this->model->find($id);
			require_once 'view/category/edit.php';
		}

		public function update($data){
			$data=$_POST;
			$categories=$this->model->updateCategory($data);
			$this->redirect('index.php?mod=category&act=list');
		}

		public function show(){
			$id = $_GET['id'];
			// $categories=$this->model->detailCategory();
			require_once 'view/category/detail.php';
		
		}
	}

?>