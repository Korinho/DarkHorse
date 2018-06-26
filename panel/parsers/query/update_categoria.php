<?php	session_start();
	include('../funciones.php');
	if(accesoModulos()) 		
	{		
	$id = $_POST['idcategoria'];
	$categoria = $_POST['categoria']; 	
	echo $sql = "UPDATE adm_categoria SET 		
	categoria = \"$categoria\"				
	WHERE id = \"$id\" LIMIT 1";	
	$urlOK = "categoria";//variable usada para el redireccionamiento de acciones	
	//include("../images/avatar.php");			
	$result = mysql_query($sql, $conn);		
	mysql_close($conn);$conn="";		
	if ($result)			
	{			
	print "<meta http-equiv=\"refresh\" content=\"0;URL=../../$urlOK.php?id=$id&edit=1&succes=1\">";	
	}		else		
	{			
	print "<meta http-equiv=\"refresh\" content=\"0;URL=../../$urlOK.php?id=$id&edit=1&error=1\">";			
	}		
	}		
	else	
	{	mysql_close($conn);$conn="";	
	borraAcceso();		
	}	?>	