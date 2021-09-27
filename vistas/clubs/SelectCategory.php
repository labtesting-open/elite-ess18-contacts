<?php 
	
	namespace ContactsEss18;

	require_once "../../clases/Modelo.php";	

	$modelo = new Modelo();

	$categories = $modelo->obtenerCategorias();
	
	
 ?>
 	<label for="categoryIdSelect">Categorias</label>
 	<select id="categoryIdSelect" name="categoryIdSelect" class="selectpicker form-control" data-live-search="true" data-size="10">
 		<option value="0">Selecciona una categoria</option>
 	<?php foreach($categories as $key=>$category){ ?>
 		<option value="<?php echo $category['id'] ?>"><?php echo $category['name']; ?></option>
 	<?php } ?>
 	</select>

	 <script>
    	$('.selectpicker').selectpicker();
    </script>
