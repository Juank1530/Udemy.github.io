<?php
$meses = array(
    'Enero',
    'Febrero',
    'Marzo',
    'Abril',
    'Mayo',
    'Junio',
    'Julio',
    'Agosto',
    'Septiembre',
    'Octubre',
    'Noviembre',
    'Diciembre'
);

$persona = array(
    'Nombre' => 'Juank',
    'Apellido' => 'Tamara',
    'Edad' => 33
);

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Ejercicio 24</title>
<link rel="stylesheet" href="css/style.css">

</head>


<body>

	<h1>Meses</h1>

	<ul>
		<?php

foreach ($meses as $mes) {
    echo '<li>' . $mes . '</li>';
}

echo '<br>';
foreach ($persona as $datos => $valor) {
    echo '<li>' . $datos . ' : ' . $valor . '</li>';
}

?>
	</ul>

</body>
</html>

