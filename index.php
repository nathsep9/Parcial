<?php
include("con_db.php");
// Realizando una consulta SQL
$query = 'SELECT * FROM breads';
$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());
?>
<!DOCTYPE html>
<html>

<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

<body>
	<div class="fondo"></div>
	<form method="post" method="POST" action="./registrar.php">
		<h1>Ingresar panes</h1>
		<input type="text" name="name" placeholder="Nombre completo">
		<input type="number" name="quantity" placeholder="Cantidad">
		<input type="number" name="price" placeholder="Precio">
		<input type="submit" name="register" value="Guardar">
	</form>
	<div class="root">
		<table class='table'>
			<thead>
				<tr>
					<th>id</th>
					<th>Nombre</th>
					<th>Cantidad</th>
					<th>Precio</th>
				</tr>
			</thead>
			<tbody>

				<?php

				while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
					echo "\t<tr>\n";
					foreach ($line as $col_value) {
						echo "\t\t<td>$col_value</td>\n";
					}
					echo "\t</tr>\n";
				}
				?>
			</tbody>
		</table>
	</div>

</body>

</html>