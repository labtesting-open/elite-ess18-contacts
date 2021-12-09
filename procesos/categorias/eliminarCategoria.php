<?php 

	namespace ContactsEss18;

	require_once "../../clases/Categoria.php";

	$Categoria = new Categoria();

	$categoriaId = $_POST['categoriaId'];

	echo $Categoria->eliminar($categoriaId);
 ?>