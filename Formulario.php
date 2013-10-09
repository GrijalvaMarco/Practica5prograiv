<!DOCTYPE html>
<html lang="es">
<head>
	<title>Formulario</title>
	
</head>

<body>
<form method="POST" action="formulariosesion.php">
	<fieldset>
		<legend>LOGIN</legend>
		<label id="lblcodigo">C&oacute;digo</label><br/>
		<input type="text" name="codigo" id="txtcodigo" size="20" maxlength="3" required><br/>
		<label id="lblcontraseña">Contrase&ntilde;a</label><br/>
		<input type="password" name="contra" id="pass" size="20" maxlength="3" required><br/>
		<input type="submit" name="btnenviar" value="ENVIAR" required>
	</fieldset>
	</form>
</body>
</html>