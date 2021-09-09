<!DOCTYPE html>
<html>
<head>
	<title>Clubs</title>
	<link rel="icon" type="image/jpg" href="public/img/favicon.jpg">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php require_once "dependencias.php"; ?>
</head>
<body>
	<div class="container-fluid">
		<?php require_once "menu.php"; ?>

		<div class="">
			<h1 class="display-4">Clubs</h1>
			<button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarClub" data-backdrop="static" data-keyboard="false">
				<span class="fas fa-book"></span> Agregar club
			</button>
			<hr class="my-4">
			
			<div id="cargaTablaClubs"></div>
		</div>

		<?php 
			require_once "vistas/clubs/modalAgregar.php";
			require_once "vistas/clubs/modalActualizar.php";  
		?>
	</div>

	<script src="public/js/clubs.js"></script>
</body>
</html>