<!DOCTYPE html> 
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="http://localhost/proyecto_SENA/assets/css/bootstrap.css">
	<link rel="stylesheet" href="http://localhost/proyecto_SENA/assets/css/Formu.css">
	<link rel="shortcut icon" href="http://localhost/proyecto_SENA/assets/img/sena.jpg" type="image/x-icon">
	<title>Formulario</title>
</head>
<body  oncopy="return false" oncut="return false" onpaste="return false" >
	<div class="container-fluid bg-dark">
		<div class="Formulario border border-danger">
			<form action="Cont_form/subir_datos" method="POST"    onsubmit="return validar()">
				<div class="Titulo">
					AGREGAR REGISTRO
				</div>
				<div id="error" class="col-12 text-center border-redounded"></div>
				<input class="Nod" type="Text" name="nodocu"     id="doc" placeholder="Documento" maxlength="11" onkeydown="return numeros(event)">
				<div class="row form-group">
					<input class="form-control col-5 m-4 border border-info" type="text" name="nombres"   id="Nom1" placeholder="Primer Nombre">
					<input class="form-control col-5 m-4 border border-info" type="text" name="nombres"   id="Nom2" placeholder="Segundo Nombre">
				</div>
<<<<<<< HEAD
				<input class="Ape" type="text" name="apellidos"  id="App" placeholder="Apellidos"><br>
			    <input type="radio" name="sexo" id="Hombre" value="Hombre">Hombre<br>
			    <input type="radio" name="sexo" id="Mujer" value="Mujer">Mujer<br>
			    <div class="row form-group">
				<input type="text" class="col-4 offset-4 form-control mt-4" name="telef" id="telefono" placeholder="Telefono" onkeydown="return numeros(event)" maxlength="10">
			    </div>

				<input class="Correo" type="email" name="correo" id="Mail" placeholder="Correo electronico">
=======
				<input class="Ape" type="text" name="apellidos"  id="App" placeholder="Apellidos">
				<div class="form-row m-5">
					<input class="form-control  col-6 offset-1" type="text	" name="correo" id="Mail" placeholder="Correo electronico">
					<label class="input-group-text" for="Mail2" >@</label>
					<input type="text" class="form-control col-3" placeholder="ej. 'Gmail.com'" id="Mail2">
				</div>
				
>>>>>>> e9253ea575ab886a034c5c77daf34cba18795ab9
				<select class="Selector" name="rol" id="rol">
					<option disabled selected value="">Seleccione Rol</option>
					<option value="Ingeniero">Ingeniero</option>
					<option value="Contador">Contador</option>
					<option value="Recepcionista">Recepcionista</option>
				</select>
				<!-- <button class="Envio btn btn-light bg-dark text-light"> agregar</button> -->
				<input class="Envio btn btn-light  bg-dark text-light" type="submit" name="agregar" >
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
	<script src="http://localhost/proyecto_SENA/assets/js/validar.js"></script>
</html>