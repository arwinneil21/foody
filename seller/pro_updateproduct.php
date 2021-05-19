<?php
	if (isset($_POST['submit'])){
		require "classes.php";
		$function = new ManagePersonal();
		$name = $_POST['name'];
		$price = $_POST['price'];
		$unit = $_POST['unit'];
		$description = $_POST['description'];
		$status = $_POST['status'];
		$id = $_POST['submit'];
		//upload image
		$target_dir = "upload/";
		$target_file = $target_dir . $_SESSION['personal_id'].'-'.strtolower(basename($_FILES["image"]["name"]));
		$uploadOk = 1;
		move_uploaded_file($_FILES["image"]["tmp_name"], '../'.$target_file);

		$function -> update_product($name, $price, $unit, $description, $status, $target_file, $id);
	}
?>