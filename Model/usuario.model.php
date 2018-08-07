<?php 


	require_once "connection.php";

	class MdlUsuario{

		static public function MdlMostrarUsuario($tabla,$item,$valor){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt->bindParam(":".$item, $valor, PDO::PARAM_INT);

			$stmt->execute();

			return $stmt->fetch();

			$stmt->close();

			$stmt=null;


		}

	}