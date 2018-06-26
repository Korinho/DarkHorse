<?php
	 $sql_destacada1 = "SELECT *
								FROM seccion WHERE posicion='2' and activo='1' ;"; 
	$result_destacada1 = mysql_query($sql_destacada1, $conn);
	$newArray1 = mysql_fetch_array($result_destacada1);
		$servicios_id = $newArray1['id'];
		$servicios_nombre = $newArray1['nombre'];
		$servicios_intro = $newArray1['intro'];
		$servicios_contenido = $newArray1['contenido'];
		$servicios_activo = $newArray1['activo'];
		
	$sql_destacada2 = "SELECT *
								FROM seccion WHERE posicion='1' and activo='1' ;"; 
	$result_destacada2 = mysql_query($sql_destacada2, $conn);
	$newArray2 = mysql_fetch_array($result_destacada2);
		$nosotros_id = $newArray2['id'];
		$nosotros_nombre = $newArray2['nombre'];
		$nosotros_intro = $newArray2['intro'];
		$nosotros_contenido = $newArray2['contenido'];
		$nosotros_activo = $newArray2['activo'];
		
	$sql_destacada4 = "SELECT *
								FROM seccion WHERE posicion='4' and activo='1' ;"; 
	$result_destacada4 = mysql_query($sql_destacada4, $conn);
	$newArray4 = mysql_fetch_array($result_destacada4);
		$noticias_id = $newArray4['id'];
		$noticias_nombre = $newArray4['nombre'];
		$noticias_intro = $newArray4['intro'];
		$noticias_contenido = $newArray4['contenido'];
		$noticias_activo = $newArray4['activo'];
		
	$sql_destacada5 = "SELECT *
								FROM seccion WHERE posicion='5' and activo='1' ;"; 
	$result_destacada5 = mysql_query($sql_destacada5, $conn);
	$newArray5 = mysql_fetch_array($result_destacada5);
		$bt_id = $newArray5['id'];
		$bt_nombre = $newArray5['nombre'];
		$bt_intro = $newArray5['intro'];
		$bt_contenido = $newArray5['contenido'];
		$bt_activo = $newArray5['activo'];
		
	$sql_destacada6 = "SELECT *
								FROM seccion WHERE posicion='6' and activo='1' ;"; 
	$result_destacada6 = mysql_query($sql_destacada6, $conn);
	$newArray6 = mysql_fetch_array($result_destacada6);
		$sp_id = $newArray6['id'];
		$sp_nombre = $newArray6['nombre'];
		$sp_intro = $newArray6['intro'];
		$sp_contenido = $newArray6['contenido'];
		$sp_activo = $newArray6['activo'];
		
	$sql_destacada7 = "SELECT *
								FROM seccion WHERE posicion='7' and activo='1' ;"; 
	$result_destacada7 = mysql_query($sql_destacada7, $conn);
	$newArray7 = mysql_fetch_array($result_destacada7);
		$contacto_id = $newArray7['id'];
		$contacto_nombre = $newArray7['nombre'];
		$contacto_intro = $newArray7['intro'];
		$contacto_contenido = $newArray7['contenido'];
		$contacto_activo = $newArray7['activo'];
		
		
	
?>
