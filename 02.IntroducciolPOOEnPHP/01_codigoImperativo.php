<?php

//cod imperativo
$animal1 =(object)["tipoComida"=>"Hervivoro", "formaDeAndar"=>"Cuadrupedo"];
$animal2 =(object)["tipoComida"=>"Omnivoro", "formaDeAndar"=>"bipedo"];

//como no especifica el tipo del para,etro de entrada hay que tener en cuenta los atributos del objeto
function mostrar($animal){

	echo "hola soy un $animal->tipoComida, y mi forma de andar es $animal->formaDeAndar </br>";


}

mostrar($animal1);
mostrar($animal2);
?>