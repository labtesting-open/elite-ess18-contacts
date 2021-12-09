<?php 
	namespace ContactsEss18;

	require_once "../../clases/Categoria.php";

	$Categoria = new Categoria();

	$datos = array(
				"country_code" => $_POST['countryCodeSelect'],				
				"name" => $_POST['name'],
				"order_show" => $_POST['order_show']
			);

	echo $Categoria->agregar($datos);
	
 ?>     

