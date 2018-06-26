<?php 
	require("../../conn.php");
	$id=trim($_POST['id']); 
	
	$error=1; 	
	$response = "<div class='error_serv'>Cupón inválido</div>";
	
	$querySring = "SELECT * FROM sis_terms WHERE term_id = \"$id\" ORDER BY term_id DESC LIMIT 1  ";
	$query = mysql_query($querySring);
	
	if(mysql_num_rows($query) == 1){ 		
		$newArray = mysql_fetch_array($query);
		$name = $newArray['name'];
		$slug = $newArray['slug'];
		$image = $newArray['image'];
		$id = $newArray['term_id'];
	}
	
	
	$json=array("name"=>$name,"slug"=>$slug, "image"=> $image, "id"=> $id);

	echo json_encode($json);	
	

?>
<?php mysql_close($conn); $conn="";?>
