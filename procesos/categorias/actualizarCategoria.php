<?php 
	namespace ContactsEss18;

	require_once "../../clases/Categoria.php";

	$Categoria = new Categoria();

	$datos = array(
		"categoriaId" => $_POST['categoriaId'],
		"name" => $_POST['nameU'],				
		"order_show" => $_POST['order_showU'],		
		"country_code" => $_POST['countryCodeSelectU']		
	);
			
	echo $Categoria->actualizarCategoria($datos);

 ?>