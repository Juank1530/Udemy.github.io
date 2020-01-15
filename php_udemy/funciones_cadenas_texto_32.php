<?php 

$texto = ' "" <> & %';
$texto2 = 'hello!!';
$texto2 = 'HELLO!!';

//Esta funcion convirte los caracteres especiales a html para que no se puedan ejecutar y así evitar las inyeciones de código 
echo htmlspecialchars($texto) . '<br>';

//Elimina los espacios en blanco adelante y atrás de una cadensa de texto
echo trim($texto) . '<br>';

//Calcular el tamaño de una cadena de texto
echo strlen($texto) . '<br>';

//Esta función sirve para extraer parte de una cadena de texto
echo substr($texto, 0,6). '<br>';

//Esta función sirve para pasar a mayusculas todas las letas de una cadena de texto
echo strtoupper($texto2). '<br>';

//Esta función sirve para pasar a minusculas todas las letas de una cadena de texto
echo strtolower($texto2). '<br>';

//Esta función sirve para conocer la posision de un caracter dentro de una cadenas de texto
echo strpos($texto, '<');






















?>