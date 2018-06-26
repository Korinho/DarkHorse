<?php
	$path = str_replace("\\","/",realpath("../../"))."/images/hotel/";
	
	include("resize.php");
	if ($_FILES["file"]["error"] > 0)
	{
		$archivoError		= "Error: " . $_FILES["file"]["error"];
	}
	else
	{
		$archivoProcesado = "Archivo: " . $_FILES["file"]["name"];
		$archivoTipo		= "Tipo: " . $_FILES["file"]["type"];
		$archivoTamaño	= "Tamaño: " . ($_FILES["file"]["size"] / 1024);
		$archivoGuardado	= "Guardado en: " . $_FILES["file"]["tmp_name"];
	}
	$tipo_imagen= $_FILES["file"]["type"];
	$tipo_imagen= "image/jpeg";
	
	if (is_uploaded_file($_FILES['file']['tmp_name'])) 
	{
		$new_filename = "$path$id".".jpg"; 
		$new_filenameTumb = "$path$id"."_tumb.jpg"; 
	}
	if (move_uploaded_file($_FILES['file']['tmp_name'], "$new_filename")) 
	{ 
		$success_file = 1; 
		$thumb=new thumbnail($new_filename);
		$thumb->size_width(64);
		$thumb->jpeg_quality(100);
		$thumb->save($new_filenameTumb);
		echo $sqlAvatar = "UPDATE convenioshotel SET 
								logo = \"images/logo/$id.jpg\"
						WHERE id = \"$id\" LIMIT 1";		
		$resultAvatar = mysql_query($sqlAvatar, $conn);
	} 
	else 
	{ 
		$success_file = 0; 
	}		
	/*if ($success_file) 
	{ 		
		$href = "href=\"borrarDestino.php?id=$id&fecha=$fecha&tipoArticulo=$tipoArticulo\" onclick=\"javascript:return confirm('Seguro de que quieres borrar la imágen?')\""; 
		echo "<a $href ><img src=\"../../images/destinos/$id".".jpg\" width='200'/></a>"; 				
	} 
	else 
	{ 
		echo "<h1>Ocurri&oacute; un error</h1>"; 
	}*/
	
?>
