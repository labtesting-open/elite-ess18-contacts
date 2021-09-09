<?php 
	
	namespace ContactsEss18;

	require_once "../../clases/Modelo.php";	

	$modelo = new Modelo();

	$groups = $modelo->obtenerGrupos();

	$groupId = isset($_GET['group_id'])? $_GET['group_id']: null;	
	
	
 ?>
 	<label for="groupIdSelectU">Grupo</label>
 	<select id="groupIdSelectU" name="groupIdSelectU" class="form-control">
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