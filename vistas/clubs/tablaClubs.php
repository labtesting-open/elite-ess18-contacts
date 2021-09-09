<?php 
	namespace ContactsEss18;

	require_once "../../clases/Modelo.php";

	use Exception;

	$modelo = new Modelo();

	$clubes = $modelo->obtenerClubes();

	//$modelo->lookResults($contactos);
	
 ?>

<div class="card">
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-hover table-condensed" id="tablaClubsDT">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Pais</th>
						<th>Categoria</th>
						<th>Grupo</th>
						<th>Actualizado</th>
						<th>tel1</th>						
						<th></th>
					
					</tr>
				</thead>
				<tbody>
					<?php 
						foreach($clubes as $key=>$club){			
							$clubId = $club['id'];		
					?>
					<tr>
						<td><?php echo $club['name'] ?></td>
						<td><?php echo $club['country_name'] ?></td>
						<td><?php echo $club['category_name'] ?></td>
						<td><?php echo $club['group_name'] ?></td>
						<td><?php echo $club['datetime_updated'] ?></td>
						<td><?php echo $club['tel1'] ?></td>						
						<td>
							<span class="btn btn-warning btn-sm" onclick="obtenerDatosClub('<?php echo $clubId ?>')" data-toggle="modal" data-target="#modalActualizarClub">
								<span class="fas fa-edit"></span>
							</span>
							<span class="btn btn-danger btn-sm" onclick="eliminarClub('<?php echo $clubId ?>')">
								<span class="far fa-trash-alt"></span>
							</span>
						</td>						
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tablaClubsDT').DataTable();
	});
</script>
