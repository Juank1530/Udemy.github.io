<?php

//Esta es una clase que se puede definir como una plantilla con propiedades y métodos
//Usar mayuscula para definirla
class Persona {
    //Estos las propiedades
    public $nombre;
    public $edad;
    public $pais;
    
    //Esta es el método de una clase
    public function show_info() {
        echo $this->nombre . ' tiene ' . $this->edad . ' años de edad y nació en ' . $this->pais . '.<br>';
    }
    
}

$juank = new Persona;
$juank->nombre = 'JuanK';
$juank->edad = 34;
$juank->pais = 'Colombia';

$juank->show_info();

$Monik = new Persona;
$Monik->nombre = 'MoniK';
$Monik->edad = 29;
$Monik->pais = 'USA';

$Monik->show_info();