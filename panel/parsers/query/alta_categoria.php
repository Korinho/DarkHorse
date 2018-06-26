<?php
session_start();
include('../funciones.php');
if (accesoModulos()) {
    $name = addslashes($_POST['name']);
	$slug = $_POST['slug'];
	 $parent = $_POST['idparent'];
	$description = $_POST['description'];
		
     $sql       = "INSERT INTO sis_terms (name, slug)                        
	VALUES ('$name', '$slug')";
    $result    = mysql_query($sql, $conn);
    $id        = mysql_insert_id();
    $urlOK     = "category";
		  
		  $status = ""; 
     
          // obtenemos los datos del archivo 
          $tamano = $_FILES["archivo"]['size']; 
          $tipo = $_FILES["archivo"]['type']; 
          $archivo = $_FILES["archivo"]['name']; 
          $prefijo = substr(md5(uniqid(rand())),0,6); 
          
           if($archivo!=""){
            ($archivo != "") or die ("Error al subir la imagen ".$archivo); 
              // guardamos el archivo a la carpeta "capturas" 
            ($tipo == "image/jpeg" || $tipo == "image/jpg") or die ("Sólo se admiten imágenes en <b>.jpg</b> y <b>.jpeg</b>"); 
			$name=$prefijo."_".$archivo;
              $destino =  "archivos/".$name; 
            (copy($_FILES['archivo']['tmp_name'],$destino)) or die ("Error al subir la imagen ".$archivo); 
              $status = "La imagen <b>".$archivo."</b> se a subido correctamente !"; 
              echo $status; 
          
//aquí empieza el código de creación del thumbnail 
          $source=$destino; // archivo de origen 
          $dest="archivos/thumb/tb_".$name; // archivo de destino 
          $width_d=117; // ancho de salida 
          $height_d=82; // alto de salida 

            list($width_s, $height_s, $type, $attr) = getimagesize($source, $info2); // obtengo información del archivo 
          $gd_s = imagecreatefromjpeg($source); // crea el recurso gd para el origen 
          $gd_d = imagecreatetruecolor($width_d, $height_d); // crea el recurso gd para la salida 

            imagecopyresampled($gd_d, $gd_s, 0, 0, 0, 0, $width_d, $height_d, $width_s, $height_s); // redimensiona 
            imagejpeg($gd_d, $dest); // graba 
         
        // Se liberan recursos 
        imagedestroy($gd_s); 
        imagedestroy($gd_d); 

				
				echo  $sql3 = "UPDATE sis_terms SET 
																				
										image = \"$name\"														

								WHERE term_id = \"$id\" LIMIT 1";
				$result = mysql_query($sql3, $conn);
				
				
		   }
		
	
	
	
	 $sql2       = "INSERT INTO sis_term_taxonomy (term_id, taxonomy, description, parent, count)                        
	VALUES ('$id', 'listing', '$description', '$parent', '0')";
    $result    = mysql_query($sql2, $conn);
	
    mysql_close($conn);
    $conn = "";
    if ($result) {
        print "<meta http-equiv=\"refresh\" content=\"0;URL=../../$urlOK.php?id=$id&edit=1&succes=1\">";
    } else {
        print "<meta http-equiv=\"refresh\" content=\"0;URL=../../$urlOK.php?id=$id&edit=1&error=1\">";
    }
} else {
    borraAcceso();
}
?>
