<?php
	session_start();
	include('../funciones.php');
	
	if(accesoModulos()) 
	{	
		$id = $_POST['idseccion'];
		$contenido = $_POST['contenido'];
		$activo = $_POST['activo'];
		$intro = $_POST['intro'];
		$posicion = $_POST['intro'];
		
		
			
		if($activo == 'on'){$activo=1;}
	
		echo $sql = "UPDATE seccion SET 
										intro = \"$intro\",  
										contenido = \"$contenido\",
										activo = \"$activo\"										
										
										
								WHERE id = \"$id\" LIMIT 1";
		$urlOK = "seccion";//variable usada para el redireccionamiento de acciones
		
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
