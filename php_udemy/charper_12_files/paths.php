<?php
 
//Pathinfo() con el parámetro PATHINFO_DIRNAME devuleve la ruta del archivo  
echo pathinfo('carpeta1/carpeta2/file.txt', PATHINFO_DIRNAME) . '<br>';
//Pathinfo() con el parámetro PATHINFO_BASENAME devuleve el nombre del archivo con su extensión 
echo pathinfo('carpeta1/carpeta2/file.txt', PATHINFO_BASENAME) . '<br>';
//Pathinfo() con el parámetro PATHINFO_EXTENSION devuleve la extensión del archivo  
echo pathinfo('carpeta1/carpeta2/file.txt', PATHINFO_EXTENSION) . '<br>';
//Pathinfo() con el parámetro PATHINFO_FILENAME devuleve el nombre del archivo 
echo pathinfo('carpeta1/carpeta2/file.txt', PATHINFO_FILENAME) . '<br>';
//La función glob sirve para buscar archivos con su extensión o nombre mediante un patrón
//Acá se buscan todos los archivos conterminación .txt, se puede reemplazar por cualquier extensión   
$glob1 = glob('*.txt'); 
echo '<pre>';
echo print_r($glob1);
//Acá se buscan todos los archivos que empiezan con la letra f y terminación .txt,    
$glob2 = glob('f*.txt'); 
echo '<pre>';
echo print_r($glob2);
////Acá se buscan todos los archivos con las extensiones que se definian dentro de las llaves    
$glob3 = glob('*.{php,html,txt}', GLOB_BRACE);
echo '<pre>';
echo print_r($glob3);
////Acá se buscan todos los archivos dentro de la carpeta con las extensiones que se definian dentro de las llaves    
$glob4 = glob('./*.{php,html,txt}', GLOB_BRACE);
echo '<pre>';
echo print_r($glob4);

//var/www/juank.com/htdocs/github/Udemy.github.io/php_udemy/practices



?>