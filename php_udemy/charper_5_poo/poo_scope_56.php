<?php

//Public e puede acceder desde cualquier lugar del código 
//Procteted solo se puede acceder desde la clase u otras clases que heredaron
//Private solo se puede acceder desde la misma clase 

class Usuario {
    
    public $user;
    protected $mail;
    private $password;
    
    function __construct($user, $mail, $password) {
        $this->user = $user;
        $this->mail = $mail;
        $this->password = $password;
    }
     public function show_info() {
         return  'Su usuario es ' . $this->user . ', el correo asignado es ' . $this->mail . ' y su contraseña es ' . $this->password . '<br>';
     }    
}

class Protejida extends Usuario {
    
    function show_mail() 
    {
        return 'Este es el correo ' . $this->mail . '<br>';
    }
}

class Privada extends Usuario {
    
    function show_pass()
    {
        //Desde acá no es posible acceder a la propiedad del password
        return 'Esta es la contraseña ' . $this->password . '<br>';
    }
}


$juank = new Usuario('JuanK', 'test@test.com', 'xxxxx');
echo $juank->show_info();

$juank_protect = new Protejida('JuanK', 'test@test.com', 'xxxxx');
echo $juank_protect->show_mail();

$juank_private = new Privada('JuanK', 'test@test.com', 'xxxxx');
echo $juank_private->show_pass();





