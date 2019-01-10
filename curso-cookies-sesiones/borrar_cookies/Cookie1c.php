<html>
	<head>
		<title>Ejercicio</title>
		<meta charset = "UTF-8" />
	</head>
	<body>

		<?php
			if (isset($_COOKIE['nombre'])) {
				echo "La cookie tiene el valor: ".$_COOKIE['nombre'];
			} else {
				echo "La cookie no ha podido ser encontrada!!";
			}
		?>

		<a href="cookie1d.php" >Salir del Sistema</a>
	</body>
</html>