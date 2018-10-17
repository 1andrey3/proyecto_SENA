<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="http://localhost/tarea/assets/css/Formu.css">
	<title>Formulario</title>
</head>
<body>
<div class="Formulario">
<form action="Cont_form/subir_datos" method="POST">
<div class="Titulo">
	AGREGAR REGISTRO
</div>
	<input class="Nod" type="number" name="nodocu" placeholder="Documento">
	<input class="Nomb" type="text" name="nombres" placeholder="Nombres">
	<input class="Ape" type="text" name="apellidos" placeholder="Apellidos">
	<input class="Correo" type="email" name="correo" placeholder="Correo electronico">
	<select class="Selector" name="rol">
		<option value="" selected="true" disabled="true">Rol</option>
		<option>Ingeniero</option>
		<option>Contador</option>
		<option>Recepcionista</option>
	</select>
	<input class="Envio" type="submit" name="agregar">
</form>
</div>
</body>
</html>