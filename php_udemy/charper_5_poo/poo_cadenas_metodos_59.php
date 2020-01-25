<?php

class User
{

    public static $name;

    public static $surname;

    public static $mail;

    public static $age;

    // Método contructor
    function __construct($name, $surname, $mail, $age)
    {
        // Asignar las varibles a los parámetros
        $this->name = $name;
        $this->surname = $surname;
        $this->mail = $mail;
        $this->age = $age;
    }

    function showName()
    {
        echo 'Nombre: ' . $this->name . '. <br>';
        // Para poder los metodos de cadena es necesario utilizar esta línea y retornar la función completa
        return $this;
    }

    function showSurname()
    {
        echo 'Apellido: ' . $this->surname . '. <br>';
        // Para poder los metodos de cadena es necesario utilizar esta línea y retornar la función completa
        return $this;
    }

    function showMail()
    {
        echo 'Correo: ' . $this->mail . '. <br>';
        // Para poder los metodos de cadena es necesario utilizar esta línea y retornar la función completa
        return $this;
    }

    function showAge()
    {
        echo 'Edad: ' . $this->age . '. <br>';
        // Para poder los metodos de cadena es necesario utilizar esta línea y retornar la función completa
        return $this;
    }
}

$juank = new User('Juank', 'Támara', 'juank1530@hotmail.com', 34);

// Con el operador -> puedo concatenar los diferentes métodos
$juank->showName()
      ->showSurname()
      ->showMail()
      ->showAge();





