$(document).ready(function(){

	$('#cargaTablaClubs').load('vistas/clubs/tablaClubs.php');
	
	$('#btnAgregarClub').click(function(){

		if ($('#name').val() == "") {
			swal("Debes agregar nombre del club");
			return false;
		} else if ($('#countryCodeSelect').val() == 0) {
			swal("Debes seleccionar un país");
			return false;
		} else if ($('#categoryIdSelect').val() == 0) {
			swal("Debes seleccionar una categoría");
			return false;
		}

		agregarClub();
	});
	

	$('#btnActualizarClub').click(function(){
		actualizarClub();
	});

});


function agregarClub() {
	$.ajax({
		type:"POST",
		data:$('#frmAgregarClub').serialize(),
		url: "procesos/clubs/agregarClub.php",
		success:function(respuesta) {			
			respuesta = respuesta.trim();
			if (respuesta == 1) {
				$('#frmAgregarClub')[0].reset();
				$('#cargaTablaClubs').load('vistas/clubs/tablaClubs.php');
				swal(":D","Se agrego con exito!","success");
			} else {
				swal(":(","No se pudo agregar!","error");
			}
		}
	});
}

function eliminarClub(clubId) {
	swal({
		title: "¿Esta seguro de eliminar esta club?",
		text: "Una vez eliminado no podra ser recuperado!",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			$.ajax({
				type: "POST",
				data: "clubId=" + clubId,
				url: "procesos/clubs/eliminarClub.php",
				success:function(respuesta) {
					respuesta = respuesta.trim();
					if (respuesta == 1) {
						$('#cargaTablaCategorias').load('vistas/clubs/tablaClub.php');
						swal(":D","Se elimino con exito!","success");
					} else {
						swal(":(","No se pudo eliminar!","error");
					}
				}
			});
		} 
	});
}

function obtenerDatosClub(clubId) {	
	$.ajax({
		type:"POST",
		data:"clubId=" + clubId,
		url:"procesos/clubs/obtenerDatosClub.php",
		success:function(respuesta) {
			
			respuesta = jQuery.parseJSON(respuesta);
			
			countryCode = respuesta[0]['country_code'];	
			categoryId = respuesta[0]['category_id'];	
			groupId = respuesta[0]['group_id'];			

			$('#clubId').val(clubId);
			$('#nameU').val(respuesta[0]['name']);
			$('#surnameU').val(respuesta[0]['surname']);
			$('#chargeU').val(respuesta[0]['charge']);
			$('#tel1U').val(respuesta[0]['tel1']);
			$('#tel2U').val(respuesta[0]['tel2']);
			$('#mailsU').val(respuesta[0]['mails']);
			$('#contactoId').val(respuesta[0]['id']);
			$('#selectCountryU').load("vistas/clubs/selectCountryUpdate.php?country_code=" + countryCode);
			$('#SelectCategoryU').load("vistas/clubs/selectCategoryUpdate.php?country_code=" + countryCode + "&category_id=" + categoryId);
			$('#SelectGroupU').load("vistas/clubs/selectGroupUpdate.php?group_id=" + groupId);		
		}
	});
}

function obtenerPaises() {	
							
	$('#selectCountry').load("vistas/clubs/selectCountry.php");
	$('#SelectCategory').load("vistas/clubs/selectCategory.php?country_code=0");
	$('#SelectGroup').load("vistas/clubs/selectGroup.php");
	
}


function obtenerCategoriasPorPais(country_code) {	
	console.log("obtenerCategorias del Pais = " + country_code);
	
	$('#SelectCategory').load("vistas/clubs/selectCategory.php?country_code=" + country_code);
	
}

function obtenerCategoriasPorPaisUpdate(country_code) {	
	console.log("obtenerCategorias del Pais = " + country_code);
	
	$('#SelectCategoryU').load("vistas/clubs/selectCategoryUpdate.php?country_code=" + country_code);
	
}

function actualizarClub() {
	$.ajax({
		type:"POST",
		data:$('#frmActualizarClub').serialize(),
		url: "procesos/clubs/actualizarClub.php",
		success:function(respuesta) {				
			respuesta = respuesta.trim();
			if (respuesta == 1) {
				$('#cargaTablaClubs').load('vistas/clubs/tablaClubs.php');
				$('#modalActualizarClub').modal("toggle");
				swal(":D","Se actualizo con exito!","success");
			} else {
				swal(":(","No se pudo actualizar!","error");
			}
		}
	});
}