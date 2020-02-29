<?php

//funcion sin parametros
function saludo(){

	echo "hola </br>";


}

//asi se llama a ala funcion
saludo();

//funcion con parametros
function despedida($adios){

	//el . actua como el + en java
	echo $adios. "</br>";


}

despedida("adios");


//funciones con retorno

function retorno($retornar){

	return $retornar;


}
// te devuelve el return y como en java puedes ponerlo sobre un print o echo

echo retorno("retornar");

?>