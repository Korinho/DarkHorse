<?php

	echo $sql_destacada = "SELECT *

								FROM slide where id=1 "; 

	$result_destacada = mysql_query($sql_destacada, $conn);

	$newArray = mysql_fetch_array($result_destacada);

		$id = $newArray['id'];

												$texto1 = $newArray['titulo1'];
												$texto2 = $newArray['titulo2'];
												$texto3 = $newArray['titulo3'];
												$texto4 = $newArray['titulo4'];

												$estado1 = $newArray['estado1'];
												$estado2 = $newArray['estado2'];
												$estado3 = $newArray['estado3'];
												$estado4 = $newArray['estado4'];
												
												$foto1 = $newArray['imagen1'];
												$foto2 = $newArray['imagen2'];
												$foto3 = $newArray['imagen3'];
												$foto4 = $newArray['imagen4'];
		

	

?>

