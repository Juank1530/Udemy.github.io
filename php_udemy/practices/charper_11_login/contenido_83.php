<?php session_start();

if (isset($_SESSION['usuario'])) {
    require "views/contenido.view_83.php";
} else {
    header('Location: login_87.php');
}

 







?>