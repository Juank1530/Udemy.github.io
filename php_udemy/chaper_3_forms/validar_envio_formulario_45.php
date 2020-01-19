<?php

//valida el metodo por donde se envio el formulario 
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo 'Los datos se enviaron por el método get<br>';
}else {
    echo 'Los datos se enviaron por el método post<br>';
}


//Valida si se envio o no el formulario 
if (isset($_POST['formulario'])) {
    echo "Se han enviado los datos correctamente<br>";
    print_r($_POST['formulario']);
}