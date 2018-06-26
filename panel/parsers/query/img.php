<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ejemplo de subida y redimensionamiento de im&aacute;genes usando SimpleImage</title>
<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<?php
/* *
* Ejemplo creado, diseñado, programado, desarrollado y expuesto por Ismael "Loveless" Limo Llanos. 
* Puedes valerte de este ejemplo y usarlo para lo que quieras, 
* pero si lo posteas en tu página web o blog deberás poner el autor y la web de quien lo hizo (ósea yo), 
* de lo contrario te partiré el culo con una llave inglesa.
* Agradecimientos: Simon Jarvis, el creador de la clase SimpleImage.
* */
include("SimpleImage.class.php"); //incluimos la clase
$var_usar_thumb = isset($_POST['chkThumb']) ? 1 : 0; //variable que comprueba si tendrá efecto o no el redimensionamiento (1 para sí, 0 para no)
$var_thumb_ancho = isset($_POST['txtAncho']) ? $_POST['txtAncho'] : 300; //variable que recibe el ancho que va a tener la imagen
$var_thumb_alto = isset($_POST['txtAlto']) ? $_POST['txtAlto'] : 300; //variable que recibe el alto que va a tener la imagen
if ($_FILES["file_img"]["error"] > 0){ //Si hay error en la imagen
	echo "Hay alg&uacute;n error con la imagen, para regresar haga <a href=\"form_funcion.html\">Click aqu&iacute;.</a>"; //mostramos un mensaje de error
}
else{ //sino
echo 	$var_name_img = "x.jpg"; //repecionamos la imagen, y tomamos su nombre
	$var_img_dir = "archivos/"; //obtenemos el directorio actual con el cual se está trabajando
	if (move_uploaded_file($_FILES["file_img"]["tmp_name"], $var_img_dir.$var_name_img)){ //si la imagen es subida al directorio del servidor
		$subida = true; //admitimos que la subida fue correcta
	}
	if ($subida === true){ //si la subida fue correcta
		$obj_simpleimage = new SimpleImage(); //creamos un objeto de la clase SimpleImage
		$obj_simpleimage->load($var_img_dir.$var_name_img); //leemos la imagen 
		if ( ($_FILES["file_img"]["type"]) != 'image/gif' && $var_usar_thumb == 1){//Si la imagen no es de tipo gif, y marcamos en el formulario como thumbnail
			$var_nuevo_archivo = time().rand().".jpg"; //asignamos un nombre aleatorio al nuevo archivo, para evitar sobreescritura
			$obj_simpleimage->resize($var_thumb_ancho,$var_thumb_alto); //redimensionamos la imagen, con los valores de ancho y alto que hemos especificado
		}else{ //sino
			$var_nuevo_archivo = time().rand().$var_name_img; //se agregará al nombre original de la imagen una serie de números aleatorios
		}
		$var_nuevo_archivo = strtolower(str_replace(' ', '_', $var_nuevo_archivo)); //reemplazamos los espacios en blanco con sub-guiones, para hacer más compatible el nombre del archivo
		$obj_simpleimage->save($var_img_dir.$var_nuevo_archivo); //guardamos los cambios efectuados en la imagen
		unlink($var_img_dir . $var_name_img); //eliminamos del temporal la imagen que estabamos subiendo
		echo "<div align=\"center\">Imagen subida correctamente. <br /><h4>Vista de la imagen:</h4><br /><img src=\"".$var_img_dir.$var_nuevo_archivo."\" alt=\"".$var_nuevo_archivo."\" /></div>"; //mostramos los resultados
	}
}
/*
* El que comenta su propio código es un ser divino, que ama a la humanidad y muestra aprecio por los demás seres vivientes,
* y merece ser recordado por su bondad y simpatía.
* El que no lo hace, es un ser malvado, criminal, homicida, reguetonero sidoso y lo único que merece es morir violado por las orejas.
*/
?>
</body>
</html>