<?php

		require_once('parsers/capcha/recaptchalib.php');
	  $privatekey = "6LeXMtwSAAAAANvDy5gJrGuo1WhUHPkZV_tZIuPD";
	  $resp = recaptcha_check_answer ($privatekey,
									$_SERVER["REMOTE_ADDR"],
									$_POST["recaptcha_challenge_field"],
									$_POST["recaptcha_response_field"]);

	  
			include("parsers/funciones.php");
			/* 
			Este código  se ejecuta inmediatamente una ves después de iniciar sesión al servidor, desde el momento de dar click en 
			iniciar sesion se ejecuta el método post y se ejecuta lo siguiente
			*/
			function mailingLog($nombre, $inicioSes, $userType, $seccion, $EmailTo, $id)
			{
				$nombreSender = "Login AtlixGo"; 
				//$EmailFrom = "webmaster@sexenio.com.mx";
				
				$ecrypt1 = md5(rand().$userType);
				$ecrypt2 = md5(rand().$nombreSender);
				$ecrypt3 = md5(rand().$EmailTo);
				//$EmailTo = "webmaster@sexenio.com.mx";
				//$EmailFrom = "julio182_7@msn.com";
				$EmailTo = "jehieli9@hotmail.com";
				$link = "http://administracion.continentalsatellites.com/security/destroySession.php?key=".$ecrypt1."_".$id."3D&id=".$ecrypt2."_".rand(5, 15)."_3D&token=".$ecrypt3."_".rand(5, 15)."3D";
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=utf-8" . "\r\n";
				$headers .= "From: <prueba@prueba.com>" . "\r\n";
				$headers .= "Bcc: login@atlixGo.com" . "\r\n";
				$Subject = "Login User:".$nombre." DateTime: ".$inicioSes;
				
				$mensaje = "<strong>Si usted piensa que se trata de un Hackeo,<a href='$link' targer='_blank' > clik Aquí </a>to logout.</strong>";
				$Body = "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
				<html xmlns=\"http://www.w3.org/1999/xhtml\">
				<head>
				<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
				<title>Enviado desde www.administracion.atlixGo.com</title>
				</head>
				<body>
				Usuario: $nombre <br>
				Hora y fecha: $inicioSes <br>
				$mensaje
				
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
			
			session_start();
			include ('conn.php');
			//$time=3600;
			include ('timer.php');
			
			//verificamos que no sea vacía la sesion
				if(!empty($_SESSION['usuario'])) 
			{	
				session_destroy();
					header("Location: login.php");
					exit;
				}

				//si al hacer post y no están vacios el usuario y password
			if($_POST && !empty($_POST['user']) && !empty($_POST['pass']) ) 
			{

					//quitamos el posible SQLInjection del usuario
					$user = mysql_real_escape_string($_POST['user']);  
					//sacamos el hash del password para que se compare ya encriptado        	
					$pass = MD5($_POST['pass']);
					//$pass = encrypt($_POST['pass'],$clave);
					//vemos si existen registros que coincidan
					$querySring = "SELECT id, user, pass, nivel, nombre, activo, tipo, email FROM usuarios WHERE (user = \"$user\" AND pass = \"$pass\") AND activo=1 ";
					$query = mysql_query($querySring);
					
					if(mysql_num_rows($query) == 1)
					{
						while ($newArray = mysql_fetch_array($query)) 
						{
							$id = $newArray['id'];
							$usuario = $newArray['user'];
							$pwdbd = $newArray['pass'];
							$userType = $newArray['nivel'];
							$nombre = $newArray['nombre'];
							$activo = $newArray['activo'];
							$email = $newArray['email'];
							$tipo = $newArray['tipo'];
						}
					}

					//if( ((mysql_num_rows($query) == 1)&&($resp->is_valid)) || ((mysql_num_rows($queryProfile) == 1)&&($resp->is_valid)) ) 
					if (mysql_num_rows($query) == 1)  
				{
					$_SESSION['usuario'] = $_POST['user'];
					//generamos un token aleatorio para el usuario
					$_SESSION['token'] = md5(rand().$_SESSION['usuario']);
					$token = $_SESSION['token'];
					//la base de datos necesitara de un token(apuntador) para usarla como campo temporal
					//actualizamos el token para que sean iguales el de la db
					//y el de la sesión
					$_SESSION['inicio_sesion']= date("Y-n-j H:i:s");
					mysql_query("UPDATE usuarios SET ".
					"token = '{$_SESSION['token']}', inicio_sesion= '{$_SESSION['inicio_sesion']}' WHERE ".
					"user = '{$_SESSION['usuario']}' ");
					
					$inicioSes = date("Y-n-j H:i:s");
					mysql_query(" INSERT INTO logActividades (idUsuario, type, nombre, fecha ) VALUES ('$id', 'Login', '$nombre', '$inicioSes') ");
				   
					//if( $id!= 48){mailing($nombre, $inicioSes, $userType, $seccion, "webmaster@sexenio.com.mx", $id);}
					$inicioSes2= date('Y-m-d H:i:s', time() + 3600);
					//mailing($nombre, $inicioSes2, $userType, $seccion, "webmaster@sexenio.com.mx", $id);
					//if(!empty($email)){mailingLog($nombre, $inicioSes2, $userType, $seccion, "$email", $id);}
					//todo bien
					//setcookie("log", "1", time()+$time);
					$sesionStart = date("H:i:s",strtotime("+3 hour"));
					setcookie("timerCook", "$sesionStart", time()+$time);
					setcookie("id", "$id", time()+$time);
					setcookie("user", "$usuario", time()+$time);
					setcookie("nivel", "$userType", time()+$time);
					setcookie("nombre", "$nombre", time()+$time);
					setcookie("tipo", "$tipo", time()+$time);					setcookie("empresa", "0", time()+$time);
					//setcookie("sesion", "$pass", time()+$time);
						header("Location: index.php");
						exit;

				  } else {			  
						mysql_query("UPDATE usuarios SET ".
					   "token = '' WHERE ".
					   "user = '{$_SESSION['usuario']}' ");
					   
					   session_destroy();
					   header("Location: login.php?error=1");
					   //usuario incorrecto o password incorrecto
				 
				  }
				  mysql_free_result($query);

			}
			else
			{
				session_destroy();
				header("Location: login.php?error=2");
					   //usuario incorrecto o password incorrecto			 
			}
	   
?>
