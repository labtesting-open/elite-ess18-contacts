<?php
	namespace ContactsEss18;

	require_once "../../clases/Contactos.php";

	$Contactos = new Contactos();	
	
	$contactoId = $_POST['contactoId'];

	echo json_encode($Contactos->obtenerDatosContacto($contactoId));
	
 ?>