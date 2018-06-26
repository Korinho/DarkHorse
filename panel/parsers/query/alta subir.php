<?php

	session_start();

	include('../funciones.php');

	if(accesoModulos()) 

	{

	

		
		$archivo = Trim(stripslashes($_POST['titulo']));

		$contenido = Trim(stripslashes($_POST['editor1']));


		$descripcion = $_POST['descripcion'];

		$estado = $_POST['estado'];


		

		 $sql = "INSERT INTO nota (fecha, titulo, contenido, descripcion, estado) 

										VALUES (NOW(), '$titulo', '$contenido', '$descripcion','$estado' )";
$result = mysql_query($sql, $conn);

		$id = mysql_insert_id();
	$target_path = "archivos/";
		$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) { /*echo "El archivo ". basename( $_FILES['uploadedfile']['name']). " ha sido subido";*/
		$arcname= basename($_FILES['uploadedfile']['name']);
		 $sql3 = "UPDATE adm_personal SET 
																				
										nombre = \"$arcname\"														

								WHERE id = \"$id\" LIMIT 1";
				$result3 = mysql_query($sql3, $conn);
		} else{
		//echo "Ha ocurrido un error, trate de nuevo!";
		}
		  
		$urlOK = "manuales.php";

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


