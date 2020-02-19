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
            <ul>
                <?php foreach ($articulos as $articulo) : ?>
                    <li><?php echo $articulo['id'] . '.- ' . $articulo['articulo'] ?></li>
                <?php endforeach; ?>

            </ul>
        </section>

        <!-- secticon.paginacion>ul>li>a*4{$} -->
        <secticon class="paginacion">
            <ul>
                <?php if($pagina == 1): ?>
                    <li class="disabled">&laquo;</li>
                <?php else: ?>
                <?php endif; ?>
                
                	<?php if(pagina == 1): ?>
                    <?php else: ?>
                    <?php endif; ?>
                

                    
                <!-- 
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">&raquo;</a></li> -->
            </ul>
        </secticon>
    </div>

</body>

</html>