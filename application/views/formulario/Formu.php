<!DOCTYPE html> 
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="http://localhost/proyecto_SENA/assets/css/bootstrap.css">
	<link rel="stylesheet" href="http://localhost/proyecto_SENA/assets/css/Formu.css">
	<script src="http://localhost/proyecto_SENA/assets/js/validar.js"></script>
	<title>Formulario</title>
</head>
<body>
	<div class="container-fluid bg-dark">
		<div class="Formulario border border-danger">
			<form action="Cont_form/subir_datos" onsubmit="return validar()" method="POST"  >
				<div class="Titulo">
					AGREGAR REGISTRO
				</div>
				<div id="error" class="col-12 text-center border-redounded"></div>
				<input class="Nod" type="Text" name="nodocu"     id="doc" placeholder="Documento" maxlength="12" onkeydown="return numeros(event)">
				<input class="Nomb" type="text" name="nombres"   id="Nom" placeholder="Nombres">
				<input class="Ape" type="text" name="apellidos"  id="App" placeholder="Apellidos">
				<input class="Correo" type="email" name="correo" id="Mail" placeholder="Correo electronico">
				<select class="Selector" name="rol" id="rol">
					<option disabled selected value="">Seleccione Rol</option>
					<option value="Ingeniero">Ingeniero</option>
					<option value="Contador">Contador</option>
					<option value="Recepcionista">Recepcionista</option>
				</select>
				<input class="Envio btn btn-light  bg-dark text-light" type="submit" name="agregar" ">
			</form>
			<div class="transiciones">
			</div>
			<div class="otro_div">uno</div>
			
		</div>
	</div>
	<script src="http://localhost/proyecto_SENA/assets/js/jquery-3.3.1.slim.min.js"></script>
	<script src="http://localhost/proyecto_SENA/assets/js/popper.min.js"></script>
	<script src="http://localhost/proyecto_SENA/assets/js/bootstrap.min.js"> </script>
</body>
</html>