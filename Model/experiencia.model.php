<?php 

	require_once "connection.php";

	class MdlExperiencia{

		static public function MdlMostrarExperiencia($tabla,$id){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_candidato = $id");

			$stmt->execute();

			return $stmt->fetchall();

			$stmt->close();

			$stmt=null;

		}

	}