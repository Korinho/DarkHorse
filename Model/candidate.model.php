<?php 

require_once "connection.php";

class ModelCandidato{


	static public function RegistroCandidato($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, apellido, password, numero, pais, email, foto, modo, verificacion, emailEncriptado) VALUES (:nombre, :apellido, :password, :numero, :pais, :email, :foto, :modo, :verificacion, :emailEncriptado)");
	
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":apellido", $datos["apellido"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
		$stmt->bindParam(":numero", $datos["numero"], PDO::PARAM_STR);
		$stmt->bindParam(":pais", $datos["pais"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt->bindParam(":foto", $datos["foto"], PDO::PARAM_STR);
		$stmt->bindParam(":modo", $datos["modo"], PDO::PARAM_STR);
		$stmt->bindParam(":verificacion", $datos["verificacion"], PDO::PARAM_INT);
		$stmt->bindParam(":emailEncriptado", $datos["emailEncriptado"], PDO::PARAM_STR);


		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	static public function MostrarCandidatoSTR($tabla, $item, $valor){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

		$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt-> close();

		$stmt = null;

	}
	static public function MostrarCandidatoINT($tabla, $item, $valor){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

		$stmt -> bindParam(":".$item, $valor, PDO::PARAM_INT);

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt-> close();

		$stmt = null;

	}

	static public function ActualizarCandidato($tabla, $id, $item, $valor){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item = :$item WHERE id = :id");

		$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
		$stmt -> bindParam(":id", $id, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";

		}else{

			return "error";

		}

		$stmt-> close();

		$stmt = null;

	}
	static public function ActualizarPerfilCandidato($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, email = :email, password = :password, foto = :foto WHERE id = :id");

		$stmt -> bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt -> bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt -> bindParam(":password", $datos["password"], PDO::PARAM_STR);
		$stmt -> bindParam(":foto", $datos["foto"], PDO::PARAM_STR);
		$stmt -> bindParam(":id", $datos["id"], PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";

		}else{

			return "error";

		}

		$stmt-> close();

		$stmt = null;

	}

	static public function mdlContarVacantes($tabla,$id){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_vacante = $id");

		$stmt->execute();

		return $stmt->fetchAll();

		$stmt->close();

		$stmt=null;
	}

	static public function MdlPostular($tabla,$candidato,$vacante){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(id_candidato, id_vacante) VALUES ($candidato, $vacante)");

		if($stmt->execute()){
			return "ok";
		}else{
			return "error";
		}

		$stmt->close();

		$stmt=null;
	}
	static public function mdlContarVacantesRepetidos($tabla,$candidato,$vacante){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_vacante = $vacante AND id_candidato = $candidato");

		$stmt->execute();

		return $stmt->fetch();

		$stmt->close();

		$stmt=null;
	}


	static public function mdlMostrarCandidatos($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
		$stmt=null;

	}


}
