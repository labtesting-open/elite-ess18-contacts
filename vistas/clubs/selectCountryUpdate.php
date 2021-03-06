<?php 
	
	namespace ContactsEss18;

	require_once "../../clases/Modelo.php";	

	$modelo = new Modelo();

	$countries = $modelo->obtenerPaises();

	$countryCode = isset($_GET['country_code'])? $_GET['country_code']: null;	
	
	
 ?>
 	<label for="countryCodeSelectU">País</label>
 	<select id="countryCodeSelectU" name="countryCodeSelectU" class="selectpicker form-control" data-live-search="true" data-size="10">
	 <?php 
        foreach ($countries as $key=>$country) {
            if (isset($country['country_code']) &&  $country['country_code'] == $countryCode) {
                ?>
 			<option selected="" value="<?php echo $country['country_code'] ?>"><?php echo $country['name']; ?></option>
 	<?php
            } else {
                ?>
 			<option value="<?php echo $country['country_code'] ?>"><?php echo $country['name']; ?></option>
 	<?php
            } ?>	
 	<?php
        } ?>
 	</select>

	 <script>
    	$('.selectpicker').selectpicker();

		$("#countryCodeSelectU").change(function(){
			var countryCode = $("#countryCodeSelectU").val();
			console.log("countryCodeSelectU " + countryCode);
			
			obtenerCategoriasPorPaisUpdate(countryCode);
						
		});

    </script>