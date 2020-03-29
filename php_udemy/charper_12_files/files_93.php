<?php

//Acá se comprueba si el documento existe
if (file_exists('file.txt')) {
    echo 'El documento si existe<br>';
} else {
    echo 'El documento no existe<br>';
}

//Acá se imprime el var_dump con el valor del docuemnto 
echo var_dump('file.txt');
echo '<br>';
//Acá se obtiene el contenido del documento 
echo file_get_contents('file.txt');

//Es importante tener en cuanta los permisos del archivo en donde se va a escribir deberian ser 777
// Si ejecutamos esta línea se borra el contenido del archivo 
file_put_contents('file.txt', '');
//Acá se escribe dentro del archivo, con el se evita que se sobre escriba el documento y \n es dar un salto de línea
//file_put_contents('file.txt', "Hola Monik \n", FILE_APPEND);

//Acá utilizamos un cilo para llenar el documento 
for ($i = 1; $i <= 10; $i++) {
    file_put_contents('file.txt', "$i \n", FILE_APPEND);
}

//Acá se crea un array con el archivo y es posible acceder a cualquiera de la posiones del él
$archivo = file('file.txt');

//Acá accedemos a la líneas del archivo por medio del array 

echo "<br>" . $archivo[5];


//Acá se imprime el contenido del array  
echo "<pre>";
print_r($archivo);
