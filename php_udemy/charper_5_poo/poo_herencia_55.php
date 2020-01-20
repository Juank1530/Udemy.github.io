<?php

// Esta es una clase que se puede definir como una plantilla con propiedades y métodos
// Usar mayuscula para definirla
class Persona_herencia
{

    // Estos las propiedades
    public $nombre;

    public $edad;

    public $pais;

    // Método constructor
    function __construct($nombre, $edad, $pais)
    {
        // Asignar las variables al método constructor
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
    }

    // Esta es el método de una clase
    public function show_info()
    {
        return $this->nombre . ' tiene ' . $this->edad . ' años de edad y nació en ' . $this->pais . '.<br>';
    }
}

// Con la palabra reservada extends se heredan las propiedades de la calse Persona_herencia
class Estudiante extends Persona_herencia
{

    // Se crean las nuevas propiedades de la clase
    public $carrera;

    // Se procede a sobre escribir el método constructor
    function __construct($nombre, $edad, $pais, $carrera)
    {
        // Con la palabra parent se accede a las propiedas de la clase padre
        parent::__construct($nombre, $edad, $pais);
        // Se procede a asignar la nuevas propiedades
        $this->carrera = $carrera;
    }

    // Esta es el método de una clase y se sobre escribio añadiendo las nuevas propiedades
    public function show_info()
    {
        return $this->nombre . ' tiene ' . $this->edad . ' años de edad, nació en ' . $this->pais . ' y su carrera es ' . $this->carrera . '.<br>';
    }
}

class Trabajador extends Estudiante
{

    public $profesion;

    function __construct($nombre, $edad, $pais, $carrera, $profesion)
    {
        parent::__construct($nombre, $edad, $pais, $carrera);
        $this->profesion = $profesion;
    }

    // Esta es el método de una clase y se sobre escribio añadiendo las nuevas propiedades
    public function show_info()
    {
        return $this->nombre . ' tiene ' . $this->edad . ' años de edad, nació en ' . $this->pais . ', su carrera es ' . $this->carrera . ' y su profesion es ' . $this->profesion . '.<br>';
    }
}

$juank = new Persona_herencia('Juank', 34, 'Colombia');
echo $juank->show_info();

$monik = new Estudiante('Monik', 29, 'España', 'Ingeniera de sistemas');
echo $monik->show_info();

$Isa = new Trabajador('Isabel', 59, 'México', 'Licenciada', 'Maestra');
echo $Isa->show_info();




