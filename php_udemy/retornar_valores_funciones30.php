<?php 
 
 function saludo($nombre) {
    return "Saludo, $nombre <br>";
}

echo saludo('JuanK') . '<br>';
echo saludo('Monik') . '<br>';
echo saludo('Paulis') . '<br>';


function sumar($n1, $n2) {
    $resultado = $n1+$n2;
    return $resultado;
}



$resultado = sumar(2,58);

echo $resultado



?>