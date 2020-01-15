<?php
$meses = array(
    'Enero',
    'Febrero',
    'Marzo',
    'Abril',
    'Mayo',
    'Junio',
    'Julio',
    'Agosto',
    'Septiembre',
    'Octubre',
    'Noviembre',
    'Dieciembre'
);

// La funcion count recibe como parametro un arreglo y cuenrta la cantidad de objetos que este tiene
// echo count ($meses);

// Así se recorre en arreglo con un ciclo for
for ($mes = 0; $mes < count($meses); $mes ++) {

    echo $meses[$mes] . '<br>';
}

echo '<br>';

$contador = 0;

while ($contador < count($meses)) {

    $contador ++;

    ;
}

?>