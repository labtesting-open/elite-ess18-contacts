$(document).ready(function(){

	$('#cargaTablaContactos').load('vistas/contactos/tablaContactos.php');	

	$('#btnAgregarContacto').click(function(){

		if ($('#idClubIdSelect').val() == 0) {
			swal("Debes selecciona un club");
			return false;
		} else if ($('#name').val() == "") {
			swal("Debes agregar el nombre");
			return false;
		} else if ($('#surname').val() == "") {
			swal("Debes agregar apellidos");
			return false;
		}

		agregarContacto();
	});

	$('#btnActualizarContacto').click(function(){
		
		if ($('#nameU').val() == "") {
			swal("Debes agregar el nombre");
			return false;
		} else if ($('#surnameU').val() == "") {
			swal("Debes agregar apellidos");
			return false;
		}
		
		actualizarContacto();
	});
});


function agregarContacto(){
	$.ajax({
		type: "POST",
		url: "procesos/contactos/agregarContacto.php",
		data: $('#frmAgregarContacto').serialize(),
		success:function(respuesta) {
			respuesta = respuesta.trim();
			if (respuesta == 1) {
				$('#frmAgregarContacto')[0].reset();
				$('#cargaTablaContactos').load('vistas/contactos/tablaContactos.php');
				swal(":D","Se agrego con exito!","success");
			} else {
				swal(":(","No se pudo agregar!","error");
			}
		}
	});
}

function actualizarContacto() {
	$.ajax({
		type: "POST",
		url: "procesos/contactos/actualizarContacto.php",
		data: $('#frmAgregarContactoU').serialize(),
		success:function(respuesta) {
			respuesta = respuesta.trim();
			if (respuesta == 1) {
				$('#cargaTablaContactos').load('vistas/contactos/tablaContactos.php');
				$('#modalActualizarContacto').modal("toggle");
				swal(":D","Se actualizo con exito!","success");
			} else {
				swal(":(","No se pudo actualizar!","error");
			}
		}
	});
}


function eliminarContacto(idContacto) {
	swal({
		title: "¿Esta seguro de eliminar este contacto?",
		text: "Una vez eliminado no podra ser recuperado!",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			$.ajax({
				type:"POST",
				data:"idContacto=" + idContacto,
				url:"procesos/contactos/eliminarContacto.php",
				success:function(respuesta){
					respuesta = respuesta.trim();
					if (respuesta == 1) {
						$('#cargaTablaContactos').load('vistas/contactos/tablaContactos.php');
						swal(":D","Se elimino con exito!","success");
					} else {
						swal(":(","No se pudo eliminar!","error");
					}
				}
			});
		} 
	});
}

function obtenerDatosContacto(contactoId) {	
	$.ajax({
		type: "POST",
		data: "contactoId=" + contactoId,
		url: "procesos/contactos/obtenerDatosContacto.php",
		success:function(respuesta) {			
			 respuesta = jQuery.parseJSON(respuesta);		

			 clubId = respuesta[0]['club_id'];			

			 $('#nameU').val(respuesta[0]['name']);
			 $('#surnameU').val(respuesta[0]['surname']);
			 $('#chargeU').val(respuesta[0]['charge']);
			 $('#tel1U').val(respuesta[0]['tel1']);
			 $('#tel2U').val(respuesta[0]['tel2']);
			 $('#mailU').val(respuesta[0]['mail']);
			 $('#contactoId').val(respuesta[0]['id']);
			 $('#clubSelectU').load("vistas/contactos/selectClubUpdate.php?club_id=" + clubId);			
			
		}
	});
}


