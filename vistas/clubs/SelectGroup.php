<?php 
	
	namespace ContactsEss18;

	require_once "../../clases/Modelo.php";	

	$modelo = new Modelo();

	$groups = $modelo->obtenerGrupos();

	$groupId = isset($_GET['group_id'])? $_GET['group_id']: null;	

	$nameVar = isset($_GET['namevar'])? $_GET['namevar']: 'groupIdSelect';
	
	
 ?>
 	<label for="<?php echo $nameVar; ?>">Grupo</label>
 	<select id="<?php echo $nameVar; ?>" name="<?php echo $nameVar; ?>" class="selectpicker form-control" data-live-search="true" data-size="10">
	 	<option value="0">Selecciona un Grupo</option>
	 <?php 
        foreach ($groups as $key=>$group) {
            if (isset($group['id']) &&  $group['id'] == $groupId) {
                ?>
 			<option selected="" value="<?php echo $group['id'] ?>"><?php echo $group['name']; ?></option>
 	<?php
            } else {
                ?>
 			<option value="<?php echo $group['id'] ?>"><?php echo $group['name']; ?></option>
 	<?php
            } ?>	
 	<?php
        } ?>
 	</select>

	 
	<script>
    	$('.selectpicker').selectpicker();
    </script>