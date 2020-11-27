<?php

include("con_db.php");

if (isset($_POST['register'])) {
	$name = trim($_POST['name']);
	$quantity = trim($_POST['quantity']);
	$price = trim($_POST['price']);
	$consulta = "INSERT INTO breads(name, quantity, price) VALUES ('$name','$quantity','$price')";
	$resultado = pg_query($dbconn, $consulta);
	if ($resultado) {
		header("Location: ./index.php");

	} else {
		echo '<h3 class="bad">¡Ups ha ocurrido un error!</h3>';
	}
}