<?php
require 'views/header.php';
?>

<div class="contenedor">
    <div class="post">
        <article>
            <h2 class="titulo">Titulo del articulo</h2>
            <p class="fecha">29 de Marzo del 2020</p>
            <div class="thumb">
                <a href="#">
                    <img src="<?php echo RUTA; ?>/imagenes/1.png" alt="">
                </a>
            </div>
            <p class="extracto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, consequuntur?</p>
            <a class="continuar" href="#">Leer más...</a>
        </article>
    </div>
    <div class="post">
        <article>
            <h2 class="titulo">Titulo del articulo</h2>
            <p class="fecha">29 de Marzo del 2020</p>
            <div class="thumb">
                <a href="#">
                    <img src="<?php echo RUTA; ?>/imagenes/1.png" alt="">
                </a>
            </div>
            <p class="extracto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, consequuntur?</p>
            <a class="continuar" href="#">Leer más...</a>
        </article>
    </div>
    <?php require 'paginacion.php';?>
</div>

<?php require 'views/footer.php'?>