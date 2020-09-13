<?php
function connect(){
	$servername='localhost';
	$username='root';
	$password='';
	$dataname='myblog_05';
	$conn=new mysqli($servername,$username,$password,$dataname);

	if($conn->connect_errno){
		echo 'Fail'.$conn->connect_errno;
		return false;
	}
	return $conn;
}
?>