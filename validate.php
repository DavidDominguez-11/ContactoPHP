<?php
	$destino= "dominguezdavid396@gmail.com"
	$nombre = $_post["nombre"]
	$correo = $post["correo"]
	$telefono = ["telefono"]
	$mensaje = ["mensaje"]
	$contenido = "Nombre:" . $nombre . "\nCorreo:" . $correo . "\nTelefono:" . $telefono . "\nMensaje:" . $mensaje;
	mail($destino, "Contacto", $contenido);

	?>