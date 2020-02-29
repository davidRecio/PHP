<?php

$a= 10;
$b =1;

//las conmdicionales es igual q en java
if($a > $b){

echo "a es mayor q b";

}

elseif ($a == $b) {
	echo "a y b son iguales";
}

else {
	echo "b es mayor q a";
}

//switch igual q en java

$dia= "sabado";

switch ($dia) {
	case 'sabado':{
			echo "</br>es fiesta </br>";
		break;
	}
	
	
	default:
		echo "curro";
		break;
}

//while es igual q en java
$a=0;
$i=false;
while ($i!=true) {
	
	if ($a==4) {
		$i=true;
	}else{
		echo $a. "</br>";
	}

	$a++;
}
//for es igual q en java
for ($i=0; $i < 5; $i++) { 
	echo "</br> $i </br>";
}

//el for each es diferente ya que te da la posicion y el valor obligatoriamente
$colores = array("rojo","verde");
foreach ($colores as $posicion => $valor) {
	echo "el color " . $valor . " esta en la posicion " . $posicion. "</br>";
}
?>