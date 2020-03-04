<!DOCTYPE html>
<html lang="en">
<style type="text/css">
 
 	header{
 		position: relative;
 		margin: auto;
 		text-align: center;
 		padding: 5xp;
 	}
	nav{
 		position: relative;
 		margin: auto;
 		width: 100%;
 		height: auto;
 		background: black;
 	}
 	ul{
 		position: relative;
 		margin: auto;
 		width: 100%;
 		text-align: center;
 	}
 	li{
 		display: inline-block;
 		width: 24%;
 		line-height: 50px;
 		list-style: none;
 	}
 	 a{
 		color: white;
 		text-decoration: none;
 	}
 	section{
 		position: relative;
 		padding: 20px;
 	}
 	table{
 		position: relative;
 		margin: auto;
 		width: 100%;
 		text-align: center;
 	}
 	 h1{
 		text-align: center;
 	}
 	input{
 		position: relative;
 		margin: 2%;
 		padding-top: 10px;
 		margin-left: 30%;
 		width: 40%;
 	 	text-align: center;
 	 	display: block !important;
 	}

</style>
<head>
	 <meta charset="UTF-8">
	 <title>Plantilla</title>


</head>
<body>

<header>

  		<h1>LOGOTIPO</h1>

</header>
	<?php
		include "modulos/navegacion.php";
	?>
<section>

<?php

	$mvc = new Mvcontroller();
	$mvc -> enlacesPaginasController();
?>


</section>

</body>
</html>