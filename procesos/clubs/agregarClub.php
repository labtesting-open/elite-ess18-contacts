<?php 
	namespace ContactsEss18;

	require_once "../../clases/Club.php";

	$Club = new Club();

	$datos = array(
				"country_code" => $_POST['countryCodeSelect'],
				"category_id" => $_POST['categoryIdSelect'],
				"group_id" => $_POST['groupIdSelect'],
				"name" => $_POST['name'],
				"tel1" => $_POST['tel1'],
				"tel2" => $_POST['tel2'],
				"mail" => $_POST['mail']
			);

	echo $Club->agregarClub($datos);
	
 ?>     

