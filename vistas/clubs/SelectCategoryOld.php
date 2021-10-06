<?php 
	
	namespace ContactsEss18;

	require_once "../../clases/Modelo.php";	

	$countryCode = isset($_GET['country_code'])? $_GET['country_code']: null;

	$categoryId = isset($_GET['category_id'])? $_GET['category_id']: null;

	$modelo = new Modelo();

	$categories = $modelo->obtenerCategorias($countryCode);	
	
	
 ?>
 	<label for="categoryIdSelect">Categoría</label>
 	<select 
	 id="categoryIdSelect" 
	 name="categoryIdSelect" 
	 class="selectpicker form-control" 
	 data-live-search="true" 
	 data-size="10">
	 <option value="0">Selecciona una categoria</option>
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