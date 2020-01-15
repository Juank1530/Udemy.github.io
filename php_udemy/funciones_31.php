<?php

function area_triangulo($base, $altura)
{
    $area = ($base * $altura) / 2;
    return $area;
}

$area_triangulo = area_triangulo(10, 10);

echo 'El área del triangulo es de ' . $area_triangulo . ' metros cuadrados';

?>