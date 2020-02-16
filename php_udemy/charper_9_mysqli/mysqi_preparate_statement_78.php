<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'conect.php';
$conetion = mysqli_connect($db_host, $db_usuario, $db_password);

if (mysqli_connect_errno()) {
    echo ':( 1'; //Fallo al conectar la BBDD
    exit();
} else {

    mysqli_select_db($conetion, $db_nombre) or die(':( 2'); //Fallo al conectar la BBDD
    mysqli_set_charset($conetion, "utf8");

    // Se escribe la consulta mysql y se prepara para la bbdd
    $statement = $conetion->prepare("INSERT INTO users(id,name,surname,mail) VALUES(?,?,?,?)");

    // Se dermina cuales son los valores que se le van apasar a la consulta 
    $statement->bind_param('isss', $id, $name, $surname, $mail);

    $id = 'NULL ';

    // Se valida que las variables se hayan enviado con un valor 
    if (isset($_GET['name']) && isset($_GET['surname']) && isset($_GET['mail'])) {
        // Se limpian las variables 
        $name = $_GET['name'];
        $name = trim($name);
        $name = filter_var($name, FILTER_SANITIZE_STRING);
        // Se limpian las variables
        $surname = $_GET['surname'];
        $surname = trim($surname);
        $surname = filter_var($surname, FILTER_SANITIZE_STRING);
        // Se limpian las variables
        $mail = $_GET['mail'];  
        $mail = trim($mail);  
        if (! filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            //Mensaje en caso de ser un correo invalido
            echo 'Por favor ingresa un correo valido <br>';
        }
    }else {   
        // Se imprime mensaje indicando que todos los datos son obligatorios
        echo 'Se debe ingresar nombre, apellido y mail obligatorio, de lo contrario no se guardará nada en la base de datos<br>';
    }
    
    // Se ejecuta la colsulta 
    $statement->execute();
    // Se valida que se haya ejecutado correctemente la consulta 
    if ($conetion->affected_rows >= 1) {
        // Se imprime confirmación de la consulta  
        echo $conetion->affected_rows . ' Registros agregados correctamente.';
    }else {
        // Se imprime que la comsulta fallo
        echo 'No se agrego ningún registro.';
    }

    mysqli_close($conetion);
}
