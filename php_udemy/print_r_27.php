<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejercicio 27</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<h1>Función Print_r</h1>
    
    <?php
    $texto = 'Carlos';
    $numero = 10;
    $numero2 = '5';
    $arreglo = array(
        'Carlos',
        'Cesar',
        'Juank'
    );
    $arreglo_asociativo = array(
        'nombre' => 'Juank',
        'Edad' => 34
    );
    $boleano = false;

    echo 'Esta funcion nos muestra el contenido de una variable o arreglo de una manera legible a los seres humanos' . '<br><br>';

    echo print_r($texto) . '<br>';
    echo print_r($numero) . '<br>';
    echo print_r($numero2) . '<br><br>';
    echo 'La etiqueta pre se usa para darle formato a la impresión de un arreglo. <br>';

    echo "<pre>";
    echo 'Acá se imprime el arreglo Indexado <br>';
    echo print_r($arreglo) . '<br>';
    echo "</pre>";

    echo "<pre>";
    echo 'Acá se imprime el arreglo Asociativo<br>';
    echo print_r($arreglo_asociativo) . '<br>';
    echo "</pre>";

    echo 'También sirve para imprimir el valor de una variable Boleana <br>';
    echo print_r($boleano);

    ?>


</body>
</html>