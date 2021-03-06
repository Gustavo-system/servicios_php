<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Registro de Servicios</title>
		<link
			rel="stylesheet"
			href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
			integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
			crossorigin="anonymous"
		/>
		<link rel="stylesheet" href="css/main.css" />
	</head>
	<body>
		<div class="container mt-5">
			<h1 class="mb-4 text-center">Registro de Nuevo Servicio</h1>
			<br />

			<form
				action="php/validaciones.php"
				method="POST"
				onsubmit="return validar();"
				enctype="multipart/form-data"
			>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
						<label class="form-label">Nombre Completo: <small>*</small></label>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
						<input
							type="text"
							class="form-control"
							id="id_nombre"
							name="nm_name"
							autofocus
						/>
						<small class="error" id="error_nombre">
							El nombre no puede estar vacio y tampoco contiene numeros.
						</small>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
						<label class="form-label">Sexo: <small>*</small></label>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
						<select class="form-control" id="id_genero" name="nm_genero">
							<option selected value="0">Seleccione uno</option>
							<option value="femenino">Femenino</option>
							<option value="masculino">Masculino</option>
						</select>
						<small class="error" id="error_genero"> requerido </small>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
						<label class="form-label">Fecha de nacimiento: <small>*</small></label>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
						<input type="date" class="form-control" id="id_date" name="nm_fecha" />
						<small class="error" id="error_fecha"> Ingrese una fecha correcta </small>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
						<label class="form-label">Numero celular:</label>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
						<input
							type="text"
							class="form-control"
							id="id_phoneNumber"
							name="nm_celular"
						/>
						<small class="error" id="error_numero">
							El numero no contiene letras y son 10 digitos.
						</small>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
						<label class="form-label">Correo electronico: <small>*</small></label>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
						<input type="email" class="form-control" id="id_email" name="nm_correo" />
						<small class="error" id="error_email">
							El correo es requerido y compruebe que este correcto.
						</small>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
						<label class="form-label">Tipo de Servicio: <small>*</small></label>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
						<select class="form-control" name="nm_servicio" id="id_servicio">
							<option selected value="0">Seleccione uno</option>
							<option value="Estilista">Estilista</option>
							<option value="BarberShop">Barber Shop</option>
							<option value="Electricista">Electricista</option>
							<option value="Herrero">Herrero</option>
							<option value="Jardinero">Jardinero</option>
							<option value="Plomero">Plomero</option>
							<option value="Carpintero">Carpintero</option>
							<option value="Tornero">Tornero</option>
							<option value="Alba??il">Alba??il</option>
							<option value="Pintor">Pintor</option>
							<option value="Escultor">Escultor</option>
						</select>
						<small class="error" id="error_servicio"> Requerido </small>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
						<label class="form-label">Estado: <small>*</small></label>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
						<select class="form-control" name="nm_estado" id="id_estado">
							<option selected value="0">Seleccione uno...</option>
							<option value="Aguascalientes">Aguascalientes</option>
							<option value="Baja California">Baja California</option>
							<option value="Baja California Sur">Baja California Sur</option>
							<option value="Campeche">Campeche</option>
							<option value="Chiapas">Chiapas</option>
							<option value="Chihuahua">Chihuahua</option>
							<option value="CDMX">Ciudad de M??xico</option>
							<option value="Coahuila">Coahuila</option>
							<option value="Colima">Colima</option>
							<option value="Durango">Durango</option>
							<option value="Estado de M??xico">Estado de M??xico</option>
							<option value="Guanajuato">Guanajuato</option>
							<option value="Guerrero">Guerrero</option>
							<option value="Hidalgo">Hidalgo</option>
							<option value="Jalisco">Jalisco</option>
							<option value="Michoac??n">Michoac??n</option>
							<option value="Morelos">Morelos</option>
							<option value="Nayarit">Nayarit</option>
							<option value="Nuevo Le??n">Nuevo Le??n</option>
							<option value="Oaxaca">Oaxaca</option>
							<option value="Puebla">Puebla</option>
							<option value="Quer??taro">Quer??taro</option>
							<option value="Quintana Roo">Quintana Roo</option>
							<option value="San Luis Potos??">San Luis Potos??</option>
							<option value="Sinaloa">Sinaloa</option>
							<option value="Sonora">Sonora</option>
							<option value="Tabasco">Tabasco</option>
							<option value="Tamaulipas">Tamaulipas</option>
							<option value="Tlaxcala">Tlaxcala</option>
							<option value="Veracruz">Veracruz</option>
							<option value="Yucat??n">Yucat??n</option>
							<option value="Zacatecas">Zacatecas</option>
						</select>
						<small class="error" id="error_estado"> Requerido </small>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
						<label class="form-label"> Fotografia: <small>*</small> </label>
					</div>
					<div class="col">
						<input
							class="form-control"
							accept="image/png, image/jpeg"
							type="file"
							name="nm_foto"
							id="id_foto"
							onchange="fileSelect(this, 'id_foto', 'error_foto');"
						/>
						<small class="error" id="error_foto">
							Ingrese en formato jpen o png, campo requerido
						</small>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
						<label class="form-label"> Identificacion Oficial: <small>*</small> </label>
					</div>
					<div class="col">
						<input
							class="form-control"
							accept="image/png, image/jpeg"
							type="file"
							name="nm_identificacion"
							id="id_identificacion"
							onchange="fileSelect(this, 'id_identificacion', 'error_identificacion');"
						/>
						<small class="error" id="error_identificacion">
							Ingrese en formato jpen o png, campo requerido
						</small>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
						<label class="form-label"> Comprobante domiciliario: <small>*</small> </label>
					</div>
					<div class="col">
						<input
							class="form-control"
							accept="image/png, image/jpeg"
							type="file"
							name="nm_comprobante"
							id="id_comprobante"
							onchange="fileSelect(this, 'id_comprobante', 'error_comprobante');"
						/>
						<small class="error" id="error_comprobante">
							Ingrese en formato jpen o png, campo requerido
						</small>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
						<label class="form-label"> Cuentanos sobre ti:</label>
					</div>
					<div class="col">
						<textarea class="form-control" name="nm_sobreEl" id="" rows="10"></textarea>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 col-lg-3"></div>
					<div class="col">
						<span>Los campos marcados con un <small>*</small> son obligatorios</span>
					</div>
				</div>

				<input
					type="submit"
					class="btn btn-block button-enviar mb-5 mt-5"
					id="id_btn_enviar"
					name="submit"
					value="Enviar"
				/>
			</form>
		</div>

		<script src="js/formulario.js"></script>
	</body>
</html>
