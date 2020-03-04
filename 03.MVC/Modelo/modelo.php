<?php

class EnlacesPaginas{

  public function enlacesPaginasModelo($enlacesM){

  	if(
  	   $enlacesM == "nosotros" ||
  	   $enlacesM == "servicios" ||
  	   $enlacesM == "contactenos"){

  		$module = "Views/modulos/".$enlacesM.".php";
  	}


  	elseif ($enlacesM == "index") {//por defecto se llama al inicio, es decir la url no tienbe q tener nada en el get

  		$module = "Views/modulos/inicio.php";
  		
  	}else{//al poner como el get por defecto el inicio, haria q le sea mas dificil ver la variable para meter el get correcto, ya que no muestra el error del get(limpiar url), a esto se le llama lista blanca(sistema de seguridad).

  		$module = "Views/modulos/inicio.php";

  	}

  	return $module;


  }


}


?>