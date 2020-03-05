<h1>REGISTRO DE USUARIO<h1>

<form method="post" action=""><!--para que funcione el post debo definir el meth post-->
	
	<input type="text" placeholder="Usuario" name="registroUsuario" required><!--este nombre name lo utilizare como variable post -->

	<input type="password" placeholder="Contraseña" name="registroPassword" required>

	<input type="email" placeholder="Email" name="registroEmail" required>
	
	<input type="submit" name="Enviar">

	<?php

		//instanciacion de una clase de metodo no estatico

		//$registro = new ControladorFormularios();
		//$registro -> ctrRegistro();

		//instanciacion de una clase de meth estatico

		$registro = ControladorFormularios::ctrRegistro(); //asi no se muestra por pantalla y se guarda el valor en el objeto

		if($registro=="ok"){

			echo '<script>
			if (window.history.replaceState) {
				window.history.replaceState( null, null, window.location.href);
			}

			</script>';//este scrip limpia la cache de post del navegador

			echo '<div class = "alert alert-succes">Registro completado</div>';//pongo comillas simples para diferenciar
		}

	?>

</form>