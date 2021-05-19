<?php
	if (isset($_POST['submit'])){
		require "classes.php";
		$function = new ManagePersonal();
		$quantity = $_POST['quantity'];
		$ex = explode('*', $_POST['submit']);
		$product = $ex[0];
		$store = $ex[1];
		$price = $ex[2];
		$unit = $ex[3];
		$function -> add_cart($quantity, $product, $store, $price, $unit);
	}
?>