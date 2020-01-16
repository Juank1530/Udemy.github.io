<?php 

//Acá imprime el arreglo de los datos que se envian 
print_r($_POST);

//esta validación verifca en caso de que el arreglo este vacio y redireciona al formuario 
if (!$_POST) {
    //Redireccion al formulario    
    header('Location: http://juank.com/udemy/Udemy.github.io/php_udemy/chaper_3_forms/enviar_datos_desde_formulario_41.php');
}

    //Se imprime una cadena de texto con los valores de las variables 
    $name = $_POST['name'];
    $sex = $_POST['sex'];
    $year = $_POST['year'];
    $terms = $_POST['terms'];
    
    echo '<br><br>' . "Hola $name, eres $sex, naciste en $year y en la opción de terminos marcaste $terms";

    // el método get es más debil a nivel de seguridad y es posible inyectar código 
    
?>