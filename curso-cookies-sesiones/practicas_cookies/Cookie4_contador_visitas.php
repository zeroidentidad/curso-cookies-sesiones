<?php
if (isset($_COOKIE['contador'])){
	setcookie('contador', $_COOKIE['contador']+1, time()+365*24*60*60);
	echo "Número de visitas: ".$_COOKIE['contador'];
} else {
	setcookie('contador', 1, time()+365*24*60*60);
	echo "Bienvenido por primera vez a nuestra página";
}

?>
<html>
	<head>
		<title>Ejercicio</title>
		<meta charset = "UTF-8" />
	</head>
	<body>
	</body>
</html>