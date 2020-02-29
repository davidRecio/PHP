<?php
//parecido a java
class Animal{

	public $tipoAlimentacion;

	public $nombre;

	public function mostrar(){
		// ojo el-> siempre pegado
		echo "</br> Hola soy un $this->tipoAlimentacion y me llamo $this->nombre";
	}

}
//no hay getter ni seter por defecto y esta es la forma de meterle valores
$a = new Animal();
$a -> nombre="gacela";
$a -> tipoAlimentacion="hervivoro";
$a -> mostrar();
?>