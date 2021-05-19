<?php
	if (isset($_GET['id'])){
		session_start();
		$_SESSION['personal_id'] = $_GET['id'];
		header("location:index.php?verified=okay");
	}
?>