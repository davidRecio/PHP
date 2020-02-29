<?php

$numeroCinco = 5;
//las var empiezan con $ y no necesitan estar inicializadas
echo $numeroCinco ;
//asi se muestra una var

var_dump($numeroCinco);
//te muestra el tipo de variable utilizado a identificar errores

echo "</br> Este es el numero = ", $numeroCinco;
//puedes combinar asi un string con un valor
echo "</br> Este es el numero =  $numeroCinco";
//tambien vale asi

$palabra = "palabra";
echo "</br> Este es la palabra =  $palabra";
//las var sting entre comillas

$boleana = true;
echo "</br>Var boleana= $boleana";
//true es 1 y false es 0

$colores = array("rojo","verde");
echo "</br>Var array= $colores[0]";
//tabien se puede crear variables de tipo array pero se debe inicar el indice, empieza por 0

echo "</br>";
var_dump($colores);
//te muestra el contenido del array

$nevera = array("verdura"=>"pimiento","fruta"=>"pera");
echo "</br>Var array con propiedades= $nevera[verdura]";
//en php existen los arrays q les puedes cambiar el indice por un string, es decir darle una propiedad, y cuando son llamados por el string dan lo de la flecha

echo "</br>";
var_dump($nevera);
//te muestra q es un array y los index modificados con sus propiedades

$verdura = (object)["verdura1"=>"zanahoria","verdura2"=>"tomate"];
echo "</br>Var objeto = $verdura->verdura1";
//puedes llamar a un objeto y q te de sus atibutos llamandolos tal cual se hace declarandolo y pidiendo el atri con ->

echo "</br>";
var_dump($verdura);
//en este caso te muestra los atributos q tiene el objeto


?>