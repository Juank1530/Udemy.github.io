<?php session_start();

// Acá se valida si la sesión está o no iniciada 
if (isset($_SESSION['usuario'])) {
    // Si noestá inicida redirigue al index.php
    header('Location: index.php');
}

// Acá se valida si los datos fueron enviados 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Acá se obtiene el usuario y se controla que se guarde en minusculas y que no haya inyección de código
    $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    // Se declara la variable errores para usarla cuando se necesite 
    $errores ='';

    //Se validad qu eninguno de los campos este vacio
    if (empty($usuario) || empty($password) || empty($password2)) {
        $errores .= '<li>Por favor rellena todos los datos correctamente.</li>';
    } else {
        //Conexión a la BBDD
        try {
            $conexion = new PDO('mysql:host=localhost;dbname=udemy','juank','');
        }catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
        }

        //Se prepara, ejecuta y obtine resultados de la consulta
        $statement = $conexion->prepare('SELECT * FROM usuarios WHERE user = :usuario LIMIT 1');
        $statement->execute(array(':usuario' => $usuario));
        $resultado = $statement->fetch();

        //Se validad que el nombre de usuario no exista
        if ($resultado != false) {
            //En caso de que el usuario exista se muestra mensaje de error 
            $errores .= '<li>El nombre de usuario ya existe.</li>';
        }

        //Se porcede a encriptar la contraseña

        $password = hash('sha512', $password);
        $password2 = hash('sha512', $password2);

        //Se validad que la contraseña coincida 
        if ($password != $password2) {
            $errores .= '<li>Las contraseñas no coinciden.</li>';
        }       
    }

    //Se validad que la variable erroes este vacia y se procede a ingresra los valores en la bbdd
    if ($errores == '') {
        $statement = $conexion->prepare('INSERT INTO usuarios (id, user, pass) VALUES (null, :usuario, :pass)');
        $statement->execute(array(':usuario'=> $usuario,':pass'=> $password));
        header('Location: login_87.php');

    }
     
}


require_once 'views/registrate.view_83.php';

?>
 
 


