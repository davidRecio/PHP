<?php


class Conexion{

	static public function conectar(){

		//PDO("nomnre server(ip tmb) , nombre de la base de datos, usuario y pass")

		$link = new PDO("mysql:host=localhost;dbname=cursophp",
						"root",
						"");
		$link->exec("set names utf8");//elejir sintaxis para q lo ejecute

		return $link;

	}


}


?>