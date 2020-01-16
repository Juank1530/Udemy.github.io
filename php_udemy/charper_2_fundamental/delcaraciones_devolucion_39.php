<?php 

//Con esta sentencia le indico que la funcion va a devolver un entero de no ser así marcará un error 
function obtener_edad() :int {
    $edad = 34;
    return $edad;
}


echo obtener_edad();



?>