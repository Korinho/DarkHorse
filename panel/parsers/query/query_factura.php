<?php
	echo $sql_destacada = "SELECT *
								FROM facturas WHERE id=$idfactura ;"; 
	 $result_destacada = mysql_query($sql_destacada, $conn);
	 $newArray = mysql_fetch_array($result_destacada);
	echo 	$idfactura = $newArray['id'];
		echo $proveedor = $newArray['proveedor']; 
		echo $folio = $newArray['folio']; 
		 echo $numserie = $newArray['numserie']; 
		$fechae = $newArray['fechae']; 
		$fechap = $newArray['fechap']; 
		
		
	
?>
