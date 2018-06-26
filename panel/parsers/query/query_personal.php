<?php

	echo $sql_destacada = "SELECT *

								FROM nota WHERE id=$idpersonal ;"; 

	$result_destacada = mysql_query($sql_destacada, $conn);

	$newArray = mysql_fetch_array($result_destacada);

		$id = $newArray['id'];

												$titulo = $newArray['titulo'];

												$descripcion = $newArray['descripcion'];

												$contenido = $newArray['contenido'];
												$fecha = $newArray['fecha'];
												$foto = $newArray['imagen'];
												$estado = $newArray['estado'];

		

	

?>

