<?php session_start();
header("content-type: application/json");
include("conn.php");
ini_set('date.timezone','America/Mexico_City'); 
setlocale(LC_TIME,"es_ES");

try{
								
	$firstname=$_POST['first_name'];
								$lastname=$_POST['last_name'];
								$phone=$_POST['phone'];
								$email=$_POST['email'];
								$country=$_POST['country'];
								$pass=md5($_POST['pass']);
								$type=$_POST['type'];
								
								
								

		$bd=new PDO($dsnw,$userw,$passw,$optPDO);

          $sql1 = "INSERT INTO Usuarios(Usuario,Estatus , Password, email, last_name, phone, country, type) 
		VALUES ('$firstname', 'Inactivo', '$pass', '$email', '$lastname','$phone','$country',$type);";
			$bd->query($sql1); 

							
				
			
$fecha ="Enviado el " . date('d/m/Y', time());
$cadena="<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
	<html xmlns='http://www.w3.org/1999/xhtml'>
	   <head>
		  <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
		  <meta name='format-detection' content='telephone=no'>
		  <meta name='viewport' content='width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no;'>
		  <meta http-equiv='X-UA-Compatible' content='IE=9; IE=8; IE=7; IE=EDGE' />
		  <title>Page title</title>
		  <style type='text/css'>#outlook a{padding:0}.ReadMsgBody{width:100%}.ExternalClass{width:100%}.ExternalClass,.ExternalClass p,.ExternalClass span,.ExternalClass font,.ExternalClass td,.ExternalClass div{line-height:100%}body,table,td,a{-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}table,td{mso-table-lspace:0;mso-table-rspace:0}img{-ms-interpolation-mode:bicubic}body{margin:0;padding:0}img{border:0;height:auto;line-height:100%;outline:0;text-decoration:none}table{border-collapse:collapse!important}.apple-links a{color:#999;text-decoration:none}@media screen and (max-width:600px){td[class='logo'] img{margin:0 auto!important}table[class='wrapper']{width:100%!important}td[class='mobile-image-pad']{padding:0 10px 0 10px!important}td[class='mobile-title-pad']{padding:30px 10px 0 10px!important}td[class='mobile-text-pad']{padding:10px 10px 10px 10px!important}td[class='mobile-column-right']{padding-top:20px!important}td[class='centrado']{text-align:center!important;padding:5px 10px 5px 10px!important}img[class='fluid-image']{width:100%!important;height:auto!important}td[class='hide']{display:none!important}td[class='mobile-button']{padding:12px 60px 12px 60px!important}td[class='mobile-button'] a{font-size:24px!important}}</style>
	   </head>
	   <body style='padding:0;margin:0;background: #f9f9f9;'>
		  <table border='0' cellpadding='0' cellspacing='0' width='100%' style='table-layout:fixed'>
			 <tr>
				<td align='center' bgcolor=''>
				   <table border='0' cellpadding='0' cellspacing='0' width='700' class='wrapper' style='border:solid 1px #e9e9e9'>
					  <tr>
						 <td>
							<table border='0' cellpadding='0' cellspacing='0' width='100%'>
							   <tr bgcolor='#fff'>
								   <td class='mobile-image-pad' height='100' style='text-align:center'>
							  
									 <img src='www.darkhorserecruitment.com/images/horse.png' style='width:300px; height:auto; margin:0px;'>
									</td>
							   </tr>
							   <tr bgcolor='#707070'>
								  <td align='center' style='padding:20px 0 10px 10px;color:#fff;font-family:Arial,Verdana,sans-serif;font-weight:bold;font-size:32px;line-height:36px' class='mobile-title-pad'></td>
							   </tr>
							   <tr bgcolor='#fff'>
								  <td align='left' style='padding:10px 10px 10px 10px;color:#666;font-family:Arial,Verdana,sans-serif;font-weight:normal;font-size:17px;line-height:22px' class='mobile-text-pad'>Hola $firstname .</td>
							   </tr>
							   <tr bgcolor='#707070'>
								  <td align='left' style='padding:10px 10px 10px 10px;color:#fff;font-family:Arial,Verdana,sans-serif;font-weight:normal;font-size:18px;line-height:22px' class='mobile-text-pad'>Confirm Register</td>
							   </tr>
							</table>
						 </td>
					  </tr>
						 <tr  bgcolor='#fff'>
						 <td style='padding:10px 0 10px 0'>
							<table border='0' cellpadding='0' cellspacing='0' width='100%'>
							   <tr>
								  <td>
									 <table border='0' cellpadding='0' cellspacing='0' width='100%' align='left' class='wrapper'>
										<tr>
										   <td>
											  <table border='0' cellpadding='0' cellspacing='0' width='100%'>
												  <tr>
													  <td align='left' style='padding:10px 10px 10px 10px;color:#666;font-family:Arial,Verdana,sans-serif;font-weight:normal;font-size:17px;line-height:22px' class='mobile-text-pad'>		Thank you for registering a new account! Your account is currently INACTIVE. </br>
														To activate your account click on the following link: <a href='https://www.darkhorserecruitment.com/validating.php?email=$email'>Click here</a>
													  </td>
												   </tr>
																	 
												 
											  </table>
										   </td>
										</tr>
									 </table>
								  </td>
							   </tr>
							</table>
						 </td>
					  </tr>					
						
					 <tr>
						 <td>
							<table border='0' cellpadding='0' cellspacing='0' width='100%' align='right' class='wrapper'>
							   <tr>
								  <td>
									 <table border='0' cellpadding='0' cellspacing='0' width='100%'>
										<tr style='background: #000;
'>	
											<td align='left' style='padding: 5px 10px 5px 10px; color: #fff; font-family:Arial,Verdana,sans-serif;  font-size: 15px; line-height: 22px;' class='centrado'>
											  <a href='' style='color:#fff'> </a>
											</td>
											<td align='right' style='padding: 5px 10px 5px 10px; color: #fff; font-family:Arial,Verdana,sans-serif;  font-size: 15px; line-height: 18px;' class='centrado'>
											   <a href='https://www.darkhorserecruitment.com/' style='color:#ccc'>Dark Horse Recruitment</a>.
										   </td>
										</tr>
									 </table>
								  </td>
							   </tr>
							</table>
						 </td>
					  </tr>
				   
					  
				  
				   </table>
				</td>
			 </tr>
		  </table>
	 
	   </body>
	</html>";
	
	


		
			

date_default_timezone_set('America/Toronto');

require_once('mail/class.phpmailer.php');
include("mail/class.smtp.php");

$mail             = new PHPMailer();
$mail->CharSet = 'UTF-8';
$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "mail.darkhorserecruitment.com"; // SMTP server
$mail->SMTPDebug  = false;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = false;  
$mail->SMTPSecure = false;                // enable SMTP authentication
$mail->Host       = "mail.darkhorserecruitment.com"; // sets the SMTP server
$mail->Port       = 25;                    // set the SMTP port for the GMAIL server
$mail->Username   = "webmaster@darkhorserecruitment.com"; // SMTP account username
$mail->Password   = "webmaster.10";        // SMTP account password

$mail->SetFrom("webmaster@darkhorserecruitment.com", 'Confirm Register');

//$mail->AddReplyTo("webmaster@darkhorserecruitment","Confirm Register");

$mail->Subject    = "Confirm Register - Dark Horse Recruitment";

//$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($cadena);


$address = $email;
$mail->AddBCC("jehieli9@gmail.com");
$mail->AddAddress($address, $nombre);
if(!$mail->Send()) {
   $sql1="no enviado";
} else {
   $sql1="enviado";			
}
			
			
			
			
		 $json=array("res"=>true, "sql" => $sql1);
}catch(PDOException $err){		     
       $json=array("res"=>false, "sql" => $sql1);
}
        echo json_encode($json);  

?>

