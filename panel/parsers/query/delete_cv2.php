<?php

	session_start();

	include('../funciones.php');

	if(accesoModulos()) 

	{

		$tipo = $_GET['tipo'];
		$image = "imagen$tipo";
		echo $sql_destacada = "SELECT $image

								FROM slide WHERE id=1 ;"; 

		$result_destacada = mysql_query($sql_destacada, $conn);

		$newArray = mysql_fetch_array($result_destacada);

						

			$foto = $newArray['imagen'];

			
			
			echo $sql = "UPDATE slide SET 
																					
											$image = \"\"														

									WHERE id = \"1\" LIMIT 1";
					$result = mysql_query($sql, $conn);
			$archivo = "slide/".$foto;	
			unlink($archivo) ;
			
			
		$urlOK = "slide";
		mysql_close($conn);$conn="";
		if ($result)

		{

		//	print "<meta http-equiv=\"refresh\" content=\"0;URL=../../$urlOK.php?id=$id&edit=1&succes=1\">";

		}
		else
		{

		//print "<meta http-equiv=\"refresh\" content=\"0;URL=../../$urlOK.php?id=$id&edit=1&error=1\">";			

		}

	}

	else

	{

			mysql_close($conn);$conn="";

			borraAcceso();

	}

?>
