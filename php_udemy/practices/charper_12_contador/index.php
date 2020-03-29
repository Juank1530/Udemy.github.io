<?php

function contar_usuarios()
{
    $archivo = 'file.txt';

    if (file_exists('file.txt')) {
        $cuenta = file_get_contents($archivo) + 1;
        file_put_contents($archivo, $cuenta);

        return $cuenta;
    } else {
        file_put_contents($archivo, 1);

        return 1;
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Visitas</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Contador de Visitas</h1>
    <div class="visitantes">
        <p class="numero"><?php echo contar_usuarios(); ?></p>
        <p class="texto">Visitas</p>
    </div>  
</body>
</html>
