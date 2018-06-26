<?php
	 $sql_destacada = "SELECT *
								FROM sorteos ORDER BY id DESC LIMIT 1 ;"; 
	 $result_destacada = mysql_query($sql_destacada, $conn);
	 $newArray = mysql_fetch_array($result_destacada);
	
		$idsorteo = $newArray['id']; 
		$fechae = $newArray['fechae']; 
		$fechap = $newArray['fechap']; 
		$fechar	 = $newArray['fechar'];
		$fechaf = $newArray['fechaf'];
		$bote = $newArray['bote'];
		$estrella1 = $newArray['estrella1'];
		$estrella2	 = $newArray['estrella2'];
		$e1 = $newArray['e1'];
		$e2 = $newArray['e2'];
		$e3 = $newArray['e4'];
		$e5 = $newArray['e5'];
		
		$e4 = $newArray['e3'];
		$fecharb = $newArray['fecharb'];
		$fechafb = $newArray['fechafb'];
		$boteb = $newArray['boteb'];
		$complementario	 = $newArray['complementario'];
		$reintegro	 = $newArray['reintegro'];
		$b1 = $newArray['b1'];
		$b2 = $newArray['b2'];
		$b4 = $newArray['b4'];
		$b5 = $newArray['b5'];
		$b3 = $newArray['b3'];
		$b6 = $newArray['b6'];
		$fecharg = $newArray['fecharg'];
		$fechafg = $newArray['fechafg'];
		$boteg = $newArray['boteg'];
		$claveg	 = $newArray['claveg'];
		$g1 = $newArray['g1'];
		$g2 = $newArray['g2'];
		$g4 = $newArray['g4'];
		$g5 = $newArray['g5'];
		$g3 = $newArray['g3'];
		$g6 = $newArray['g6'];
		$fecharp	 = $newArray['fecharp'];
		$fechafp = $newArray['fechafp'];
		$botep = $newArray['botep'];
		$c = $newArray['c'];
		$r = $newArray['r'];
		$joker = $newArray['joker'];
		$p1 = $newArray['p1'];
		$p2 = $newArray['p2'];
		$p4 = $newArray['p4'];
		$p5 = $newArray['p5'];
		$p3 = $newArray['p3'];
		$p6 = $newArray['p6'];
		
		
	
?>
