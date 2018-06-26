<?php 

  $sql_destacada = "SELECT *
								FROM seccion WHERE id=$idpersonal ;"; 
	$result_destacada = mysql_query($sql_destacada, $conn);
	$newArray = mysql_fetch_array($result_destacada);

	$nombre = $newArray['nombre'];
		$contenido = $newArray['contenido'];		$titulo = $newArray['titulo'];


		
		
?>	