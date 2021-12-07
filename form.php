<?php
	if (isset($_POST['nombre']) && isset($_POST['apellido'])) {
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		echo "<h1>Hola $nombre $apellido</h1>";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h2>Llene los datos correspondientes</h2>
	<form method="post" action="form.php">
		<input type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre"><br><br>
		<input type="text" name="apellido" id="apellido" placeholder="Ingrese su apellido"><br><br>
		<input type="submit" value="Send">
	</form>
	<footer>
		<h3>Gracias</h3>
	</footer>
</body>
</html>