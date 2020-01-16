<?php 

echo 'Este es un adelanto de los cambios que trae php 7<br>';
echo 'Declaraciones de tipo escalar<br>';

// phpinfo();

// Esta sentecia le indica a php que debe ser muy estricto con los datos que recibe y no los intente convertir
//declare(strict_types = 1); Esta función parace no estar en php 7.2 hacia arriba


function cuadrado(int $n1)
{
    return $n1 * $n1;
}

$n1 = 8;

echo 'El cuadrado de ' . $n1 . ' es ' . cuadrado($n1) . '<br>';







?>