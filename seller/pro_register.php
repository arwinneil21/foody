<?php
	if (isset($_POST['submit'])){
		require "classes.php";
		$function = new ManagePersonal();
		$name = $_POST['name'];
		$address = $_POST['address'];
		$contact = $_POST['contact'];
		$email = $_POST['email'];
		//upload image
		$target_dir = "upload/";
		$target_file = $target_dir . $_SESSION['personal_id'].'-'.strtolower(basename($_FILES["image"]["name"]));
		$uploadOk = 1;
		move_uploaded_file($_FILES["image"]["tmp_name"], '../'.$target_file);

		$function -> add_homebase($name, $address, $contact, $email, $target_file);
	}
?>