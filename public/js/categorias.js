$(document).ready(function(){

	$('#cargaTablaCategorias').load('vistas/categorias/tablaCategorias.php');
	
	$('#btnAgregarCategoria').click(function(){
		
		if ($('#name').val() == "") {
			swal("Debes agregar nombre a la categoría");
			return false;
		} else if ($('#countryCodeSelect').val() == 0) {
			swal("Debes seleccionar un país");
			return false;
		} 

		agregarCategoria();
	});

	$('#btnActualizarCategoria').click(function(){
		actualizarCategoria();
	});
});


function agregarCategoria() {
	$.ajax({
		type:"POST",
		data:$('#frmAgregarCategoria').serialize(),
		url: "procesos/categorias/agregarCategoria.php",
		success:function(respuesta) {
			respuesta = respuesta.trim();
			if (respuesta == 1) {
				$('#frmAgregarCategoria')[0].reset();
				$('#cargaTablaCategorias').load('vistas/categorias/tablaCategorias.php');
				swal(":D","Se agrego con exito!","success");
			} else {
				swal(":(","No se pudo agregar!","error");
			}
		}
	});
}

function eliminarCategoria(idCategoria) {
	swal({
		title: "¿Esta seguro de eliminar esta categoria?",
		text: "Una vez eliminado no podra ser recuperado!",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			$.ajax({
				type: "POST",
				data: "idCategoria=" + idCategoria,
				url: "procesos/categorias/eliminarCategoria.php",
				success:function(respuesta) {
					respuesta = respuesta.trim();
					if (respuesta == 1) {
						$('#cargaTablaCategorias').load('vistas/categorias/tablaCategorias.php');
						swal(":D","Se elimino con exito!","success");
					} else {
						swal(":(","No se pudo eliminar!","error");
					}
				}
			});
		} 
	});
}



function obtenerDatos() {
	
	$('#selectCountry').load("vistas/categorias/selectCountry.php");
}

function obtenerDatosCategoria(categoriaId) {	
	$.ajax({
		type:"POST",
		data:"categoriaId=" + categoriaId,
		url:"procesos/categorias/obtenerDatosCategoria.php",
		success:function(respuesta) {
			
			respuesta = jQuery.parseJSON(respuesta);
			
			countryCode = respuesta[0]['country_code'];					

			$('#categoriaId').val(categoriaId);
			$('#nameU').val(respuesta[0]['name']);
			$('#order_showU').val(respuesta[0]['order_show']);
			$('#selectCountryU').load("vistas/categorias/selectCountryUpdate.php?country_code=" + countryCode);

		}
	});
}

function actualizarCategoria() {
	$.ajax({
		type:"POST",
		data:$('#frmActualizarCategoria').serialize(),
		url: "procesos/categorias/actualizarCategoria.php",
		success:function(respuesta) {
			respuesta = respuesta.trim();
			if (respuesta == 1) {
				$('#cargaTablaCategorias').load('vistas/categorias/tablaCategorias.php');
				$('#modalActualizarCategoria').modal("toggle");
				swal(":D","Se actualizo con exito!","success");
			} else {
				swal(":(","No se pudo actualizar!","error");
			}
		}
	});
}