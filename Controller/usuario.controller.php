<?php 

	class ctrUsuario{

		public function ctrMostrarUsuario($item,$valor){

			$tabla="usuario";

			$respuesta = MdlUsuario::MdlMostrarUsuario($tabla,$item,$valor);

			return $respuesta;

		}

	}