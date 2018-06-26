<?php session_start();
include("conn.php");
	header("Content-type: application/json");
	$bd	= new PDO($dsnw, $userw, $passw, $optPDO);

	
	$combo=$_POST['accion'];
	$idR=$_POST['idR'];
	$id=addslashes($_POST['id']);
	$job=addslashes($_POST['job']);
	$country=$_POST['country'];
	$short_description=$_POST['short_description'];
	$about=$_POST['about'];
	$job_description=$_POST['job_description'];
	$language=$_POST['language'];
	$requirements=$_POST['requirements'];
	$qualifications=$_POST['qualifications'];	
	$location=$_POST['location'];	
	$start_date=$_POST['start_date'];		
	$salary=$_POST['salary'];	
	$display=$_POST['display'];	
	
	
	
	if($combo=="get"){
		try{
		$result=$bd->query("SELECT * FROM job WHERE id=$idR");
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
				$sql ="INSERT INTO job (date,job,country,language,display,short_description,about,job_description,requirements,qualifications,location, start_date, salary, id_user) VALUES (NOW(),'$job','$country','$language','$display','$short_description','$about','$job_description','$requirements', '$qualifications', '$location', '$start_date','$salary', $id)";
				$bd->query($sql);
				
				$result=$bd->query("SELECT max(id) as id FROM  job;");
				foreach ($result->fetchAll(PDO::FETCH_ASSOC) as $row) {	
				$r['id']=$row['id'];				
				}
				
				
			}else{
				$sql="update job set job = '$job', country= '$country', language= '$language', display= '$display', short_description= '$short_description' , about= '$about' , job_description = '$job_description', requirements= '$requirements', qualifications= '$qualifications', location= '$location', start_date = '$start_date', salary = '$salary' where id = $idR;";
				$bd->query($sql);
				$r['id']=$idR;
			}
			
			
			
			
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