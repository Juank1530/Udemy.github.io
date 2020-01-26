<?php



$mysqli = mysqli_connect("localhost", "Juank1530", "JuanK1530", "udemy");

print_r($mysqli);

// // Esta es la manera antigua de conectarse y es necesario conocerla porque aun las páginas antiguas lo utilizan
// // Establecer la conexión en una variable
// $conexion = mysql_connect('127.0.0.1', 'Juank1530', '') or die();
// $conexion =mysqli_connect('localhost','Juank1530','udemy','');
// print_r($conexion);

// // Se selecciona la bd que se a utilizar definiendo el nombre de la bd y la conexión
// mysql_selectdb('udemy', $conexion);

// // Se guarda el resultado de la consulta en una variable
// $resulset = mysql_query('SELECT * FROM users');

// // Se muestran lso resultados de la consulta en pantalla utulizando un ciclo
// // Se guarda en una variable y se evalua su contenido hasta que retorne nulo
// while ($fila = mysql_fetch_array($resulset)) {
//     echo $fila['name'] . '<br>';
// }
