<?php 

	require_once "connection.php";

	class mdlBlog{

		static public function mdlMostrarBlog($tabla){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt->execute();

			return $stmt->fetchAll();

			$stmt->close();

			$stmt=null;

		}

	}