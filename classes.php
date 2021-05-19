<?php
	session_start();
	class DBConnection{
		public $host ="localhost";
		public $user ="root";
		public $pass ="";
		public $dbnm ="foody_db";
		public $db;
		
		function DBConnect(){
			try {
				$this->db = new PDO("mysql:hostname=$this->host;dbname=$this->dbnm",$this->user, $this->pass);
				return $this->db;
			}
			catch(PDOExeption $e){
				echo $e->message();
			}
		}
	}
	
	class ManagePersonal Extends DBConnection{
		public $db;
		function __construct(){
			$conn = new DBConnection();
			$this->db = $conn->DBConnect();
			return $this->db;
		}
		function login($username, $password){
			$query_view = $this->db->query("select * from user_account where username='$username' and password='$password'");
			$view = $query_view->fetch();
			$id = $view['user_id'];
			if ($query_view->rowCount() != 0){
				if ($view['user_type'] == 'Seller'){
					header("location:seller/verification.php?id=$id");
				}elseif ($view['user_type'] == 'Consumer') {
					header("location:customer/verification.php?id=$id");
				}
			}else{
				header("location:index.php?alert=failed");
			}
		}
		//adding
		function register($name, $user_type, $gender, $bday, $cnum, $address, $email, $username, $password){
			$query_add = $this->db->prepare("insert into user values('', '$name', '$user_type', '$gender', '$bday', '$cnum', '$address', '$email')");
			$query_add->execute();
			$id = $this->db->lastInsertId();
			$query_add1 = $this->db->prepare("insert into user_account values('', '$user_type', '$username', '$password', '$id')");
			$query_add1->execute();
			header("location:index.php?alert=register");
		}
	}
?>