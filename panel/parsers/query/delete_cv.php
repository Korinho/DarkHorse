<?php

	session_start();

	include('../funciones.php');

	if(accesoModulos()) 

	{

		$id = $_GET['id'];
		$tipo = $_GET['tipo'];
		$sql_destacada = "SELECT *

								FROM nota WHERE id=$id ;"; 

		$result_destacada = mysql_query($sql_destacada, $conn);

		$newArray = mysql_fetch_array($result_destacada);

			$id = $newArray['id'];

			$titulo = $newArray['titulo'];

			$descripcion = $newArray['descripcion'];

			

			$foto = $newArray['imagen'];

			
			if($tipo=="foto"){
			$sql = "UPDATE nota SET 
																					
											imagen = \"\"														

									WHERE id = \"$id\" LIMIT 1";
					$result = mysql_query($sql, $conn);
			$archivo = "archivos/".$foto;	
			unlink($archivo) ;
			
			}
		$urlOK = "nota";
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
