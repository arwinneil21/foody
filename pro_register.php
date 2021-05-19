<?php
	if (isset($_POST['submit'])){
		require "classes.php";
		$function = new ManagePersonal();
		$name = $_POST['lname'].'*'.$_POST['fname'].'*'.$_POST['mname'];
		$user_type = $_POST['user_type'];
		$gender = $_POST['gender'];
		$bday = $_POST['bday'];
		$cnum = $_POST['cnum'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$function -> register($name, $user_type, $gender, $bday, $cnum, $address, $email, $username, $password);
	}
?>