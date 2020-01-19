<?php

$errores = '';
$sent = '';

//Validar que la variable submit ya este seteada
if (isset($_POST['submit'])) {
    //Obtener el valor de la variables
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $message = $_POST['message'];

    //validar si la variable $name tiene algo
    if (! empty($name)) {
        //Sanear la variable
        $name = trim($name);
        $name = filter_var($name, FILTER_SANITIZE_STRING);
    }else {
        //Mensaje en caso de que hay se haya ingresado el nombre
        $errores .= 'Por favor ingresa un nombre <br>';
    }
    
    //validar si la variable $mail tiene algo
    if (!empty($mail)) {
        //Sanear la variable
        $mail = filter_var($mail, FILTER_SANITIZE_EMAIL);
        //validar un mail corrceto
        if (! filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            //Mensaje en caso de ser un correo invalido
            $errores .= 'Por favor ingresa un correo valido <br>';
        }
    } else {
        //Mensaje en caso de no ingresar un correo
        $errores .= 'Por favor ingresa un correo <br>';
    }
    
    //validar si la variable $message tiene algo
    if (! empty($message)) {
        //Sanear la variable
        $message = htmlspecialchars($message);
        $message = trim($message);
        $message = stripslashes($message);
    } else {
        //Alerta en caso de no ingresar un mensaje
        $errores .= 'Por favor ingresa el mensaje <br>';
    }
    
    //Validar que no haya errores y preparar el cooreo para enviarlo
    if (! $errores) {
        $send_to = 'juank153021@gmail.com';
        $subject = 'Correo enviado desde la práctica de php';
        $mesage_ready = "De: $name \n";
        $mesage_ready .= "Correo: $mail \n" ;
        $mesage_ready .= "Mensaje: " . $message;
        
        //La funcion mail() sirve para enviar el correo recibe el correo a donde se va a enviar, el asunto y el mensaje
        mail($send_to,$subject,$mesage_ready);
        $sent = true;       
    }
 
}

//Solicitar el archivo de la vista 
require_once 'index.view_48.php';




