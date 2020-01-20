<?php

//Esta es una clase que se puede definir como una plantilla con propiedades y métodos
//Usar mayuscula para definirla
class Persona_constructor {
    //Estos las propiedades
    public $nombre;
    public $edad;
    public $pais;
 
    //Método constructor
    function __construct($nombre, $edad, $pais) {
        //Asignar las variables al método constructor
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
    }
    
    //Esta es el método de una clase
    public function show_info() {
        echo $this->nombre . ' tiene ' . $this->edad . ' años de edad y nació en ' . $this->pais . '.<br>';
    }
 
}

$monik = new Persona_constructor('Monik',29,'España')   ;
$monik->show_info();

$juank = new Persona_constructor('Juank', 34, 'Colombia');
$juank->show_info();
