<?php
//Acá se llama al archivo de funciones 
require_once 'funciones.php';

//Con la variable $fotos_por_pagina se defini la cantida de imagenes que van aparecer en por cada página 
$fotos_por_pagina = 8;
//La variable $pagina_actual nos ayudará a saber cual es la página actual
//Se ejecuta una comporbación en línea 
//Si $_GET está seteada, convierta ese valor a entero y sino establesca el valor a 1  
$pagina_actual = (isset($_GET['p']) ? (int) $_GET['p'] : 1);
//La variable inicio definie la página de inicio, con una cmprbación en línea
//Si la $pagina_actual actual es mayor a 1, entonces $pagina_actual * $fotos_por_pagina - $fotos_por_pagina, sino estblece el valor a 0   
$inicio = ($pagina_actual > 1) ? $pagina_actual * $fotos_por_pagina - $fotos_por_pagina : 0;

//Acá se establece la conexión con la bd
$conexion = conexion('galeria', 'juank', '');

//Acá se comprueba si hubo conexion, sino hay se redirige a la página de error
if (!$conexion) {
    header('Location: error.php');
    die();
}

//Acá se prepara la consulta para saber cuantás imagenes hay en la bd
$statement = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM fotos LIMIT $inicio, $fotos_por_pagina");
//Acá se ejecuta la consulta
$statement -> execute();
//en la variable $fotos guardamos el resultado de la consulta con la función fetchAll()
$fotos = $statement->fetchAll();

//Acá se comprueba que el resultado de la consulta no sea nulo, en caso de ue sea nuelo se redirege al index.php
if (!$fotos) {
    header('Location: index.php');
}

//Con esta consulta se cuenta a cantidad total de filas en la tabla 
$statement = $conexion->prepare("SELECT FOUND_ROWS() as total_filas");
//Acá se ejecuta la consulta
$statement -> execute();
//Acá se almacenan los resultados de la consulta, para obtener el total de las filas 
$total_post = $statement->fetch()['total_filas'];
//Acá se calcula el total de páginas en el cual se van a dividir las fotos que hay 
$total_paginas = ceil($total_post/$fotos_por_pagina);


//Llamado a la vista del index.php
require_once "views/index.view.php"
;
