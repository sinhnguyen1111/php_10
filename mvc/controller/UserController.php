<?php
require_once 'model/User.php';
require_once 'controller/Controller.php';
class UserController extends Controller
{
	var $model;
	public function __construct(){
		$this->model=new User();
	}

	public function list()
	{
		// $user_obj= new User();
		$users = $this->model->getAll();
		// var_dump($users);
		$this->view('user/list.php',['users'=>$users]);
		// require_once 'view/user/list.php';
	}

	public function delete(){
		$id=$_GET['id'];
		$users=$this->model->deleteUser($id);
		$this->redirect('index.php?mod=user&act=list');

	}
	public function create(){
		$this->view('user/create.php',[]);
	}

	public function store($data){
		$data = $_POST;
		// var_dump($data);
		$users = $this->model->createUser($data);
		$this->redirect('index.php?mod=user&act=list');
	}


	public function show(){
		$id = $_GET['id'];
		// $categories=$this->model->detailCategory();
		require_once 'view/user/detail.php';
	}
		public function edit($id){
			$id=$_GET['id'];
			$users=$this->model->find($id);
			$this->view('user/edit.php',[]);
		}
		public function update($data){
			$data=$_POST;
			$users = $this->model->updateUser($data);
			$this->redirect('index.php?mod=user&act=list');
		}
	
	
}
?>