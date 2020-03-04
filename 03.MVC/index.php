<?php


//index donde se muestra las salidas de las vistas y atraves de este le enviaremos las acciones que el usuario envie al controlador.
require_once "Controlador/controlador.php";//es el import de java
$mvc= new Mvcontroller();
$mvc -> plantilla();


?>