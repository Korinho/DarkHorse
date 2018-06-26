<?php
	$sql_destacada = "SELECT *
								FROM usuarios WHERE id=$idusuario ;"; 
	$result_destacada = mysql_query($sql_destacada, $conn);
	$newArray = mysql_fetch_array($result_destacada);
		$id = $newArray['id'];
		$user = $newArray['user']; 
		$pass = $newArray['pass']; 
		$nombre = $newArray['nombre']; 
		$apellido = $newArray['apellido']; 
		$email	 = $newArray['email']; 
		$domicilio = $newArray['domicilio']; 
		$colonia = $newArray['colonia']; 
		$ciudad = $newArray['ciudad']; 
		$cp = $newArray['cp']; 
		$telefono = $newArray['telefono']; 
		$nivel = $newArray['nivel']; 
		$activo = $newArray['activo']; 
		$token = $newArray['token']; 
		$inicio_sesion = $newArray['inicio_sesion']; 
		$fin_sesion = $newArray['fin_sesion']; 
		$avatar =  $newArray['avatar']; 
		$fecha = $newArray['fecha']; 
		$sexo = $newArray['sexo']; 
		
		
	
?>
