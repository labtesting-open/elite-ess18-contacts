

<!-- Modal -->
<div class="modal fade" id="modalActualizarContacto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar contacto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmAgregarContactoU">
          
        <div id="clubSelectU"></div>

        <input type="hidden" id="contactoId" name="contactoId">       

        <label for="nameU">Nombre</label>
        <input type="text" class="form-control" id="nameU" name="nameU">

        <label for="surnameU">Apellidos</label>
        <input type="text" class="form-control" id="surnameU" name="surnameU">         

        <label for="chargeU">Cargo</label>
        <input type="text" class="form-control" id="chargeU" name="chargeU">

        <label for="tel1U">Telefono 1</label>
        <input type="text" class="form-control" id="tel1U" name="tel1U">

        <label for="tel2U">Telefono 2</label>
        <input type="text" class="form-control" id="tel2U" name="tel2U">

        <label for="mailU">Email</label>
        <input type="text" class="form-control" id="mailU" name="mailU">    
              
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-warning" id="btnActualizarContacto">Actualizar</button>
      </div>
    </div>
  </div>
</div>