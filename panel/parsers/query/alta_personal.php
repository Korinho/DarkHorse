<?php

	session_start();

	include('../funciones.php');

	if(accesoModulos()) 

	{

	

		
		$titulo = Trim(stripslashes($_POST['titulo']));

		$contenido = Trim(stripslashes($_POST['editor1']));


		$descripcion = $_POST['descripcion'];

		$estado = $_POST['estado'];


		

		 $sql = "INSERT INTO nota (fecha, titulo, contenido, descripcion, estado) 

										VALUES (NOW(), '$titulo', '$contenido', '$descripcion','$estado' )";

		$result = mysql_query($sql, $conn);

		$id = mysql_insert_id();

		include("SimpleImage.class.php"); //incluimos la clase
		$var_usar_thumb = isset($_POST['chkThumb']) ? 1 : 0; //variable que comprueba si tendrá efecto o no el redimensionamiento (1 para sí, 0 para no)
		$var_thumb_ancho = isset($_POST['txtAncho']) ? $_POST['txtAncho'] : 300; //variable que recibe el ancho que va a tener la imagen
		$var_thumb_alto = isset($_POST['txtAlto']) ? $_POST['txtAlto'] : 300; //variable que recibe el alto que va a tener la imagen
		if ($_FILES["file_img"]["error"] > 0){ //Si hay error en la imagen
		//	echo "Hay alg&uacute;n error con la imagen, para regresar haga <a href=\"form_funcion.html\">Click aqu&iacute;.</a>"; //mostramos un mensaje de error
		}
		else{ //sino
		 	$var_name_img = "x.jpg"; //repecionamos la imagen, y tomamos su nombre
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
				
				 $sql = "UPDATE nota SET 
																				
										imagen = \"$var_nuevo_archivo\"														

								WHERE id = \"$id\" LIMIT 1";
				$result = mysql_query($sql, $conn);
				
				
			}
		}
		$urlOK = "noticias";

/*		  ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'Facebook/config.php';
define('FACEBOOK_SDK_V4_SRC_DIR',__DIR__ .'/Facebook/');
require_once __DIR__ .'/Facebook/autoload.php';

// Create our Application instance (replace this with your appId and secret).
$facebook = new Facebook\Facebook(array(
  'app_id'  => $config['App_ID'],
  'app_secret' => $config['App_Secret'],
    'default_graph_version' => 'v2.4'
));*/


    
	 $params = array();
	 $params['message'] = $_REQUEST['descripcion'];
	 $params['name'] = $_REQUEST['titulo'];

	 include('clss/npgsocial.php');
	 
	 NpgSocial::publicaFacebook($params);
	
	 
	 //header("Location: /panel/nota.php");


//$helper = $facebook->getRedirectLoginHelper();
//$permissions = ['email', 'user_likes','publish_actions','user_managed_groups']; // optional
//$loginUrl = $helper->getLoginUrl('http://alcoaxarquia.com/panel/parsers/query/post.php?articulo='.$id, $permissions);

echo '<a href="/panel/nota.php" class="myLink">Conectando con Facebook!</a>';
//echo '<a href="' . $loginUrl . '" class="myLink">Conectando con Facebook!</a>';


		

		
		mysql_close($conn); $conn ="";

	/*	if ($result)

		{

			print "<meta http-equiv=\"refresh\" content=\"0;URL=../../$urlOK.php?id=$id&edit=1&succes=1\">";

		}

		else

		{

			print "<meta http-equiv=\"refresh\" content=\"0;URL=../../$urlOK.php?id=$id&edit=1&error=1\">";			

		}
*/
	}

	else

	{

			borraAcceso();

	}

?>
 <script src="../../assets/global/plugins/jquery.min.js" type="text/javascript"></script>

<script type="text/javascript">
$(function(){
    window.location.href = $('.myLink').attr('href');
});
</script>


