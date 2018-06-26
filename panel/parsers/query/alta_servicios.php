<?php
	session_start();
	include('../funciones.php');
	if(accesoModulos()) 
	{
	
		
		
		$contenido = $_POST['contenido'];
		$activo = $_POST['activo'];
		$intro = $_POST['intro'];
		
		
		if($activo == 'on'){$activo=1;}
		
			
		 echo $sql = "INSERT INTO seccion (fecha, nombre, intro, contenido, posicion, activo) 
										VALUES (NOW(), 'Servicios', '$intro', '$contenido', '2', '$activo')";
		$result = mysql_query($sql, $conn);
		$id = mysql_insert_id();
		
	
		
				
		$urlOK = "demo";
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


