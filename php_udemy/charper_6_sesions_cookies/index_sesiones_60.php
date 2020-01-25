<?php
//Esta línea define que se va a trabajar con sesiones
session_start();

//Con la variable super global $_SESSION se define la variable 
$_SESSION['name'] = 'JuanK';

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Sessions</title>
<link rel="stylesheet" href="../css/style.css">
</head>
<body>

	<h1>Página de inicio de sesión</h1>
	<!--Esta es un aredirección a otra página-->
	<a href="pagina2_60.php">Ir a la página 2</a>
</body>
</html>