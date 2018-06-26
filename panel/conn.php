<?php
//conectamos a la base  
$host ="localhost";
$usuario ="bps_userhorse";
$clave ="sistema.2018*";
$bd = "bps_horse"; 
$conn=mysql_connect ($host, $usuario, $clave);
mysql_set_charset('utf8',$conn);   
// seleccionamos la base   
mysql_select_db ( $bd, $conn);

?>
