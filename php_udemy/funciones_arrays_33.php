<?php 

$amigo = array(
    'nombre' => 'JuanK',
    'apellido' => 'Tamara',
    'edad' => '34',
    'celular' => '3165006116'
);

$semana = array(
    'Lunes',
    'Martes',
    'Miércoles',
    'Jueves',
    'Viernes',
    'Sábado',
    'Domingo'
);

//Esta función sirve para convertir los valores de un arreglo a variables
extract($amigo);

echo $nombre . '<br>';
echo $apellido . '<br>';
echo $edad . '<br>';
echo $celular . '<br>';

//Esta función sirve para eliminar el último elemento de un arreglo y guardarlo en eun variable

$ultimo_dia = array_pop($semana);

foreach ($semana as $dia) {
    echo $dia . '<br>';
}

echo '<br> '.$ultimo_dia . ' este es el valor de la variable ultimo dia, usando la función array_pop';

//Esta función sirve para imprimir el arreglo utilizando un prefijo
echo join('<br> *', $semana) . '<br>';
echo join('<br> -', $amigo) . '<br>';

//Estas funciones sirven para organizar el arreglo de forma descendente sort() y ascendente rsort()
sort($semana);
echo join(', ', $semana) . '<br>';

rsort($semana);
echo join(', ', $semana) . '<br>';

//Esta función sirve para cambiar el orden del arreglo, pasando el indixe al último elemento
$semana_reverse = array_reverse($semana);
echo join(', ', $semana_reverse) . '<br>';


















?>