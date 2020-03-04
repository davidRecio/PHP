<?php

class EnlacesPaginas{

  public function enlacesPaginasModelo($enlacesM){

  	if($enlacesM == "inicio" || 
  	   $enlacesM == "nosotros" ||
  	   $enlacesM == "servicios" ||
  	   $enlacesM == "contactenos"){

  		$module = "Views/modulos/".$enlacesM.".php";
  	}

  	return $module;


  }


}


?>