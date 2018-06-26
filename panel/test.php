<?php
$path = getcwd();
echo "La ruta absoluta es: ";
echo $path;


//conectamos a la base  
$host ="localhost";
$usuario ="patrofin_sorteos";
$clave ="9uchYV858q";
$bd = "patrofin_sorteos"; 
$conn=mysql_connect ($host, $usuario, $clave) or die("No se pudo conectar al servidor");	
// seleccionamos la base   
mysql_select_db ( $bd, $conn);

?>
