<?php

require 'funciones.php';

//Acá se establece la conexión con la bd
$conexion = conexion('galeria', 'juank', '');

//Acá se comprueba si hubo conexion, sino hay se redirige a la página de error
if (!$conexion) {
    header('Location: error.php');
    die();
}

$id = isset($_GET['id']) ? (int) $_GET['id'] : false;

if (!$id) {
    header('Location: index.php');
}

$statement = $conexion->prepare('SELECT * FROM fotos WHERE id = :id');
$statement -> execute(array(':id' => $id));
$foto = $statement->fetch();

if (!$foto) {
    header('Location: index.php');
}

require_once 'views/foto.view.php';
