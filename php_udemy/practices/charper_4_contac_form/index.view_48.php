<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Formulario de contacto</title>
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" type='text/css'>
<link rel="stylesheet" href="../../css/styles_48.css">

</head>
<body>

<div class="wrap">

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
		
		<input id="name" type="text" class="form-control" name="name" placeholder="Nombre" value="<?php if (! $sent && isset($name)) echo $name ?>"/>
		
		<input id="mail" type="text" class="form-control" name="mail" placeholder="Correo" value="<?php if (! $sent && isset($mail)) echo $mail ?>"/>
		
		<textarea id="message" class="form-control" name="message" placeholder="Mensaje"><?php if (! $sent && isset($message)) echo $message ?></textarea>
		
		<?php if (!empty($errores)): ?>
			<div class="alert error">
				<?php echo $errores; ?>
			</div>		
		<?php elseif ($sent): ?>
			<div class="alert sucess">
				<p>Enviado correctamente</p>
			</div>		
		<?php endif ?>	
		
		<input type="submit" class="btn btn-primary" name="submit" value="Enviar Correo">
						
	</form>

</div>

</body>
</html>