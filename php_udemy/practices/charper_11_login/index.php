<?php session_start();
// Acá se indica que vamos a trabajar con sesiones 


// Se valida si la sesión está iniciada y si no lo está se envía a la página de resgistro 
if (isset($_SESSION['usuario'])) {
    header('Location: contenido_83.php');
}else {
    header('Location: registrate_83.php');
}



?>