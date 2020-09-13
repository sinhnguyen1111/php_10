<?php
	class Connection
	{
		private $servername;
		private $username;
		private $password;
		private $dataname;

		function __construct()
		{
			$this->servername = 'localhost';
			$this->username = 'root';
			$this->password = '';
			$this->dataname = 'myblog_05';
		}

		public function connect(){
			$conn=new mysqli($this->servername,$this->username,$this->password,$this->dataname);

			if($conn->connect_errno){
				echo 'Fail'.$conn->connect_errno;
				return false;
			}
			return $conn;
				}
	}

?>