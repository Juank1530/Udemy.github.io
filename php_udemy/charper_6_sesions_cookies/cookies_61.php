<?php

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Cookies</title>
<link rel="stylesheet" href="../css/style.css">
</head>
<body>

	<h1>COOKIES</h1>
	
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
		<input type="submit" name="set" value="Setear Cookie"><br><br>
		<input type="submit" name="delete" value="Limpiar Cookie"><br>
	</form>
	
	<?php
	    //Acá se captura el envío del botón utilizando la propiedad name del formulario
	    //También se evalua cual de los dos se utilizó y se ejecuta el código correspondiente
        if ($_POST['set']) {
            //En esta línea se establece laa cookie
            //font-size para el tamaño de la fuente
            //(time() tiempo actual + 60 segundos * 60 minutos * 24 horas * 365 días) esta cookie es de un año
            setcookie('font-size', '40px', time() + 60 * 60 * 24 * 30, '/');
            echo "<p>Cookie Seteada </p><br>";
        } elseif ($_POST['delete']) {
            //cambiando el + por un - se elimina la cookie porque se le pasa un fecha ya expirada
            setcookie('font-size', '40px', time() - 60 * 60 * 24 * 30, '/');
            echo "<p>Cookie Eliminada </p><br>";
        }
    ?>

	

</body>
</html>