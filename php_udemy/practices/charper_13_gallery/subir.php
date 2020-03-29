<?php
//Acá se llama al archivo de funciones 
require_once 'funciones.php';
//Acá se establece la conexión con la bd
$conexion = conexion('galeria', 'juank', '');

//Acá se comprueba si hubo conexion, sino hay se redirige a la página de error
if (!$conexion) {
    header('Location: error.php');
    die();
}

//Acá se comprueba que se haya enviado algo 
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)) {
    //Con la función getimagesize() se obtiene la iformación de la imagen en un arreglo, que se guarda en la variable $check 
    $check = @getimagesize($_FILES['foto']['tmp_name']);

    //Acá se validad que la variable no esté vacía 
    if ($check !== false) {
        //Se crea la variable $carpeta_destino en donde se guarda la ruta en donde va a quedar la foto
        $carpeta_destino = 'fotos/';
        //En la variable $archivo_subido se define donde va quedar la foto con su nombre completo 
        $archivo_subido = $carpeta_destino . $_FILES['foto']['name'];
        //La función move_uploaded_file() recibe la variable $_FILES y la variable $archivo_subido, para realizar el proceso de subir y guardar la foto en la ruta establecida
        //Tener en cunta los permisos de la carpeta para Otros, si no están habilitados, no se guardará nada.   
        move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);
        //Acá se prepara la consulta para registrar lso datos de la imagen en la bd 
        $statement = $conexion->prepare('INSERT INTO fotos (titulo, imagen, texto) VALUES (:titulo, :imagen , :texto)');
        //Acá se ejecuta la consulta 
        $statement->execute(array(':titulo' => $_POST['titulo'], ':imagen' => $_FILES['foto']['name'], ':texto' => $_POST['texto']));
        //Por último se redirege al usuario a la página de inicio. 
        header('Location: index.php');
    } else {
        //En caso de presentarse algún error se mostrará el siguiente mensaje 
        $error = "El archivo no es una imagen o es muy pesado";
    }
}

//Llamado a la vista de subir.php 
require_once 'views/subir.view.php';
