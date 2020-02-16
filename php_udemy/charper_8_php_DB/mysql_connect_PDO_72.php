<?php

$id = $_GET['id'];

//utilizando el try catch y la conexión PDO se controla la conexción y sus posibles errores 

try {
    $conection = new PDO('mysql:host=localhost;dbname=udemy', 'juank', '');
    echo 'Conectado a la base de datos<br>';

    //Este tipo de sonsulta es insegura y no ne recomienda usarla 
    //$resulset = $conection->query('insert into users values(null,"Andres","Valencia","andres@test.com")');

    $resulset3 = $conection->query("select * from users where id = $id");

    //método query
    $resulset2 = $conection->query('select * from users');

    foreach ($resulset3 as $row) {
        echo $row['id'] . ' - ' . $row['name'] . ' - ' . $row['surname'] . ' - ' . $row['mail'] . '<br><br>';
    }

    //Mostrando la consulta 
    $resulset2 = $conection->query('select * from users');

    foreach ($resulset2 as $row) {
        echo $row['id'] . ' - ' . $row['name'] . ' - ' . $row['surname'] . ' - ' . $row['mail'] . '<br>';
    }
} catch (Exception $e) {
    //Mensaje de error utilizando la variable $e y el método getmessage
    echo "Error: " . $e->getMessage();
}

