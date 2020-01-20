<?php

//Esta es una clase que se puede definir como una plantilla con propiedades y métodos
//Usar mayuscula para definirla
class persona {
    //Estos las propiedades
     public $nombre;
     public $edad;
     public $pais;
     
     //Esta es el método de una clase 
     public function show_info() {
         echo 'Hola mundo!!<br>';
     }
     
}

$juank = new persona;

$juank->nombre = 'JuanK';
$juank->edad = 34;
$juank->pais = 'Colombia';

$juank->show_info();
 // echo $juank->nombre . '<br>';
// echo $juank->edad . '<br>';
// echo $juank->pais . '<br>';

$alejo = new persona;

$alejo->nombre = 'Monik';
$alejo->edad = 29;
$alejo->pais = 'Mexico';

