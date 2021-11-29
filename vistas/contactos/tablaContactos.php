<?php 
	namespace ContactsEss18;

	require_once "../../clases/Modelo.php";

	use Exception;

	$modelo = new Modelo();

	$contactos = $modelo->obtenerContactos();

	//$modelo->lookResults($contactos);
	
 ?>

<div class="card">
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-hover table-condensed" id="tablaContactosDT">
				<thead>
					<tr>											
						<th>Club</th>
						<th>Cargo</th>						
						<th>Mail</th>
						<th>Tel</th>			
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php 
						foreach($contactos as $key=>$contact){			
							$contactoId = $contact['id'];		
					?>
					<tr>												
						<td><?php echo $contact['club_name'] ?></td>
						<td><?php echo $contact['charge'] ?></td>	
						<td><?php echo $contact['mail'] ?></td>	
						<td><?php 
							if(empty($contact['tel1'])){ 
								echo $contact['tel2'];
							}else{
								echo $contact['tel1'];
                            }?>
						</td>				
						<td>
							<span class="btn btn-warning btn-sm" onclick="obtenerDatosContacto('<?php echo $contactoId ?>')" data-toggle="modal" data-target="#modalActualizarContacto">
								<span class="fas fa-edit"></span>
							</span>
							<span class="btn btn-danger btn-sm" onclick="eliminarContacto('<?php echo $contactoId ?>')">
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
		$('#tablaContactosDT').DataTable();
	});
</script>
