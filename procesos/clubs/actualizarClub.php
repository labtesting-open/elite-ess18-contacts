<?php 
	namespace ContactsEss18;

	require_once "../../clases/Club.php";

	$Club = new Club();

	$datos = array(
		"clubId" => $_POST['clubId'],
		"name" => $_POST['nameU'],				
		"tel1" => $_POST['tel1U'],
		"tel2" => $_POST['tel2U'],
		"mails" => $_POST['mailsU'],
		"country_code" => $_POST['countryCodeSelectU'],
		"category_id" => $_POST['categoryIdSelectU'],
		"group_id" => $_POST['groupIdSelectU']
	);
			
	echo $Club->actualizarClub($datos);

 ?>