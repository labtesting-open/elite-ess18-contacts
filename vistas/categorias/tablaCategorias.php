<?php 
	namespace ContactsEss18;

	require_once "../../clases/Modelo.php";

	use Exception;

	$modelo = new Modelo();

	$categorias = $modelo->obtenerTodasLasCategoriasPorPais();

	//$modelo->lookResults($contactos);
	
 ?>

<div class="card">
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-hover table-condensed" id="tablaCategoriasDT">
				<thead>
					<tr>						
						<th>Pais</th>
						<th>Nombre</th>
						<th>Orden</th>										
						<th></th>
					
					</tr>
				</thead>
				<tbody>
					<?php 
						foreach($categorias as $key=>$categoria){			
							$categoriaId = $categoria['id'];		
					?>
					<tr>
						<td><?php echo $categoria['country_name'] ?></td>
						<td><?php echo $categoria['name'] ?></td>
						<td><?php echo $categoria['order_show'] ?></td>	
						<td>
							<span class="btn btn-warning btn-sm" onclick="obtenerDatosCategoria('<?php echo $categoriaId ?>')" data-toggle="modal" data-target="#modalActualizarCategoria">
								<span class="fas fa-edit"></span>
							</span>
							<span class="btn btn-danger btn-sm" onclick="eliminarCategoria('<?php echo $categoriaId ?>')">
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
		$('#tablaCategoriasDT').DataTable();
	});
</script>
