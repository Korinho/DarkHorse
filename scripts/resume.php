<?php session_start();
include("conn.php");
	header("Content-type: application/json");
	$bd	= new PDO($dsnw, $userw, $passw, $optPDO);

	
	$combo=$_POST['accion'];
	$idR=$_POST['idR'];
	$id=addslashes($_POST['id']);
	$name=addslashes($_POST['name']);
	$lastname=$_POST['lastname'];
	$phone=$_POST['phone'];
	$country=$_POST['country'];
	$email=$_POST['email'];
	$language=$_POST['language'];
	$resume=$_POST['resume'];
	$summary=$_POST['summary'];	
	$desired=$_POST['desired'];	
	$display=$_POST['display'];		
	
	$star=$_POST['star'];	
	$end=$_POST['end'];	
	$name=$_POST['name'];
	$description=$_POST['description'];
	$qualification =$_POST['qualification'];
	$idS =$_POST['idS'];
	$type =$_POST['type'];
	
	
	if($combo=="get"){
		try{
		$result=$bd->query("SELECT * FROM resume WHERE id_user=$id");
		foreach ($result->fetchAll(PDO::FETCH_ASSOC) as $row) {			
			}
			$r=$row;
		}catch(Exception $e){
			$r["continuar"]=$e;
		}
		echo json_encode($r);
		
	}else if($combo=='save'){
		try {
			if(empty($idR)){
				$sql ="INSERT INTO resume (date,name,lastname,email,phone,country,language,resume,summary,desired,display, id_user) VALUES (NOW(),'$name','$lastname','$email','$phone','$country','$language','$resume','$summary', $id)";
			}else{
				$sql="update resume set name = '$name', lastname= '$lastname', email= '$email', phone= '$phone', country= '$country' , language= '$language' , resume= '$resume', summary= '$summary' where id = $idR;";
			}
			
			$bd->query($sql);
			$r["continuar"]=true;
		} catch (Exception $e) {
			$r["continuar"]=$e;
		}
		$r["sql"]=$sql;
		echo json_encode($r);
	}else if($combo=='save2'){
		try {
			if(empty($idR)){
				$sql ="INSERT INTO resume ('$desired','$display', $id)";
			}else{
				$sql="update resume set desired= '$desired', display= '$display'  where id = $idR;";
			}
			
			$bd->query($sql);
			$r["continuar"]=true;
		} catch (Exception $e) {
			$r["continuar"]=$e;
		}
		$r["sql"]=$sql;
		echo json_encode($r);
		
	}else if($type==1 || $type == 2 || $type == 3){
		try {
			if(empty($star)){$star=0;}
			if(empty($end)){$end=0;}
			if(empty($idS)){
				$sql ="INSERT INTO experience (id_user,star,end,name,description,qualification,type) VALUES ($id,$star,$end,'$name','$description','$qualification',$type)";
			}else{
				$sql="update experience set star = $star, end= $end, name= '$name', description= '$description', qualification= '$qualification' where id = $idS;";
			}
			
			$bd->query($sql);
			$r["continuar"]=true;
		} catch (Exception $e) {
			$r["continuar"]=$e;
		}
		$r["sql"]=$sql;
		echo json_encode($r);
		
	}if($combo=="getEx"){
		try{
		$result=$bd->query("SELECT * FROM experience WHERE type= 1 AND id_user=$id");
		foreach ($result->fetchAll(PDO::FETCH_ASSOC) as $i => $v) {
				$r[$i]=$v;
			}
		}catch(Exception $e){
			$r=false;
		}
		echo json_encode($r);
		
	}
	if($combo=="getEd"){
		try{
		$result=$bd->query("SELECT * FROM experience WHERE type= 2 AND id_user=$id");
		foreach ($result->fetchAll(PDO::FETCH_ASSOC) as $i => $v) {
				$r[$i]=$v;
			}
		}catch(Exception $e){
			$r=false;
		}
		echo json_encode($r);
		
	}
	if($combo=="getO"){
		try{
		$result=$bd->query("SELECT * FROM experience WHERE type= 3 AND id_user=$id");
			foreach ($result->fetchAll(PDO::FETCH_ASSOC) as $i => $v) {
				$r[$i]=$v;
			}
		}catch(Exception $e){
			$r=false;
		}
		echo json_encode($r);
		
	}


	?>