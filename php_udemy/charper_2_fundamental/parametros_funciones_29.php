<?php

function saludo($nombre)
{
    echo "Saludo, $nombre <br>";
}

saludo('JuanK');
saludo('Monik');
saludo('Paulis');

function sumar($n1, $n2)
{
    $resultado = $n1 + $n2;
    echo $resultado . '<br>';
}

sumar(2, 58);
sumar(78, 2);
sumar(3, 97);

?>