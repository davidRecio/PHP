<?php


class ControladorFormularios{

	static public function ctrRegistro(){


		if(isset($_POST["registroUsuario"]) ||
		   isset($_POST["registroPassword"]) ||
		   isset($_POST["registroEmail"])){
			
			return "ok";
		}
	}
}


?>