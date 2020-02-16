<?php

require 'conect.php';
$conetion = mysqli_connect($db_host, $db_usuario, $db_password);

if (mysqli_connect_errno()) {
    echo ':('; //Fallo al conectar la BBDD
    exit();
} else {

    mysqli_select_db($conetion, $db_nombre) or die(':('); //Fallo al conectar la BBDD
    mysqli_set_charset($conetion, "utf8");

    // Acá se recibe la variable con el método get
    // También se valida qie tenga contenido y si no tiene se le asigna el vlor uno por defceto  
    $id = isset($_GET['id']) ? $_GET['id'] : 1;

    // Se escribe la consulta mysql
    $sql = 'select * from users limit 3';
    // Se almacena la consulta en una variable pra poder utilizar el método query y ejecutar la consulta
    $resulset = $conetion->query($sql);
    // Se valida que resultados tenga contenido      
    if ($resulset->num_rows) {
        // echo '<pre>';
        // var_dump($resulset->fetch_assoc());
        // echo '<pre/>';
        // Se muestra el contenido resultado en una fila mientras no sea nulo 
        while ($fila = $resulset->fetch_assoc()) {
            echo $fila['id'] . ' - ' . $fila['name'] . '<br>';
        }
    }else{
        echo 'No hay datos para mostrar.';
    }

    // Cuando se utiliza query es muy posible que nos inyecten código por eso se debe preparar la cosulta con statement
    // en este ejmplo no se hizo 
    // Se escribe la consulta mysql
    $sql2 = "select * from users where id = $id";
    // Se almacena la consulta en una variable pra poder utilizar el método query y ejecutar la consulta
    $resulset2 = $conetion->query($sql2);
    // Se valida que resultados tenga contenido
    if ($resulset2->num_rows) {
        // echo '<pre>';
        // var_dump($resulset2->fetch_assoc());
        // echo '<pre/>';
        // Se muestra el contenido resultado en una fila mientras no sea nulo
        while ($fila2 = $resulset2->fetch_assoc()) {
            echo $fila2['id'] . ' - ' . $fila2['name'] . '<br>';
        }
    }else{
        echo 'No hay datos para mostrar.';
    }


    // Se cierra la conexión a la base de datos
    mysqli_close($conetion);
}
