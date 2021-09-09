<?php 
	namespace ContactsEss18;

	require_once "../../clases/Contactos.php";

	$Contactos = new Contactos();


	$datos = array(
		"contactId" => $_POST['contactoId'],
		"name" => $_POST['nameU'],
		"surname" => $_POST['surnameU'],
		"charge" => $_POST['chargeU'],
		"tel1" => $_POST['tel1U'],
		"tel2" => $_POST['tel2U'],
		"mail" => $_POST['mailU'],
		"idClubIdSelect" => $_POST['idClubIdSelectU']
	);

	echo $Contactos->actualizarContacto($datos);

 ?>


