<?php 

$n1 = 10;

echo 'Las variables declaradas fuera de una función no son accesibles a las funciones, 
      para poder utilizarlas es necesario pasarlas como parámetro a la función. En este ejemplo se pasa
      com parámetro a la función: <br>';
function mostrar1($n1) {
    echo $n1 . '<br>';
}

mostrar1($n1);  


echo 'Para acceder a las vairables de una funcion es necesario utilizar la sentecia rerturn,
      en este ejemplo se obtine el 7 de la función mostrar2  <br>';
function mostrar2() {
    $n2 = 7;
    return $n2;
}

echo mostrar2();



?>