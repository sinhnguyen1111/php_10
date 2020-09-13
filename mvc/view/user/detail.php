<?php
    require_once 'model/Model.php';
    require_once 'model/connection.php';
  
    $model = new Model();
    $row=$this->model->detail('users');
    // // $value = $this->model->detail('users');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style type="text/css">
		body{
			width: 50%;
			margin:0 auto;
		}
	</style>
</head>
<body>
	<h2>--- THÔNG TIN NGƯỜI DÙNG ---</h2>
		<pre>
			<?php
				echo 'ID: '.$row['id'].'<br>';
				echo 'Tên : '.$row['name'].'<br>';
				echo 'Email : '.$row['email'].'<br>';
				echo 'Password: '.$row['password'].'<br>';
				echo 'Ảnh đại diện: '.$row['avatar'].'<br>';
				echo 'Ngày tạo : '.$row['created_at'];
			?>
		</pre>
			
</body>
</html>