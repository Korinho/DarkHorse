<?php 

	class ctrBlog{

		public function ctrMostrarBlog(){

			$tabla = "blog";

			$respuesta = mdlBlog::mdlMostrarBlog($tabla);

			return $respuesta;

		}

	}