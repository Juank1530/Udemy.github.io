<?php
$n1 = 15.66;
$n2 = 15.334;
$n3 = 18.001;
$redondeo = round($n1);
$redondeo2 = round($n2);
$redondeo3_formato = round($n2, 3);
$redondeo4_random = rand(1, 15);
$redondeo5_ceil = ceil($n3);
$pi = M_PI;

echo "El número original es $n1 y se redondea a: " . $redondeo . ' utilizando la función round();<br>';
echo "El número original es $n2 y se redondea a: " . $redondeo2 . ' utilizando la función round();<br>';
echo 'Utilizando round($n2,3) también se pude indicar el formato que tome el número ' . $redondeo3_formato . '<br>';
echo "La función rand() sirve para obtener un número al azar entre el rango que se defina. El rango de este ejemplo es 1:15
      y el numero al azar es: " . $redondeo4_random . '<br>';
echo "La función ceil() se utiliza para redondear hacia arriba cualquier número que se le pase como parametro, 
      para este ejemplo se utilizo el número $n3 después de ejecutar la función el número resultante es: $redondeo5_ceil <br>";
echo "Dentro de PHP hay multiples constantes entre ellas está la cosntante PI que equivale a: $pi <br>"
?>
