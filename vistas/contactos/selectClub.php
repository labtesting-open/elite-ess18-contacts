<?php 
	
	namespace ContactsEss18;

	require_once "../../clases/Modelo.php";	

	$modelo = new Modelo();

	$clubes = $modelo->obtenerClubes();
	
	
 ?> 
    <label for="idClubIdSelect">Club</label>
    <select id="idClubIdSelect" name="idClubIdSelect" class="selectpicker form-control" data-live-search="true" data-size="10">
    <option value="0">Selecciona un club</option>
 	  <?php foreach($clubes as $key=>$club){ ?>
 		<option value="<?php echo $club['id'] ?>"><?php echo $club['name']; ?></option>
 	  <?php } ?>
    </select>

 

    <script>
    // $('#mySelect2').select2({
    //     dropdownParent: $('#modalAgregarContacto')
    // });

    $('.selectpicker').selectpicker();
    </script>




	