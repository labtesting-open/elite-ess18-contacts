<?php 
	
	namespace ContactsEss18;

	require_once "../../clases/Modelo.php";	

	$modelo = new Modelo();

	$categories = $modelo->obtenerCategorias();

	$categoryId = isset($_GET['category_id'])? $_GET['category_id']: null;	
	
	
 ?>
 	<label for="categoryIdSelectU">Categoría</label>
 	<select id="categoryIdSelectU" name="categoryIdSelectU" class="form-control">
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