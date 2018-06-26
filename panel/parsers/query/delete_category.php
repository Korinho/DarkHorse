<?php

	session_start();

	include('../funciones.php');

	if(accesoModulos()) 

	{

		$id = $_GET['id'];
		 $sql_destacada = "SELECT imagen

								FROM nota WHERE id=$id ;"; 

		$result_destacada = mysql_query($sql_destacada, $conn);

	@$newArray = mysql_fetch_array($result_destacada);

					$imagen = $newArray['imagen'];

		

		  $sql = "DELETE FROM nota WHERE id=$id";
		$result = mysql_query($sql, $conn);
		
		
		$img2 = "archivos/".$image;
		@unlink($img2) ;
		
	 $urlOK = "noticias"; 
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
