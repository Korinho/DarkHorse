<?php	session_start();	include('../funciones.php');	if(accesoModulos()) 	{
		$id = Trim(stripslashes($_POST['idusuario']));
		$user = htmlspecialchars(Trim(stripslashes($_POST['user']))); 
		$pass = $_POST['pass']; 
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
		$token = $_POST['token'];
		$inicio_sesion = $_POST['inicio_sesion'];
		$fin_sesion = $_POST['fin_sesion'];
		$fecha = $_POST['fecha'];
		$sexo = $_POST['sexo'];
		
		
			if($sexo == 'on'){$sexo=1;}
		if($activo == 'on'){$activo=1;}
	
		echo $sql = "UPDATE usuarios SET 
										user = \"$user\",  
										nombre = \"$nombre\",
										apellido = \"$apellido\", 										
										email = \"$email\", 
										domicilio = \"$domicilio\", 
										colonia = \"$colonia\", 
										ciudad = \"$ciudad\", 
										cp = \"$cp\", 
										telefono = \"$telefono\",
										nivel = \"$nivel\",										
										activo = \"$activo\",
										token = \"$token\",
										inicio_sesion = \"$inicio_sesion\",
										fin_sesion = \"$fin_sesion\",
										sexo = \"$sexo\"
										
								WHERE id = \"$id\" LIMIT 1";
		$urlOK = "usuario";//variable usada para el redireccionamiento de acciones
		
		//include("../images/avatar.php");
		
		$result = mysql_query($sql, $conn);
		mysql_close($conn);$conn="";
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
			mysql_close($conn);$conn="";
			borraAcceso();
	}
?>
