<?php
	namespace ContactsEss18;

	require_once "../../clases/Club.php";

	$Club = new Club();
	
	$clubId = $_POST['clubId'];

	echo json_encode($Club->obtenerDatosClub($clubId));
	
 ?>