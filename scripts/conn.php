<?php
//Conexión PDO en localhost

	$dsnw="mysql:host=localhost; dbname=bps_horse; charset=utf8";
	$userw="bps_userhorse";
	$passw="sistema.2018*";
	$optPDO=array(PDO::ATTR_EMULATE_PREPARES=>false, PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	//datos de servidor
	@define("HOST",$_SERVER['HTTP_HOST']);
	@define("LIGA","HTTP://".$_SERVER['HTTP_HOST']."/");
?>