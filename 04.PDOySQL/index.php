<?php


//index donde se muestra las salidas de las vistas y atraves de este le enviaremos las acciones que el usuario envie al controlador.
require_once "Controlador/controlador.php";//es el import de java
require_once "Controlador/formularios.php";
require_once "Modelo/modelo.php";
require_once "Modelo/conexion.php";

$conexion =Conexion::conectar();
echo '<pre>'; print_r($conexion); echo "</pre>";

$mvc= new Mvcontroller();
$mvc -> pagina();


?>