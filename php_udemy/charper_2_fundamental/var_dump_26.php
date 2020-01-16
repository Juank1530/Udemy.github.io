<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<h1>Función Var Dump</h1>
    
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

    echo 'Esta funcion nos muestra el contenido y el tipo de dato de una variable o arreglo' . '<br><br>';

    echo var_dump($texto) . '<br>';
    echo var_dump($numero) . '<br>';
    echo var_dump($numero2) . '<br><br>';
    echo 'La etiqueta pre se usa para darle formato a la impresión de un arreglo. <br>';

    echo "<pre>";
    echo 'Acá se imprime el arreglo Indexado <br>';
    echo var_dump($arreglo) . '<br>';
    echo "</pre>";

    echo "<pre>";
    echo 'Acá se imprime el arreglo Asociativo<br>';
    echo var_dump($arreglo_asociativo) . '<br>';
    echo "</pre>";

    echo 'También sirve para imprimir el valor de una variable Boleana <br>';
    echo var_dump($boleano);

    var
    
    
    ?>


</body>
</html>