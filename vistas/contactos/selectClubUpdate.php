<?php 
		
		namespace ContactsEss18;

		require_once "../../clases/Modelo.php";	
	
		$modelo = new Modelo();
	
		$clubes = $modelo->obtenerClubes();

		$clubId = $_GET['club_id'];
	
 ?>

	 <label for="idClubIdSelectU">Club</label>
    <select id="idClubIdSelectU" name="idClubIdSelectU" class="selectpicker form-control" data-live-search="true" data-size="10">
	<?php 
        foreach ($clubes as $key=>$club) {
            if ($club['id'] == $clubId) {
                ?>
 			<option selected="" value="<?php echo $club['id'] ?>"><?php echo $club['name']; ?></option>
 	<?php
            } else {
                ?>
 			<option value="<?php echo $club['id'] ?>"><?php echo $club['name']; ?></option>
 	<?php
            } ?>	
 	<?php
        } ?>
    </select>


	
    <script>
    	$('.selectpicker').selectpicker();
    </script>