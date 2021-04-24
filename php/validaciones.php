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

	$errores = array();

	if(!empty($user_name) && !is_numeric($user_name) && !preg_match("/[0-9]/", $user_name)){
		$nombre_validado = true;
	}else{
		$nombre_validado = false;
		$errores['username'] = "Nombre incorrecto, no puede estar vacio ni contener numeros";
	}

	//validar fecha

	if($numero != ''){
		if(!empty($numero) && is_numeric($numero) && preg_match("/[0-9]/", $numero) && strlen($numero) == 10){
			$numero_valido = true;
		}else{
			$numero_valido = false;
			$errores['numero'] = "El numero Telefonico es incorrecto";
		}
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

	$ruta = "../registro/imagenes/";
	$accepFiles = array("image/png", "image/jpg", "image/jpeg");
	$limitSize = 100;

	if(in_array($_FILES["nm_foto"]["type"], $accepFiles) && !empty($_FILES["nm_foto"])){
		move_uploaded_file($_FILES["nm_foto"]["tmp_name"], $ruta.$user_name."foto".$_FILES["nm_foto"]["name"]);
	}else{
		$errores['foto'] = "foto incorrecta, error!";
	}

	if(in_array($_FILES["nm_identificacion"]["type"], $accepFiles) && !empty($_FILES["nm_identificacion"])){
		move_uploaded_file($_FILES["nm_identificacion"]["tmp_name"], $ruta.$user_name."identificacion".$_FILES["nm_identificacion"]["name"]);
	}else{
		$errores['identificacion'] = "identificacion incorrecta, error!";
	}

	if(in_array($_FILES["nm_comprobante"]["type"], $accepFiles) && !empty($_FILES["nm_comprobante"])){
		move_uploaded_file($_FILES["nm_comprobante"]["tmp_name"], $ruta.$user_name."comprobante".$_FILES["nm_comprobante"]["name"]);
	}else{
		$errores['comprobante'] = "comprobante incorrecta, error!";
	}

	$guardar_usuario = false;
	var_dump($errores);

	if(count($errores) == 0){
		$guardar_usuario = true;
      $sql = "INSERT INTO registro_new_service VALUES(
			null,
			'$user_name', 
			'$genero', 
			'$fecha',
			'$numero', 
			'$email',
			'$servicio',
			'$estado',
			'".$_FILES['nm_foto']['name']."', 
			'".$_FILES['nm_identificacion']['name']."', 
			'".$_FILES['nm_comprobante']['name']."', 
			'$sobreEl')";
		$resultado = mysqli_query($conexion, $sql);
		if ($resultado) {
			header('Location:../success.html');
	 	}
		else{
			echo("error...");
			// header('Location:../index.html');
		}

	}else{
		echo "<script>alert('UPS!!!... Lo lamento, problemas en el servidor');</script>";
		// header('Location:../index.html');
	}
}
