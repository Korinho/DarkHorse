<?php
	$nombre = $_POST["name"];
	$telefono = $_POST["phone"];
	$email = $_POST["email"];
	$asunto = $_POST["subject"];
	$mensaje = $_POST["message"];
	
	//$correo = "prueba@contravel.com.mx";
	include('SmtpConfig.php');
	include('SmtpClass.php');

	//$to = "ventaspty@detouroper.com"; // Replace with 'send-to' e-mail address.
	$to = "julio182_7@msn.com"; // Replace with 'send-to' e-mail address.
	$to = "ab-rodillos@prodigy.net.mx"; // Replace with 'send-to' e-mail address.
	$from ="contacto@abrodillos.com"; // Replace with 'send-from' e-mail address.
	$subject = "Contacto AbRodillos";
	$todayis = date("l, F j, Y, g:i a") ;
	$body = " 	$todayis  \n
				Nombre: $nombre \n
				email: $email \n
				tel : $telefono \n
				Asunto : $asunto \n
				Mensaje : $mensaje \n
	";
	$SmtpMail = new SmtpClient($SmtpServer, $SmtpPort, $SmtpUser, $SmtpPass, $from, $to, $subject, $body);
	$result = $SmtpMail->SendMail();
	//print_r($result);
	//echo "send";
?>
