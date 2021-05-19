<?php
	if (isset($_POST['submit'])){
		require "classes.php";
		$function = new ManagePersonal();
		$username = $_POST['username'];
		$password = $_POST['password'];
		$function -> login($username, $password);
	}
?>