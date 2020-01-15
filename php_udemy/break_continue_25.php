<?php
$paises = array(
    Colombia,
    Mexico,
    Peru,
    España,
    Venezuela,
    Argentina,
    USA
);

foreach ($paises as $pais) {

    if ($pais == 'España') {
        break;
    }
    echo $pais . '<br>';
    ;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Ejercicio 25</title>
<link rel="stylesheet" href="css/style.css">

</head>


<body>

	<h1>Paises latinoamericanos</h1>

	<p>Este es un for con la sentencia continue</p>

		<?php
foreach ($paises as $pais) {

    if ($pais == 'España' || $pais == 'USA' || $pais == 'Mexico') {
        continue;
    }
    echo $pais . '<br>';
}

?>

</body>
</html>
