<?php

if(isset($_POST['submit'])){

	require_once 'conexion.php';
    
	$user_name = isset($_POST['nm_name']) ? mysqli_real_escape_string($conexion, $_POST['nm_name']) : false;
	$genero = isset($_POST['nm_genero']) ? mysqli_real_escape_string($conexion, $_POST['nm_genero']) : false;
	$fecha = isset($_POST['nm_fecha']) ? mysqli_real_escape_string($conexion, $_POST['nm_fecha']) : false;
	$numero = isset($_POST['nm_celular']) ? mysqli_real_escape_string($conexion, $_POST['nm_celular']) : false;
	$email = isset($_POST['nm_correo']) ? mysqli_real_escape_string($conexion, $_POST['nm_correo']) : false;
	$servicio = isset($_POST['nm_servicio']) ? mysqli_real_escape_string($conexion, $_POST['nm_servicio']) : false;
	$estado = isset($_POST['nm_estado']) ? mysqli_real_escape_string($conexion, $_POST['nm_estado']) : false;
	$sobreEl = isset($_POST['nm_sobreEl']) ? mysqli_real_escape_string($conexion, $_POST['nm_sobreEl']) : false; 
	
	$foto = isset($_FILES["nm_foto"]["name"]);
	$ident = isset($_FILES["nm_identificacion"]["name"]);
	$comprobante = isset($_FILES["nm_comprobante"]["name"]);

	$errores = array();

	if(!empty($user_name) && !is_numeric($user_name) && !preg_match("/[0-9]/", $user_name)){
		$nombre_validado = true;
	}else{
		$nombre_validado = false;
		$errores['username'] = "Nombre incorrecto, no puede estar vacio ni contener numeros";
	}

	if(!empty($numero) && is_numeric($numero) && preg_match("/[0-9]/", $numero) && strlen($numero) == 10){
		$numero_valido = true;
	}else{
		$numero_valido = false;
		$errores['numero'] = "El numero Telefonico es incorrecto";
	}

	if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
		$email_validado = true;
	}else{
		$email_validado = false;
		$errores['email'] = "El email no es válido";
	}
	
	if(!empty($genero) || $genero != "0"){
		$nombre_validado = true;
	}else{
		$nombre_validado = false;
		$errores['genero'] = "selecciona un genero";
	}

	if(!empty($servicio) || $servicio != "0"){
		$nombre_validado = true;
	}else{
		$nombre_validado = false;
		$errores['servicio'] = "selecciona un servicio";
	}

	if(!empty($estado) || $estado != "0"){
		$nombre_validado = true;
	}else{
		$nombre_validado = false;
		$errores['estado'] = "selecciona un estado";
	}

	//validar si se selecciono un archivo


	$guardar_usuario = false;

	var_dump($errores);
	
	if(count($errores) == 0){
		$guardar_usuario = true;
		// INSERTAR USUARIO EN LA TABLA USUARIOS DE LA DB
		echo('formulario correcto');
      // $sql = "INSERT INTO servicios VALUES(null, '$user_name', '$genero', '$fecha', '$numero', '$email', '$servicio', '$estado', '$foto', '$ident', '$comprobante', '$sobreEl')";

	}else{
		echo "<script>alert('UPS!!!... Lo lamento, problemas en el servidor');</script>";
		header('Location:../index.html');
	}
}
