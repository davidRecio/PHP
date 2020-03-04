<?php

class Mvcontroller {

	//llamar a la plantilla


	public  function plantilla(){

		include "Views/plantilla.php"; //llama a otro php

	}
	//interaccion con el ususario

	public function enlacesPaginasController(){

		$enlacesCT = $_GET["action"];//recoge el valor de la variable action de la url


		$respuesta = EnlacesPaginas::enlacesPaginasModelo($enlacesCT);//llama a la clase y hereda su funcionalidad

		include $respuesta;//como la respuesta es una direc url puede cargarlas como si fuewra un link

	}

}

?>