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
		//adding
		function add_product($name, $price, $unit, $description, $status, $target_file){
			$query_add = $this->db->prepare("insert into product values ('', '$name', '$description', '$price', '$unit', '$target_file', '$_SESSION[personal_id]', '$status')");
			$query_add->execute();
			header("location:product.php?alert=added");
		}
		function add_homebase($name, $address, $contact, $email, $target_file){
			$query_trap = $this->db->query("select * from register_store where user_id='$_SESSION[personal_id]'");
				if ($query_trap -> rowCount() == 0){
				$query_add = $this->db->prepare("insert into register_store values ('', '$_SESSION[personal_id]', '$name', '$address', '$target_file', '$contact', '$email', 'Activated')");
				$query_add->execute();
				header("location:register_store.php?alert=added");
			}else{
				$query_update = $this->db->prepare("update register_store set name='$name', address='$address', target_file='$target_file', contact='$contact', email='$email' where user_id='$_SESSION[personal_id]'");
				$query_update ->execute();
				header("location:register_store.php?alert=updated");
			}
		}
		//update 
		function update_product($name, $price, $unit, $description, $status, $target_file, $id){
			$query_update = $this->db->prepare("update product set name='$name', price='$price', unit='$unit', description='$description', status='$status', target_file='$target_file' where id='$id'");
			$query_update->execute();
			header("location:product.php?alert=updated");
		}
		function view_product(){
			$query_view = $this->db->query("select * from product where user_id='$_SESSION[personal_id]'");
			$value = $query_view ->fetchAll();
			return $value;
		}
		function view_registered(){
			$query_view = $this->db->query("select * from register_store where user_id='$_SESSION[personal_id]'");
			$value = $query_view->fetchAll();
			return $value;
		}
		function myprofile(){
			$query_view = $this->db->query("select * from user where id='$_SESSION[personal_id]'");
			$value = $query_view ->fetchAll();
			return $value;
		}


	}
?>