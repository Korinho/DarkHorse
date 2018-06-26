<?php
	session_start();
	include('../funciones.php');
	if(accesoModulos()) 
	{
	
		
		$proveedor = Trim(stripslashes($_POST['proveedor']));
		$folio = Trim(stripslashes($_POST['folio']));
		$numserie	 = $_POST['numserie'];
		$fechae = $_POST['fechae'];
		$fechap = $_POST['fechap'];
		$usuario = $_POST['usuario'];
		
		if($sexo == 'on'){$sexo=1;}
		if($activo == 'on'){$activo=1;}
		
			
		 $sql = "INSERT INTO facturas (fecha, proveedor, folio, numserie, fechae, fechap, usuario) 
										VALUES (NOW(), '$proveedor', '$folio', '$numserie', '$fechae', '$fechap','$usuario')";
		$result = mysql_query($sql, $conn);
		$id = mysql_insert_id();
		
	
		
				
		$urlOK = "facturas";
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


