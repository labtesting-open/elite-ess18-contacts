<?php 
	
	namespace ContactsEss18;

	require_once "../../clases/Modelo.php";	

	$modelo = new Modelo();

	$groups = $modelo->obtenerGrupos();
	
	
 ?>
 	<label for="groupIdSelect">Grupos</label>
 	<select id="groupIdSelect" name="groupIdSelect" class="selectpicker form-control" data-live-search="true" data-size="10">
 		<option value="0">Selecciona un Grupo</option>
 	<?php foreach($groups as $key=>$group){ ?>
 		<option value="<?php echo $group['id'] ?>"><?php echo $group['name']; ?></option>
 	<?php } ?>
	 
 	</select>

	 <script>
    	$('.selectpicker').selectpicker();
    </script>