<?php

//Esta línea define que se va a trabajar con sesiones
session_start();
//Esta línea destruye la sesión 
session_destroy();
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Iniciar sesión</title>
<link rel="stylesheet" href="../css/style.css">
</head>
<body>

	<h1>Has cerrado sesión</h1>
	<!--Esta es un aredirección a otra página-->
	<a href="index_sesiones_60.php">Iniciar sesión</a>
</body>
</html>
