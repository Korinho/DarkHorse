<?php
	session_start();
	include ('conn.php');
	//$time=3600;
	include ('timer.php');
	$FinSes = date("Y-n-j H:i:s");
	if(!isset($_COOKIE['nombre']))
	{
		//actualiza la fecha de cierre de sesion
		$_SESSION['fin_sesion']= date("Y-n-j H:i:s");
				mysql_query("UPDATE usuarios SET ".
				"fin_sesion= '{$_SESSION['fin_sesion']}', token = '' WHERE ".
				"user = '{$_SESSION['usuario']}' ");
				mysql_query(" INSERT INTO logActividades 
								(idUsuario, type, nombre, fecha ) 
								VALUES ('{$_COOKIE['id']}', 'Logout', '{$_COOKIE['nombre']}', $FinSes') ");
		session_destroy();
		print "<meta http-equiv=\"refresh\" content=\"0;URL=login.php\">";
	}
	else
	{
		//setcookie("log", "", time()-$time);
	setcookie("id", "", time()-$time);
	setcookie("user", "", time()-$time);
	setcookie("nivel", "", time()-$time);
	setcookie("nombre", "", time()-$time);
	setcookie("email", "", time()-$time);
	setcookie("tipo", "", time()-$time);

	setcookie("token", "", time()-$time);
	setcookie("PHPSESSID", "", time()-$time);
	//actualiza la fecha de cierre de sesion
	$_SESSION['fin_sesion']= date("Y-n-j H:i:s");
            mysql_query("UPDATE usuarios SET ".
            "fin_sesion= '{$_SESSION['fin_sesion']}', token = '' WHERE ".
            "user = '{$_SESSION['usuario']}' ");
            mysql_query(" INSERT INTO logActividades 
								(idUsuario, type, nombre, fecha ) 
								VALUES ('{$_COOKIE['id']}', 'Logout', '{$_COOKIE['nombre']}', '$FinSes') ");
	session_destroy();
	mysql_close($conn);$conn='';
	print "<meta http-equiv=\"refresh\" content=\"0;URL=login.php\">";
	}
?>
