<?php

class Mvcontroller {

	

   //llamar a la pag
	public  function pagina(){

		include "Views/plantilla.php"; 

	}
	//Enlaces

	public function enlacesPaginasController(){

		if(isset( $_GET["action"])){

			$enlacesCT = $_GET["action"];
		}else{


			$enlacesCT="index";

		}

		$respuesta =Paginas::enlacesPaginasModelo($enlacesCT);

		include $respuesta;
	}

}

?>