<?php

// El operador de nave espacial sirve para hacer somparaciones

// Regresa 1 si el valor de la izquierda es mayor que el de la derecha
// Regresa 0 si los valores de ambos lados son iguales
// Regresa -1 si el valor de la derecha es mayor que el de la izquierda

// < = >
// 1 0 -1
echo 1 <=> 1;
echo '<br>';
echo 10 <=> 1;
echo '<br>';
echo 10 <=> 10;
echo '<br>';
echo 1 <=> 10;
echo '<br>';

$arreglo = [
    3,
    1,
    5,
    2,
    4
];
sort($arreglo);
echo implode(' - ', $arreglo) . '<br>';

// esta función hace lo mismo que el operador nave espacial
function comparar($a, $b)
{
    if ($a == $b) {
        return 0;
    } elseif ($a > $b) {
        return 1;
    } else {
        return - 1;
        ;
    }
}

usort($arreglo, 'comparar');
echo implode(' * ', $arreglo) . '<br>';

function comparar2($a, $b)
{
    return $a <=> $b;
}

usort($arreglo, 'comparar2');
echo implode(' # ', $arreglo) . '<br>';

?>