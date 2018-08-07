<?php 

	class ctrExperiencia{

		static public function ctrMostrarExperiencia($id){

			$tabla = "experience";

			$respuesta = MdlExperiencia::MdlMostrarExperiencia($tabla,$id);

			return $respuesta;

		}

	}