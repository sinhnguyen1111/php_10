<?php
$mod= $_GET['mod'];
$act= $_GET['act'];
$params = isset($_GET['id']) ? [$_GET['id']] : [];

// require_once 'controller/CategoryController.php';
// require_once 'controller/PostController.php';

	// $category_obj = new categoryController();
	// $categories = $category_obj->list();


$class = ucfirst($mod).'Controller';
$path = 'controller/'.$class.'.php';
require_once $path;

// $post_obj = new postController();
$controller_obj = new $class();
// $post = $post_obj->list();
// $controller=$controller_obj->$act($id);
$data = $_POST;

$params[] = $data;


call_user_func_array([$controller_obj,$act], $params);

?>