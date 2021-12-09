<?php 
	
	namespace ContactsEss18;

	require_once "../../clases/Modelo.php";	



	$modelo = new Modelo();

	$countries = $modelo->obtenerPaises();
	
	
 ?>
 	<label for="countryCodeSelect">País</label>
 	<select id="countryCodeSelect" name="countryCodeSelect" class="selectpicker form-control" data-live-search="true" data-size="10">
 		<option value="0">Selecciona un país</option>
 	<?php foreach($countries as $key=>$country){ ?>
 		<option value="<?php echo $country['country_code'] ?>"><?php echo $country['name']; ?></option>
 	<?php } ?>
 	</select>
	
	 <script>
    	$('.selectpicker').selectpicker();	


    </script>
