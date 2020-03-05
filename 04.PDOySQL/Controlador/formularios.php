<?php


class ControladorFormularios{

	static public function ctrRegistro(){


		if(isset($_POST["registroUsuario"]) 
		  ){
			
			$tabla = "usuarios";
		
			$datos =  array("usuario" => $_POST["registroUsuario"],
							 "password" => $_POST["registroPassword"],
							 "email" => $_POST["registroEmail"]);

			$respuesta = ModeloFormulario::mdlRegistro($tabla, $datos);

			return $respuesta;
		}
	}
}


?>