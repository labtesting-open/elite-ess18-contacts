<?php 
	namespace ContactsEss18;

	require_once "../../clases/Contactos.php";

	$Contactos = new Contactos();

	$datos = array(
				"idClubIdSelect" => $_POST['idClubIdSelect'],
				"name" => $_POST['name'],
				"surname" => $_POST['surname'],
				"charge" => $_POST['charge'],
				"tel1" => $_POST['tel1'],
				"tel2" => $_POST['tel2'],
				"mail" => $_POST['mail']
					);

	echo $Contactos->agregarContacto($datos);
 ?>