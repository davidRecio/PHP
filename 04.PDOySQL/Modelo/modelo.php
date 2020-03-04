<?php

class Paginas{

  public function enlacesPaginasModelo($enlacesM){

  	if(
  	   $enlacesM == "ingresan" ||
  	   $enlacesM == "usuarios" ||
  	   $enlacesM == "editar" ||
       $enlacesM == "salir"){

  		$module = "Views/modulos/".$enlacesM.".php";
  	}


  	elseif ($enlacesM == "index") {

  		$module = "Views/modulos/registro.php";
  		
  	}else{

  		$module = "Views/modulos/registro.php";

  	}

  	return $module;


  }


}


?>