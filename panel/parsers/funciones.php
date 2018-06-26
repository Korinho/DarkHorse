<?php
	
	//----------------------------Login
	//echo $directorio = str_replace("parsers", "", getcwd())."/";
	
	$directorio="/home1/bps/darkhorserecruitment.com/panel/";
	include ($directorio."timer.php");
	@session_start();
	include ($directorio."conn.php");
	$idUser = $_COOKIE["id"];
	$user = $_COOKIE["user"];
	$nivelUser = $_COOKIE["nivel"];
	$nombreUser = $_COOKIE["nombre"];
	//SE crea la conexión a base de datos
	//la función para validar la sesion sería algo asi:
	/*function accesoModulos()
	{
		if(!empty($_SESSION['usuario'])) 
			return true;
		return false;
	}*/
	
	function accesoModulos()
	{
		if(!isset($_COOKIE['nombre'])) 
			return false;
		return true;
	}

	
	function borraAcceso()
	{
		$directorio = "/home/alcoaxarquiacom/public_html/panel/";
		include($directorio."logout.php");
	}
	function CheckNivel() 
	{
		//if(!empty($_SESSION['usuario']) && !empty($_SESSION['token'])) 
		if(isset($_SESSION['usuario']) && isset($_SESSION['token'])) 
		{
			  //quitamos el posible SQLInjection del user y password
			  $_SESSION['usuario'] = mysql_real_escape_string($_SESSION['usuario']);
			  $_SESSION['token'] = mysql_real_escape_string($_SESSION['token']);
			  //checamos que exista
			  $query = mysql_query("SELECT * FROM usuarios ".
					"WHERE user = '{$_SESSION['usuario']}' AND ".
					"token = '{$_SESSION['token']}' ");
			  if(mysql_num_rows($query) == 1) 
			  {
				   //volvemos a calcular un token
				   $_SESSION['token'] = md5(rand().$_SESSION['usuario']);
				   mysql_query("UPDATE usuarios SET ".
				   "token = '{$_SESSION['token']}' WHERE ".
				   "user = '{$_SESSION['usuario']}' ");
				   
					//Re-Capturo la fecha y hora de logueo en una variable para poder usarla en el cálculo de transcurso de tiempo
					$fechaOld= $_SESSION["inicio_sesion"];
					$ahora = date("Y-n-j H:i:s");
					//se calcula el tiempo transcurrido 
					$tiempo_transcurrido = (strtotime($ahora)-strtotime($fechaOld));
					//comparamos el tiempo y verificamos si ha transcurrido el tiempo establecido en la variable $time
					if($tiempo_transcurrido<= $time) 
					{ 
						//setcookie("log", "0", time()-$time);
						//setcookie("id", "", time()-$time);
						//setcookie("user", "", time()-$time);
						//setcookie("nivel", "", time()-$time);
						//setcookie("nombre", "", time()-$time);
						//setcookie("email", "", time()-$time);
						//setcookie("PHPSESSID", "", time()-$time);
						//actualiza la fecha de cierre de sesion
						$_SESSION['fin_sesion']= date("Y-n-j H:i:s");
						mysql_query("UPDATE usuarios SET ".
						"fin_sesion= '{$_SESSION['fin_sesion']}', token = '' WHERE ".
						"user = '{$_SESSION['usuario']}' ");
						mysql_query(" INSERT INTO logActividades 
													(idUsuario, type, nombre, fecha ) 
													VALUES ('{$_COOKIE['id']}', 'Logout', '{$_COOKIE['nombre']}', $FinSes') ");
						session_destroy();
						return false;
						//exit;
					}
					//actualizo la fecha y hora de la sesión
					$_SESSION["inicio_sesion"] = $ahora;
					return true;				   
			  } 
			  else 
			  {
					//se limpia el token
					/*mysql_query("UPDATE usuarios SET ".
				   "token = '' WHERE ".
				   "user = '{$_SESSION['usuario']}' ");
				   header("Location:login.php");
				   session_destroy();
				   header("Location:login.php");
				   exit;
				   */
				   return false; 
			  }
			  mysql_free_result($query);
		  }
			else
			{
				return false;
			}
	}
		
	//----------------------------Fin Login
	
	
	//----------------------------Encrypt
	function encrypt($string, $key) {
	   $result = '';
	   for($i=0; $i<strlen($string); $i++) {
		  $char = substr($string, $i, 1);
		  $keychar = substr($key, ($i % strlen($key))-1, 1);
		  $char = chr(ord($char)+ord($keychar));
		  $result.=$char;
	   }
	   return base64_encode($result);
	}
	function decrypt($string, $key) {
	   $result = '';
	   $string = base64_decode($string);
	   for($i=0; $i<strlen($string); $i++) {
		  $char = substr($string, $i, 1);
		  $keychar = substr($key, ($i % strlen($key))-1, 1);
		  $char = chr(ord($char)-ord($keychar));
		  $result.=$char;
	   }
	   return $result;
	}
	//----------------------------------Fin Encrypt
	function conversor_segundos($seg_ini) {
		$horas = floor($seg_ini/3600);
		$minutos = floor(($seg_ini-($horas*3600))/60);
		$segundos = $seg_ini-($horas*3600)-($minutos*60);
		echo "$horas: $minutos: $segundos";
	}
	//-----------------------------------Mail notifica Servicio

	
	//-----------------------------------tartado de caracteres
	function cambiar_caracteres($text)
		{
		$text = htmlentities($text, ENT_QUOTES, 'UTF-8');
		$text = strtolower($text);
		$patron = array (
			// Espacios, puntos y comas por guion
			'/[\., ]+/' => '_', 
			// Vocales
			'/&agrave;/' => 'a',
			'/&egrave;/' => 'e',
			'/&igrave;/' => 'i',
			'/&ograve;/' => 'o',
			'/&ugrave;/' => 'u',

			'/&aacute;/' => 'a',
			'/&eacute;/' => 'e',
			'/&iacute;/' => 'i',
			'/&oacute;/' => 'o',
			'/&uacute;/' => 'u',

			'/&acirc;/' => 'a',
			'/&ecirc;/' => 'e',
			'/&icirc;/' => 'i',
			'/&ocirc;/' => 'o',
			'/&ucirc;/' => 'u',

			'/&atilde;/' => 'a',
			'/&etilde;/' => 'e',
			'/&itilde;/' => 'i',
			'/&otilde;/' => 'o',
			'/&utilde;/' => 'u',

			'/&auml;/' => 'a',
			'/&euml;/' => 'e',
			'/&iuml;/' => 'i',
			'/&ouml;/' => 'o',
			'/&uuml;/' => 'u',

			'/&auml;/' => 'a',
			'/&euml;/' => 'e',
			'/&iuml;/' => 'i',
			'/&ouml;/' => 'o',
			'/&uuml;/' => 'u', 
			// Otras letras y caracteres especiales
			'/&aring;/' => 'a',
			'/&ntilde;/' => 'n', 
			// Agregar aqui mas caracteres si es necesario 
		); 
		$text = preg_replace(array_keys($patron),array_values($patron),$text);
		return $text;
		}
		
		function separar($cadena)
		{  
			$cadena = ",".$cadena;  
			$largo = strlen($cadena);  
			$cadena = str_split($cadena);   		  
			for($i=0;$i<=$largo;$i++)
			{         
				if($cadena[$i]!=="," && $cadena[$i]!==""){  
					$palabra .= $cadena[$i];  				  
				}else{  
					$palabra = "";        
					$x++;  				  
				}  
				$salida[$x] = $palabra ;              
			}  
			return $salida;  
		} 
	//**************************************************
	function sociales($url,$tituloArticulo)
	{
		$compartir="				
					<fb:like href='$url' layout='button_count' show_faces='false' width='130' font='arial' send='true'></fb:like>
					
					
	";
		return $compartir;  
	}
	//*******************************************************
	function columnasPub($nombre, $EmailTo, $id)
	{
		$nombreSender = "Columnas AtlixGo"; 
		
		
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=utf-8" . "\r\n";
		$headers .= "From: Columnas AtlixGo <webmaster@atlixGo.com>" . "\r\n";
		$Subject = "Nueva Columna de:".$nombre;
		
		
		$Body = "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
		<html xmlns=\"http://www.w3.org/1999/xhtml\">
		<head>
		<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
		<title>Enviado desde www.administracion.atlixGo.com</title>
		</head>
		<body>
		Nueva Columna de: $nombre<br>
		<a href='http://www.atlixgo.com/columna.php?id=$id' target='_blank'>Ver</a>
		
		</body>
		</html>";

		$success = mail($EmailTo, $Subject, $Body, $headers);

		if ($success){
		 $error_mail = 0;
		  return "SMPT Logeo correctamente";
		}
		else{
		 $error_mail = 1;
		  return "SMPT Error Logeo ";
		}
	} 
	
	//***mail cupon
	function mailCupon()//, $inicioSes, $userType, $seccion, $EmailTo, $id)
	{	
	
		$Body="
	
		<h2>
		<span style='color:#9bc652;'><span style=''><strong></strong></span></span><span style=''><strong>Asignaciones</strong></span></h2>
		<p>
			<strong><span style='color: rgb(68, 68, 68); font-family: Calibri, sans-serif; font-size: 15px; line-height: 21px;'>Mensaje : $mensaje </span></strong></p>
		<p>
		
		";
	
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=utf-8" . "\r\n";
		$headers .= "From: Albatros<cupon@albatros.com>" . "\r\n";
		$headers .= "To: <jehieli9@hotmail.com>" . "\r\n";
		$Subject = "Asignaciones";
		
		
		
			$success = mail("jehieli9@hotmail.com", $Subject, $Body, $headers);
		//fin consulta

		
		//$success = mail("jehieli9@hotmail.com", $Subject, $Body, $headers);

		if ($success){
		 $error_mail = 0;
		  return "SMPT Logeo correctamente";
		}
		else{
		 $error_mail = 1;
		  return "SMPT Error Logeo ";
		}
	}

	//******************************************************************************
	 function url2seo($text) {
		$text = htmlentities($text, ENT_QUOTES, 'UTF-8');
		$text = strtolower($text);
		$patron = array (
			// Espacios, puntos y comas por guion
			'/¿/' => '', 
			'/[\., ]+/' => '-', 
			// Vocales
			'/&agrave;/' => 'a',
			'/&egrave;/' => 'e',
			'/&igrave;/' => 'i',
			'/&ograve;/' => 'o',
			'/&ugrave;/' => 'u',
 
			'/&aacute;/' => 'a',
			'/&eacute;/' => 'e',
			'/&iacute;/' => 'i',
			'/&oacute;/' => 'o',
			'/&uacute;/' => 'u',
 
			'/&acirc;/' => 'a',
			'/&ecirc;/' => 'e',
			'/&icirc;/' => 'i',
			'/&ocirc;/' => 'o',
			'/&ucirc;/' => 'u',
 
			'/&atilde;/' => 'a',
			'/&etilde;/' => 'e',
			'/&itilde;/' => 'i',
			'/&otilde;/' => 'o',
			'/&utilde;/' => 'u',
 
			'/&auml;/' => 'a',
			'/&euml;/' => 'e',
			'/&iuml;/' => 'i',
			'/&ouml;/' => 'o',
			'/&uuml;/' => 'u',
 
			'/&auml;/' => 'a',
			'/&euml;/' => 'e',
			'/&iuml;/' => 'i',
			'/&ouml;/' => 'o',
			'/&uuml;/' => 'u', 
			// Otras letras y caracteres especiales
			'/&aring;/' => 'a',
			'/&ntilde;/' => 'n', 
			'/[^a-z0-9_\s-]/' => '-', 
			
			// Agregar aqui mas caracteres si es necesario 
		); 
		$text = preg_replace(array_keys($patron),array_values($patron),$text);
		return $text;
	}
	//convierte bytes
	function bytesToSize($bytes) {
                $sizes[0] = "Bytes";
                $sizes[1] = "KB";
                $sizes[2] = "MB";
                $sizes[3] = "GB";
                $sizes[4] = "TB";
                if ($bytes == 0) return 'n/a';
                $i = intval(floor(log($bytes) / log(1024)));
                if ($i == 0) return $bytes . ' ' . $sizes[$i]; 
                return round(($bytes / pow(1024, $i)),1,PHP_ROUND_HALF_UP). ' ' . $sizes[$i];
            }
	//finbytes
	//elimina dir y contenido
	function rm_recursive($filepath) {
		if (is_dir($filepath) && !is_link($filepath)) {
			if ($dh = opendir($filepath)) {
				while (($sf = readdir($dh)) !== false) {  
					if ($sf == '.' || $sf == '..') {
						continue;
					}
					if (!rm_recursive($filepath.'/'.$sf)) {
						throw new Exception($filepath.'/'.$sf.' no se puede eliminar.');
					}
				}
				closedir($dh);
			}
			return rmdir($filepath);
		}
		return unlink($filepath);
	}
	//Finelimina dir y contenido
	
	function separaGetArray($text, $campo, $opLog)//arreglo, campo a comprarar, operador lógico (and or xor)
	{
		//$sqlTAG = "";
		foreach($text as $separado) {
			$separador .= "$campo= '$separado' $opLog ";
		}		
		return substr($separador, 0, -3); 
	}
	function juntaGetArray($elemento, $campo)//arreglo, campo a comprarar, operador lógico (and or xor)
	{
		//$sqlTAG = "";
		foreach($elemento as $separado) {
			$separador .= "&$campo%5B%5D=$separado"."&";
		}		
		return substr($separador, 0, -1); 
	}
	function separaBuscaSql($text)
	{
		//$sqlTAG = "";
		foreach($text as $separado) {
			$separador .= "$separado AND ";
		}		
		return substr($separador, 0, -4); 
	}
	//descarga imagenes
	function saveImage($url,$path) {
		$c = curl_init();
		curl_setopt($c,CURLOPT_URL,$url);
		curl_setopt($c,CURLOPT_HEADER,0);
		curl_setopt($c,CURLOPT_RETURNTRANSFER,true);
		$s = curl_exec($c);
		curl_close($c);
		$f = fopen($path, 'wb');
		$z = fwrite($f,$s);
		if ($z != false) return true;
		return false;
	}
	//Findescarga imagenes
	
	function acortar($cadena, $limite, $corte=" ", $pad="...") {
		if(strlen($cadena) <= $limite)
			return $cadena;
		if(false !== ($breakpoint = strpos($cadena, $corte, $limite))) {
			if($breakpoint < strlen($cadena) - 1) {
				$cadena = substr($cadena, 0, $breakpoint) . $pad;
			}
		}
		return $cadena;
	}
	//Vaciar CAche
	function vaciarCache(){
		$dir = "/home/atlixgoc/public_html/cache/";
		$ficheroseliminados= 0;
		$handle = opendir($dir);
		while ($file = readdir($handle)) {
		 if (is_file($dir.$file)) {
		  if ( unlink($dir.$file) ){
		   $ficheroseliminados++;
		  }
		 }
		}
	}
	
	//FinVaciar CAche
	//recorta imagen
	function imgCorte($img, $cImg, $we, $he) { 
		list($w, $h, $tip) = getimagesize($img); 

		if ($w / $we > $h / $he) { 
			$hp = $h; 
			$wp = round(($we / $he) * $hp); 
		}  else { 
			$wp = $w; 
			$hp = round(($he / $we) * $wp); 
		} 

		$lp = round(($w - $wp) / 2); 
		$tp = round(($h - $hp) / 2); 

		$thumb = imagecreatetruecolor($we, $he); 
		if ($tip == 1) { 
			$source = imagecreatefromgif($img); 
		}  elseif ($tip == 2) { 
			$source = imagecreatefromjpeg($img); 
		}  elseif ($tip == 3) { 
			$source = imagecreatefrompng($img); 
		} 

		imagecopyresampled($thumb, $source, 0, 0, $lp, $tp, $we, $he, $wp, $hp); 
		imagejpeg($thumb, $cImg); 
	} 
	//Finrecorta imagen
?>
