<?php

class Persona
{

    // La palabra static permite acceder a las propiedas y métodos de una clase sin instanciar el objeto de la clase
    public static $day = 'January 15th';

    // Por defecto se pasa en valor nulo al parámetro para hacer una validación y así poder controlar los errores
    public static function saludo($name = NULL)
    {
        if ($name) {
            return 'Hola, buen día ' . $name . '. <br>';
        } else {
            return 'Hola, buen día. <br>';
        }
    }
}

// Este es el uso normal de la clase
$juank = new persona();

echo $juank->saludo('JuanK');

// En esta línea estoy accediendo a las propiedaes y métodos de la clase Persona son necesidad de instanciar el objeto de la clase
echo Persona::$day . '<br>';
echo Persona::saludo('MoniK');

