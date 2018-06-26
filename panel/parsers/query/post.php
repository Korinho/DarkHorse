<?php
	include('../funciones.php');
	session_start();
date_default_timezone_set('UTC');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require 'Facebook/config.php';
define('FACEBOOK_SDK_V4_SRC_DIR',__DIR__ .'/Facebook/');
require_once __DIR__ .'/Facebook/autoload.php';

$id=$_GET['articulo'];

echo $sql_destacada = "SELECT *

								FROM nota WHERE id=$id ;"; 

	$result_destacada = mysql_query($sql_destacada, $conn);

	$newArray = mysql_fetch_array($result_destacada);

		$id = $newArray['id'];

												$titulo = $newArray['titulo'];

												$descripcion = $newArray['descripcion'];

												$contenido = $newArray['contenido'];
												$fecha = $newArray['fecha'];
												$foto = $newArray['imagen'];
											$estado = $newArray['estado'];
$fb = new Facebook\Facebook(array(
  'app_id'  => $config['App_ID'],
  'app_secret' => $config['App_Secret'],
    'default_graph_version' => 'v2.4'
));

 $helper = $fb->getRedirectLoginHelper();
$urlOK="noticias";
try {
	$accessToken = $helper->getAccessToken();
	$linkData = [
		'link' => 'http://alcoaxarquia.com/articulo.php?id='.$id,
		'message' => $titulo,
		'description' => $descripcion,
		'picture' => 'http://alcoaxarquia.com/panel/parsers/query/archivos/'.$foto,
	];
	var_dump($fb->post('/feed', $linkData, $accessToken));
	
} catch (Facebook\Exceptions\FacebookResponseException $e) {
	// When Graph returns an error
	echo 'Graph returned an error: ' . $e->getMessage();
} catch (Facebook\Exceptions\FacebookSDKException $e) {
	// When validation fails or other local issues
	echo 'Facebook SDK returned an error: ' . $e->getMessage();
}

/*
define('APP_ID', $config['App_ID']);
define('APP_SECRET', $config['App_Secret']);
$page_access_token = 'EAACEdEose0cBAHOFWZAivhhb6ZCbcnmWTe97Avb8tVbxoNW8iT7JJpQqJdpcpeIEQhHA1jTNWVTdu0aZANgszQntPTOqZBYm0ZBq9pzy3Q2TLDwbOT1n2n7nU9M01YIzspbeWZAdBKpSnIPlwlcNq5ZCdIsrNt2cne45bVRZALn5ws9KcmgYeLdu';

$appsecret_proof= hash_hmac('sha256', $page_access_token, $config['App_Secret']);
// instance
$fb = new Facebook\Facebook([
    'app_id'  => $config['App_ID'],
  'app_secret' => $config['App_Secret'],
    'default_graph_version' => 'v2.4',
]);

$linkData = [
		'link' => 'http://infodental.es/alcoaxarquia/articulo.php?id='.$id,
		'message' => $titulo,
		'description' => $descripcion,
		'picture' => 'http://alcoaxarquia.com/panel/parsers/query/archivos/'.$foto,
	];

try {
    $response = $fb->post('/313614128983921/feed', $linkData, $page_access_token);

} catch(Facebook\Exceptions\FacebookResponseException $e) {
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
}


*/

	print "<meta http-equiv=\"refresh\" content=\"0;URL=../../$urlOK.php?id=$id&edit=1&succes=1\">";
mysql_close($conn); $conn ="";
?>
