<?php
	session_start();
	include('../funciones.php');
	if(accesoModulos()) 
	{
	
		
		
		$fechar	 = $_POST['fechar'];
		$fechaf = $_POST['fechaf'];
		$bote = $_POST['bote'];
		$estrella1 = $_POST['estrella1'];
		$estrella2	 = $_POST['estrella2'];
		$e1 = $_POST['e1'];
		$e2 = $_POST['e2'];
		$e4 = $_POST['e4'];
		$e5 = $_POST['e5'];
		$e3 = $_POST['e3'];
		$fecharb	 = $_POST['fecharb'];
		$fechafb = $_POST['fechafb'];
		$boteb = $_POST['boteb'];
		$complementario	 = $_POST['complementario'];
		$reintegro	 = $_POST['reintegro'];
		$b1 = $_POST['b1'];
		$b2 = $_POST['b2'];
		$b4 = $_POST['b4'];
		$b5 = $_POST['b5'];
		$b3 = $_POST['b3'];
		$b6 = $_POST['b6'];
		$fecharg = $_POST['fecharg'];
		$fechafg = $_POST['fechafg'];
		$boteg = $_POST['boteg'];
		$claveg	 = $_POST['claveg'];
		$g1 = $_POST['g1'];
		$g2 = $_POST['g2'];
		$g4 = $_POST['g4'];
		$g5 = $_POST['g5'];
		$g3 = $_POST['g3'];
		$g6 = $_POST['g6'];
		$fecharp	 = $_POST['fecharp'];
		$fechafp = $_POST['fechafp'];
		$botep = $_POST['botep'];
		$c = $_POST['c'];
		$r = $_POST['r'];
		$joker = $_POST['joker'];
		$p1 = $_POST['p1'];
		$p2 = $_POST['p2'];
		$p4 = $_POST['p4'];
		$p5 = $_POST['p5'];
		$p3 = $_POST['p3'];
		$p6 = $_POST['p6'];
		
		
			
	 $sql = "INSERT INTO sorteos (fecha, fechar, fechaf, bote, estrella1, estrella2, e1, e2, e3, e4, e5, fecharb, fechafb, boteb, complementario, reintegro, b1, b2, b3, b4, b5, b6, fecharg, fechafg, boteg, claveg, g1, g2, g3, g4, g5, fecharp, fechafp, botep, c, r, joker, p1, p2, p3, p4, p5, p6) 
										VALUES (NOW(),'$fechar', '$fechaf', '$bote', '$estrella1', '$estrella2', '$e1', '$e2', '$e3', '$e4', '$e5','$fecharb', '$fechafb', '$boteb', '$complementario', '$reintegro', '$b1', '$b2', '$b3', '$b4', '$b5', '$b6','$fecharg', '$fechafg', '$boteg', '$claveg', '$g1', '$g2', '$g3', '$g4', '$g5', '$fecharp', '$fechafp', '$botep', '$c', '$r', '$joker', '$p1', '$p2', '$p3', '$p4', '$p5','$p6')";
		$result = mysql_query($sql, $conn);
		$id = mysql_insert_id();
		
	
		
				
		$urlOK = "sorteos";
		mysql_close($conn); $conn ="";
		if ($result)
		{
			print "<meta http-equiv=\"refresh\" content=\"0;URL=../../$urlOK.php?id=$id&edit=1&succes=1\">";
		}
		else
		{
			print "<meta http-equiv=\"refresh\" content=\"0;URL=../../$urlOK.php?id=$id&edit=1&error=1\">";			
		}
	}
	else
	{
			borraAcceso();
	}
?>


