<?php
	session_start();
	include('../funciones.php');
	if(accesoModulos()) 
	{
	
		$user = htmlspecialchars(Trim(stripslashes($_POST['user']))); 
		$pass = md5($_POST['pass']);
		$nombre = Trim(stripslashes($_POST['nombre']));
		$apellido = Trim(stripslashes($_POST['apellido']));
		$email	 = $_POST['email'];
		$domicilio = $_POST['domicilio'];
		$colonia = $_POST['colonia'];
		$ciudad = htmlspecialchars(Trim(stripslashes($_POST['ciudad'])));
		$cp = htmlspecialchars(Trim(stripslashes($_POST['cp'])));
		$telefono = htmlspecialchars(Trim(stripslashes($_POST['telefono'])));
		$nivel = htmlspecialchars(Trim(stripslashes($_POST['nivel'])));
		$activo = $_POST['activo'];
		$sexo = $_POST['sexo'];
		$token = $_POST['token'];
		$inicio_sesion = $_POST['inicio_sesion'];
		$fin_sesion = $_POST['fin_sesion'];
		$avatar =  $_POST['avatar'];
		$fecha = $_POST['fecha'];
		
		if($sexo == 'on'){$sexo=1;}
		if($activo == 'on'){$activo=1;}
		
			
		echo $sql = "INSERT INTO usuarios (fecha, user, pass, nombre, apellido, email, domicilio, colonia, ciudad, cp, telefono, nivel , activo, token, inicio_sesion, fin_sesion, avatar, sexo) 
										VALUES (NOW(), '$user', '$pass', '$nombre', '$apellido', '$email','$domicilio', '$colonia', '$ciudad', '$cp', '$telefono', '$nivel', '$activo', '$token', '$inicio_sesion', '$fin_sesion', '$avatar', '$sexo')";
		$result = mysql_query($sql, $conn);
		$id = mysql_insert_id();
		
	
		
				
		$urlOK = "usuario";
		mysql_close($conn); $conn ="";
		if ($result)
		{
			print "<meta http-equiv=\"refresh\" content=\"0;URL=../../$urlOK.php?id=$id&edit=1&succes=1\">";
		}
		else
		{
			print "<meta http-equiv=\"refresh\" content=\"0;URL=../../$urlOK.php?id=$id&edit=1&error=1\">";			
		}
	}
	else
	{
			borraAcceso();
	}
?>


