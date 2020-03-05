<?php

	require_once "conexion.php";

	class ModeloFormulario{


		//Registro

		static public function mdlRegistro($tabla, $datos){

			//nos instancia la conexxion y la prepara la sentencia sql, en este caso es la de inserccion
			$stmt =Conexion::conectar()->prepare("INSERT INTO $tabla(usuario, password, email) VALUES (:usuario, :password, :email)");//Ojo poned bien las columnas de las tablas y values es para paramentros ocultos.
			
			//bindParam los asocia, es decir la variable php se asocia al parametro oculto correspondiente de la sentencia SQL que fue usada para preparar la sentencia

			$stmt->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
			$stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
			$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);

			//print_r($stmt[":usuario"]);

			if ($stmt->execute()) { //te dice si ejecuto los insert
				return "ok";
				
			}else{

				//print_r(Conexion::conectar()->errorInfo());

			}

			$stmt -> close();//cierra conexion
			$stmt = null;

		}


	}


?>