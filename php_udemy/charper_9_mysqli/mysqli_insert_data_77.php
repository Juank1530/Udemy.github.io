<?php

require 'conect.php';
$conetion = mysqli_connect($db_host, $db_usuario, $db_password);

if (mysqli_connect_errno()) {
    echo ':( 1'; //Fallo al conectar la BBDD
    exit();
} else {

    mysqli_select_db($conetion, $db_nombre) or die(':( 2'); //Fallo al conectar la BBDD
    mysqli_set_charset($conetion, "utf8");

    // Se escribe la consulta mysql
    $sql = "INSERT INTO users(id,name,surname,mail) VALUES(null,'Luis','Torres','lt@gmail.com')";
    // Se almacena la consulta en una variable pra poder utilizar el método query y ejecutar la consulta
    $conetion->query($sql);

    //Se valida si la consulta se efectuó y se imprime un mensajae al usuario 
    if ($conetion->affected_rows >= 1) {
        echo 'Se guardaron ' . $conetion->affected_rows . ' registros.';
    }

    mysqli_close($conetion);
}
