<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta lang="es">
<title>Datos desde formularios</title>
<link rel="stylesheet" href="../css/style.css">
</head>
<body>

<h1>Datos desde formularios</h1>

<form action="recibe_post_42.php" method="post">

	<input type="text" placeholder="Nombre:" name="name">
	<br>

	<label for="hombre">Hombre</label>
	<input type="radio" name="sex" value="Hombre" id="hombre">
	<br>

	<label for="mujer">Mujer</label>
	<input type="radio" name="sex" value="Mujer" id="mujer">
	<br>
	
	<select name="year" id="year">
		<?php 
		  for ($year = 1900; $year <= date("Y"); $year++) {
		      echo '<option value="' . $year . '">'. $year . '</option>';  
		  }
		?>
	</select>
	<br>
	
	<label for="terminos">Aceptas los terminos?</label>
	<input type="checkbox" name="terms" id="terminos" value="true">
	<br>
	
	<input type="submit" value="Enviar">

</form>

</body>
</html>

