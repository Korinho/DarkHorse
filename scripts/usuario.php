<?php session_start();
include("conn.php");
	header("Content-type: application/json");
	$bd	= new PDO($dsnw, $userw, $passw, $optPDO);

	
	$combo=$_POST['accion'];
	$id=addslashes($_POST['id']);
	$firstname=addslashes($_POST['firstname']);
	$lastname=$_POST['lastname'];
	$phone=$_POST['phone'];
	$country=$_POST['country'];
	$new=md5($_POST['new']);
	$old=md5($_POST['old']);
			
	
	if($combo=="get"){
		try{
		$result=$bd->query('SELECT * FROM Usuarios');
		foreach ($result->fetchAll(PDO::FETCH_ASSOC) as $i => $v) {
				$r[$i]=$v;
			}
		}catch(Exception $e){
			$r["continuar"]=$e;
		}
		echo json_encode($r);
		
	}if($combo=="get_usuario"){
		try{
		$result=$bd->query("SELECT * FROM Usuarios WHERE idUsuario=$id");
		foreach ($result->fetchAll(PDO::FETCH_ASSOC) as $row) {			
			}
			$r=$row;
		}catch(Exception $e){
			$r["continuar"]=$e;
		}
		echo json_encode($r);
		
	}else if($combo=='save'){
		try {
			$sql ="INSERT INTO Usuarios (nombre) VALUES ('$nombre')";
			$bd->query($sql);
			$r["continuar"]=true;
		} catch (Exception $e) {
			$r["continuar"]=$e;
		}
		echo json_encode($r);
	}else if($combo=='update'){
		try {
			$sql="update Usuarios set Usuario = '$firstname', last_name= '$lastname', country= '$country', phone= '$phone' where idUsuario = $id;";
			$bd->query($sql);
			$r["continuar"]=true;
		} catch (Exception $e) {
			$r["continuar"]=$sql;
		}
		echo json_encode($r);
	}
	else if($combo=='pass'){
		try {
			$sql="update Usuarios set Password = '$new' where idUsuario = $id;";
			$bd->query($sql);
			$r["continuar"]=true;
		} catch (Exception $e) {
			$r["continuar"]=$sql;
		}
		echo json_encode($r);
	}else if($combo=="validPass"){
		try{
		$result=$bd->query("SELECT idUsuario FROM Usuarios WHERE idUsuario=$id AND Password = '$old'");
		$result->fetchAll(PDO::FETCH_ASSOC); 
		if($result->rowCount() > 0){
			$r["continuar"]=true;
		}
		$r["sql"]=$result->rowCount();
		}catch(Exception $e){
			$r["continuar"]=$e;
		}
		echo json_encode($r);
		
	}


	?>