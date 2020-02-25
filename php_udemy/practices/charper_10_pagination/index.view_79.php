<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paginación</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900|Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles_79.css">
</head>

<body>

    <div class="contenedor">
        <h1>Árticulos</h1>

        <section class="articulos">
            <!--Ejemlpos de emmet ul#nav>li.item$*4>a{Item$} -->
            <!-- ul>li$*4{$ - Lorem ipsum dolor sit amet consectetur.} -->
            <!-- Acá se listan las opciones de la bbdd ejecuntado un ciclo -->
            <ul>
                <?php foreach ($articulos as $articulo) : ?>
                    <li><?php echo $articulo['id'] . '.- ' . $articulo['articulo'] ?></li>
                <?php endforeach; ?>

            </ul>
        </section>

        <!-- Establecemos cuando el botón "Siguiente" estará habilitado  -->
        <!-- secticon.paginacion>ul>li>a*4{$} -->
        <secticon class="paginacion">
            <ul>
                <?php if ($pagina == 1) : ?>
                    <li class="disabled">&laquo;</li>
                <?php else : ?>
                    <li><a href="?pagina= <?php echo $pagina - 1 ?>">&laquo;</a></li>
                <?php endif; ?>

                <!-- Ejecutamos un cliclo para mostrar las páginas -->
                <?php

                for ($i = 1; $i <= $numeroPaginas; $i++) {
                    if ($pagina == $i) {
                        echo "<li class='active'><a href='?pagina=$i'>$i</a></li>";
                    } else {
                        echo "<li><a href='?pagina=$i'>$i</a></li>";
                    }
                }
                ?>
                <!-- Establecemos cuando el botón "Anterior" estará habilitado  -->
                <?php if ($pagina == $numeroPaginas) : ?>
                    <li class="disabled">&raquo;</li>
                <?php else : ?>
                    <li><a href="?pagina= <?php echo $pagina + 1 ?>">&raquo;</li>
                <?php endif; ?>
            </ul>
        </secticon>
    </div>

</body>

</html>