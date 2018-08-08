<?php 

require_once "connection.php";

class ModelVacantes{


	static public function ModelAddVacante($tabla, $datos){


		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(id_employer, country, language, display, job, short_description, about, job_description, requirements, category, qualifications, location, start_date, salary) VALUES (:id_employer, :country, :lenguaje, :display, :job, :short_description, :about, :job_description, :requirements, :category, :qualifications, :location, :start_date, :salary)");
	
		$stmt->bindParam(":id_employer", $datos["employer"], PDO::PARAM_INT);
		$stmt->bindParam(":country", $datos["pais"], PDO::PARAM_STR);
		$stmt->bindParam(":lenguaje", $datos["lenguaje"], PDO::PARAM_STR);
		$stmt->bindParam(":display", $datos["mostrar"], PDO::PARAM_INT);
		$stmt->bindParam(":job", $datos["tittle"], PDO::PARAM_INT);
		$stmt->bindParam(":short_description", $datos["descripcion_corta"], PDO::PARAM_STR);
		$stmt->bindParam(":about", $datos["sobre"], PDO::PARAM_STR);
		$stmt->bindParam(":job_description", $datos["descripcion"], PDO::PARAM_STR);
		$stmt->bindParam(":requirements", $datos["requerimientos"], PDO::PARAM_STR);
		$stmt->bindParam(":category", $datos["categoria"], PDO::PARAM_STR);
		$stmt->bindParam(":qualifications", $datos["calificacion"], PDO::PARAM_STR);
		$stmt->bindParam(":location", $datos["locacion"], PDO::PARAM_STR);
		$stmt->bindParam(":start_date", $datos["fecha_inicio"], PDO::PARAM_STR);
		$stmt->bindParam(":salary", $datos["salario"], PDO::PARAM_STR);



		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;


	}


	static public function ModelMostrarVacantesRecientes($tabla,$tabla2){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla j, $tabla2 e WHERE j.id_employer = e.id_empleador ORDER BY j.date DESC LIMIT 6");

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();
		
		$stmt = null;

	}

	static public function ModelMostrarVacantesVistas($tabla,$tabla2){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla j, $tabla2 e WHERE j.id_employer = e.id_empleador ORDER BY j.postulaciones DESC LIMIT 6");

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();
		
		$stmt = null;

	}


	static public function ModelMostrarVacantesCategorias($tabla, $item){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

		$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt-> close();

		$stmt = null;

	}

	static public function ModelMostrarVacantesEmpleador($tabla,$id){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM job WHERE id_employer = :id_employer");

		$stmt -> bindParam(":id_employer", $id, PDO::PARAM_STR);

		$stmt ->execute();

		return $stmt -> fetchAll();

		$stmt ->close();

		$stmt = null;



	}

	static public function ModelMostrarVacante($tabla,$id){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id = :id");

		$stmt->bindParam(":id", $id, PDO::PARAM_INT);

		$stmt->execute();

		return $stmt->fetch();

		$stmt->close();

		$stmt = null;
	}

	static public function ModelActualizarVacante($tabla,$id,$datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET job = :job, category = :category, country = :country, language = :language, short_description = :short_description, about = :about, job_description = :job_description, requirements = :requirements, qualifications = :qualifications, location = :location, start_date = :start_date, salary = :salary, display = :display WHERE id = $id");

		$stmt->bindParam(":job", $datos["titulo"], PDO::PARAM_STR);
		$stmt->bindParam(":category", $datos["categoria"], PDO::PARAM_STR);
		$stmt->bindParam(":country", $datos["pais"], PDO::PARAM_STR);
		$stmt->bindParam(":language", $datos["lenguaje"], PDO::PARAM_STR);
		$stmt->bindParam(":short_description", $datos["descripcion_corta"], PDO::PARAM_STR);
		$stmt->bindParam(":about", $datos["sobre"], PDO::PARAM_STR);
		$stmt->bindParam(":job_description", $datos["descripcion"], PDO::PARAM_STR);
		$stmt->bindParam(":requirements", $datos["requerimientos"], PDO::PARAM_STR);
		$stmt->bindParam(":qualifications", $datos["calificacion"], PDO::PARAM_STR);
		$stmt->bindParam(":location", $datos["locacion"], PDO::PARAM_STR);
		$stmt->bindParam(":start_datet", $datos["fecha_inicio"], PDO::PARAM_STR);
		$stmt->bindParam(":salary", $datos["salario"], PDO::PARAM_STR);
		$stmt->bindParam(":display", $datos["mostrar"], PDO::PARAM_INT);

		if($stmt->execute()){
			return "ok";
		}else{
			return "error";
		}
		$stmt->close();

		$stmt=null;

	}

	static public function MdlMostrarPostulacionesCandidato($tabla,$tabla2,$id_candidato){


		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla2 a INNER JOIN $tabla b ON a.id_vacante = b.id WHERE a.id_candidato = $id_candidato");

		$stmt->execute();

		return $stmt->fetchAll();

		$stmt->close();

		$stmt=null;

	}

	static public function MdlMostrarPostulaciones($tabla,$id){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_vacante = $id");

		$stmt->execute();

		return $stmt->fetch();

		$stmt->close();

		$stmt=null;
	}

	static public function mdlMostrarVacantes($tabla){
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
		$stmt=null;
	}
	static public function mdlMostrarVacantes1($tabla,$base,$tope){
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla LIMIT $base, $tope");
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
		$stmt=null;
	}

}