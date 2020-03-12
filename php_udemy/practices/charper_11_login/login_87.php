<?php session_start();

if (isset($_SESSION['usuario'])) {
	header('Location: index.php');
	die();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	$password = hash('sha512', $password);

    try {
        $conexion = new PDO('mysql:host=localhost;dbname=udemy', 'juank', '');
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }

    $statement = $conexion->prepare('SELECT * FROM usuarios WHERE user = :usuario and pass = :password');
    $statement->execute(array(':usuario' => $usuario, ':password' => $password));

    $resultado = $statement->fetch();

    if ($resultado !== false) {
        $_SESSION['usuario'] = $usuario;
        header('Location: index.php');
    } else {
        $errores .= '<li>Usuario o Contraseña equivocado</li>';
    }
}

require 'views/login.view_87.php';


/*
//sE DETIENE LE SERVICO SQL SERVER (AVANCES)

// C:\Program Files\Microsoft SQL Server\MSSQL11.AVANCES\MSSQL\Log se borra el archivo ERRORLG mas pesado

/*
INGRESO AL MODULO ACTUALIZACIÓN

REINDEXAR

MANTENIMIENTO A LOG 

Siempre que se reinicie el server es necesario arrancar los servcios del xampp

despues de reincar es necsario detener el servico sql server (mssqlserver)


y despues activar el sql server (avances)

Y EL SERVICO AGEBTE SQL SERVER AVACES 

ESTO DESDE LA CONSOLA ED SQL SERVER CONFIGURATION MANAGER
*/