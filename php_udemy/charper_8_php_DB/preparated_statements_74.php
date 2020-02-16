<?php

$id = $_GET['id'];

try {

    $conection = new PDO('mysql:host=localhost;dbname=udemy', 'juank', '');
    echo 'Conectado a la BBDD<br>';


    // Acá se prepara la consulta  
    $statement1 = $conection->prepare("select * from users where id = :id");
    // Acá se ejecuta la consulta 
    $statement1->execute($array = [':id' => $id]);
    
    // Se obtinen los resultados 
    $resulset1 = $statement1->fetch();

    // Se imprimen los resultados 
    echo '<pre>';
    print_r($resulset1);
    echo '<pre/>';

    // Acá se prepara la consulta  
    $statement2 = $conection->prepare("select * from users");
    // Acá se ejecuta la consulta 
    $statement2->execute();    
    // Se obtinen los resultados y fetchall lista todos los valores de la tabla
    $resulset2 = $statement2->fetchAll();
    // Se imprimen los resultados 
    foreach ($resulset2 as $user) {
        echo $user['name'] . '<br>';
    }

    $statement3 = $conection->prepare("insert into users values (null, 'Diego','Gomez','dg@test.com')");
    $resulset3 = $statement3->execute();

    foreach ($resulset3 as $user3) {
        echo $user3['name'] . '<br>';
    }



} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}


