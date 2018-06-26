<?php

	session_start();

	include('../funciones.php');

	if(accesoModulos()) 

	{

	

		
		$titulo = Trim(stripslashes($_POST['titulo']));

		$contenido = Trim(stripslashes($_POST['editor1']));


		$id = $_POST['idpersonal'];

		$estado = $_POST['estado'];

		 $sql = "UPDATE seccion SET 
																				
										titulo = \"$titulo\",	
										contenido = \"$contenido\"	

								WHERE id = \"$id\" LIMIT 1";
				$result = mysql_query($sql, $conn);
				
		

		 
		
		$urlOK = "seccion";

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





