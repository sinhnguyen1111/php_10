
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CATEGORIES</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
		if(isset($_COOKIE['msg'])){?>
		<div class="alert alert-success">
			<strong>Thông báo: </strong>
			<?php echo $_COOKIE['msg']?>
		</div>
	<?php }?>
    <div class="container">
        <h3 class="text-center">--- CATEGORIES ---</h3>
        <a href="categories_add.php" class="btn btn-primary">Add New users</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Slug</th>
                <th>Avatar</th>
            </thead>
            <?php foreach ($categories as $item) {?>

		        <tr>
		            <td><?php echo $item['id']?></td>
		            <td><?php echo $item['name']?></td>
		            <td><?php echo $item['description']?></td>
		            <td><?php echo $item['slug']?></td>
		            <td>
		                <img src="https://video-thumbs.mediacdn.vn//vtv/2018/10/2/0210thoi-su-19h-15384852850441347953968-a1b84_thumb3.jpg" width="100px" height="100px">
		            </td>
		            <td>
		                <a href="detail.php?id=<?php echo $item['id'] ?>" class="btn btn-primary">Detail</a>
		                <a href="edit.php?id=<?php echo $item['id'] ?>" class="btn btn-success">Edit</a>
		                <a href="delete.php?id=<?php echo $item['id'] ?>" class="btn btn-danger">Delete</a>
		            </td>
		        </tr>
        	<?php }?>
        </table>
    </div>
</body>
</html>