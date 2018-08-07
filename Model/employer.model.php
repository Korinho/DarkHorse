<?php 

require_once "connection.php";

class MdlEmpleador{


	static public function MdlGetEmpleado($tabla,$id){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_empleador = $id");

		$stmt->execute();

		return $stmt->fetch();

		$stmt->close();

		$stmt=null;
	}
}