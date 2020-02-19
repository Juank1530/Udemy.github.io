<?php



try {
    $conection = new PDO('mysql:host=localhost;dbname=udemy', 'juank', '');
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    die();
}

// Se verifica si la variable está seteada, si lo está se obtiene su valor 
// entero y si no lo está se pone opr defceto 1
$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

// Se defini la cantidad de post que se van a mostrar en cada pagina  
$postPorPagina = 5;

// Se determina el número de la página en la cual nos encontramos par determinar 
// que elementos de la base de van a mostrar 
$inicio = ($pagina > 1) ? ($pagina * $postPorPagina - $postPorPagina) : 0;

// Se prepara la conexión, se utiliza SQL_CALC_FOUND_ROWS para saber cuantas filas hay 
// y se le indica con LIMIT $inicio, $postPorPagina quye muestre determinado número de registros
// y desde donde empezar y hasta donde terminar      
$articulos = $conection->prepare("
    SELECT SQL_CALC_FOUND_ROWS
    *
    FROM
    paginacion
    LIMIT 
    $inicio, $postPorPagina
");

// Se ejecuta la consulta 
$articulos->execute();
// Se llaman todos los articulos de la tabla con fetchAll();
$articulos = $articulos->fetchAll();

// Se valida si la página que se indica existe y sino se redireje al index  
if (!$articulos) {
    header('Location: index_79.php');
}

// Se consulta cuantas filas hay en la tabla 
$totalArticulos = $conection->query('
    SELECT
    FOUND_ROWS()
    as
    total
');

$totalArticulos = $totalArticulos->fetch()['total'];

// Se obtine el número de paginas que se va a generar, dividiendo el total de articulos en los post por página que se va a mostrar
// se utuliza ceil(); para rendodear al número entero superior y no tener resultos con decimales   
$numeroPaginas = ceil($totalArticulos / $postPorPagina);

// Se llama al otro archivo despúes de ejecutar toda la logica del php
require 'index.view_79.php';
