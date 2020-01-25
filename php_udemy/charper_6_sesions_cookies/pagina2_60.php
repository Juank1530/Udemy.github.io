<?php

//Esta línea define que se va a trabajar con sesiones
session_start();

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Página 2</title>
<link rel="stylesheet" href="../css/style.css">
</head>
<body>

	<h1>Página 2</h1>
	<p>
		<!--Este fragmento de php valida el estado de la variable se sesión-->
		<?php 
		  if ($_SESSION) {
		      $name = $_SESSION['name'];
		      echo "<h2>Hola $name has iniciado sesión</h2>";
		  } else {
		      echo '<h2>No has iniciado sesión</h2>';
		  }
		?>
	</p>
	<!--Esta es un aredirección a otra página-->
	<a href="cerrar_60.php">Cerrar sesión</a>
</body>
</html>