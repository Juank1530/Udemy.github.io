<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway+Dots|Roboto:300i,400&display=swap" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Iniciar Sesión</title>
</head>

<body>

    <div class="contenedor">
        <h1 class="titulo">Iniciar sesión</h1>
        <hr class="border">

        <form class="formulario" name="login" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

            <div class="form-group">
                <i class="icono izquierda fa fa-user"></i><input class="usuario" type="text" name="usuario" placeholder="Usuario">
            </div>

            <div class="form-group">
                <i class="icono izquierda fa fa-lock"></i><input type="password" name="password" class="password_btn" placeholder="Contraseña">
                <i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
            </div>
        </form>

        <p class="texto-registrate">
            ¿ Aun tienes cuenta ?
            <a href="registrate_83.php">Registrate</a>
        </p>

    </div>

</body>

</html>