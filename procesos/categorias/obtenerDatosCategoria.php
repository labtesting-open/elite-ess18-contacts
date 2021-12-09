<?php
	namespace ContactsEss18;

	require_once "../../clases/Categoria.php";

	$categoria = new Categoria();
	
	$categoriaId = $_POST['categoriaId'];

	echo json_encode($categoria->obtenerDatosCategoria($categoriaId));
	
 ?>