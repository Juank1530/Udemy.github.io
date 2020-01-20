<?php

//Este tipo de clases solo se pueden acceder si otra clase la hereda
abstract class Persona_Abs {
    function Saludo() {
        return 'Hola!!!';
    }
}

class Abs extends Persona_Abs {
    function function_name() {
        ;
    }
}

//Al llamar diecto a la clase Persona_Abs no se puede acceder ni a las propiedades ni a los métodos
//$juank = new Persona_Abs;
//$juank->Saludo();

$juank = new Abs;
echo $juank->Saludo();

