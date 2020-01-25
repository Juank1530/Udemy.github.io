<?php

//Se validad que la cookie este seteada y se evita inyeciión de por html
if (isset($_COOKIE['font-size'])) {
    $size = htmlspecialchars($_COOKIE['font-size']);
} else {
    //Si la cookie no está seteada se pasa un valor por defecto
    $size = '15px';
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Texto Cookies</title>
<style>
    p {
        font-size: <?php echo $size ?>;
    }
    
</style>
<link rel="stylesheet" href="../css/style.css">
</head>
<body>

	<h1>TEXTO COOKIES</h1>
	
	<p>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi cum enim doloremque molestias dolor iure beatae harum pariatur neque minus perspiciatis adipisci atque aliquam quisquam quo. Minima iste quia tempore magni error minus nisi enim recusandae alias veritatis rem explicabo nesciunt vitae atque magnam perspiciatis consequuntur ducimus ab dolore sit!
	</p>
	
</body>
</html>