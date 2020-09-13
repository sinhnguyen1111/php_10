<?php
include_once 'model/Model.php';
require_once 'model/connection.php';

$model = new Model();
$row=$this->model->detail('posts');
	// include '../helper/connect.php';
	// $id = $_GET['id'];
	// $query = "SELECT * FROM posts WhERE id=".$id;
	// // $query = detail('posts',$data);
	// // echo $query;
	// $conn = connect();
	// $result =$conn->query($query);
	// $posts = array();
	// while($row = $result->fetch_assoc()){
	// 	$posts[]=$row;
	// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h3>--- THÔNG TIN NGƯỜI DÙNG ---</h3>
			<pre>
				<?php
					echo 'ID: '.$row['id'].'<br>';
					echo 'Mô tả: '.$row['description'].'<br>';
					echo 'Ảnh: '.$row['thumbnail'].'<br>';
					echo 'Nội dung chính: '.$row['content'].'<br>';
					echo 'Ảnh đại diện: '.$row['slug'].'<br>';
					echo 'Số lượng xem: '.$row['view_count'].'<br>';
					echo 'Ngày tạo: '.$row['created_at'];
				?>
			</pre>
</body>
</html>