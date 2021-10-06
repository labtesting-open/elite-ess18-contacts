<?php 
	
	namespace ContactsEss18;

	require_once "../../clases/Modelo.php";	

	$countryCode = isset($_GET['country_code'])? $_GET['country_code']: null;

	$categoryId = isset($_GET['category_id'])? $_GET['category_id']: null;

    $nameVar = isset($_GET['namevar'])? $_GET['namevar']: 'categoryIdSelect';

	$modelo = new Modelo();

	$categories = $modelo->obtenerCategorias($countryCode);		
	

 ?>
 	<label for="<?php echo $nameVar; ?>">Categoría</label>
 	<select 
	 id="<?php echo $nameVar; ?>" 
	 name="<?php echo $nameVar; ?>" 
	 class="selectpicker form-control" 
	 data-live-search="true" 
	 data-size="10">
	 <?php 
        foreach ($categories as $key=>$category) {
            if (isset($category['id']) &&  $category['id'] == $categoryId) {
                ?>
 			<option selected="" value="<?php echo $category['id'] ?>"><?php echo $category['name']; ?></option>
 	<?php
            } else {
                ?>
 			<option value="<?php echo $category['id'] ?>"><?php echo $category['name']; ?></option>
 	<?php
            } ?>	
 	<?php
        } ?>
 	</select>

	 <script>
    	$('.selectpicker').selectpicker();
    </script>