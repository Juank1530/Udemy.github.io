<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, 
    initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald&display=swap" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href=" <?php //echo RUTA; ?>css/estilos.css"> -->
    <link rel="stylesheet" href="css/estilos.css">
    <title>JuanK's Blog</title>
</head>

<body>
    <header>
        <div class="contenedor">
            <div class="logo izquierda">
                <p><a href="#">Mi Primer Blog</a></p>
            </div>
            <div class="derecha">
                <form name="busquedad" class="buscar" action="<?php echo RUTA; ?>/bucar.php" method="get">
                    <input type="text" name="busquedad" placeholder="Buscar">
                    <button type="submit" class="icono fa fa-search"></button>
                </form>
                <nav class="menu">
                    <ul>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#">Contacto<i class="icono fa fa-envelope"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>