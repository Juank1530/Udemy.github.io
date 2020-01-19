<?php
$errores = '';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mail = $_POST['mail'];

    if (! empty($name)) {
        /*// Elimina espacios en blanco adelante y atrás de la variable
        $name = trim($name);
        // Controla que no se ejecute código html
        $name = htmlspecialchars($name);
        // Elimina / y \ de la variable
        $name = stripcslashes($name);
        //Elimina los caracteres especiales de la variable*/
        $name = filter_var($name, FILTER_SANITIZE_STRING);
        echo "Tu nombre es: $name <br>";
    } else {
        $errores .= 'Por favor agrega un nombre <br>';
    }

    if (! empty($mail)) {
        $mail = filter_var($mail, FILTER_SANITIZE_EMAIL);
        //FILTER_VALIDATE_EMAIL sirve para validar que si sea un correo valido
        if (! filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $errores .= 'Por favor agrega un correo valido <br>';
        } else {
            echo "Tu correo es: $mail <br>";
        }
    } else {
        $errores .= 'Por favor agrega un correo <br>';
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Formulario 45</title>
<style>
.error {
	color: red;
}
</style>
<link rel="stylesheet" href="../css/style.css">
</head>
<body>

	<h1>Validad envio</h1>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"
		method="post">

		<input type="text" placeholder="Nombre" name="name"> 
		<input type="email" placeholder="Correo Electronico" name="mail">

<?php if (!empty($errores)) : ?>
	<div class="error"> <?php echo $errores;?> </div>
<?php endif;?>

<input type="submit" name="submit">


	</form>



</body>
</html>


