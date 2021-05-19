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
		function add_cart($quantity, $product, $store, $price, $unit){
			$date = strtotime("now");
			$query_add = $this->db->prepare("insert into temp_cart values ('', '$product', '$store', '$_SESSION[personal_id]', '$price', '$quantity', '$unit', '$date')");
			$query_add ->execute();
			header("location:store.php?owner=$store&alert=addcart");
		}
		function view_product(){
			$query_view = $this->db->query("select * from product where status='Available'");
			$value = $query_view ->fetchAll();
			return $value;
		}
		function view_store_product(){
			$query_view = $this->db->query("select * from product where status='Available'");
			$value = $query_view ->fetchAll();
			return $value;
		}
		function view_store($owner){
			$query_view = $this->db->query("select * from register_store where user_id='$owner'");
			$value = $query_view->fetchAll();
			return $value;
		}
		function myprofile(){
			$query_view = $this->db->query("select * from user where id='$_SESSION[personal_id]'");
			$value = $query_view ->fetchAll();
			return $value;
		}
		function view_tempcart(){
			$query_view = $this->db->query("select product.name as product, register_store.register_name as store, temp_cart.price, temp_cart.quantity, temp_cart.unit, temp_cart.date from register_store, product, temp_cart where product.id=temp_cart.product and temp_cart.user_id='$_SESSION[personal_id]'");
			$value = $query_view ->fetchAll();
			return $value;
		}


	}
?>