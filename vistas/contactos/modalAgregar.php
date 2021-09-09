

<!-- Modal -->
<div class="modal fade" id="modalAgregarContacto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo contacto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>      

      <div class="modal-body">      

        <form id="frmAgregarContacto">
          
          <div id="clubSelect"></div>         

          <label for="name">Nombre</label>
          <input type="text" class="form-control" id="name" name="name">

          <label for="surname">Apellidos</label>
          <input type="text" class="form-control" id="surname" name="surname">         

          <label for="charge">Cargo</label>
          <input type="text" class="form-control" id="charge" name="charge">

          <label for="tel1">Telefono 1</label>
          <input type="text" class="form-control" id="tel1" name="tel1">

          <label for="tel2">Telefono 2</label>
          <input type="text" class="form-control" id="tel2" name="tel2">

          <label for="mail">Email</label>
          <textarea class="form-control" id="mail" name="mail" rows="1"></textarea>                

        </form>

        <div id="clubSelectTest"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="btnAgregarContacto">Guardar</button>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
  $(document).ready(function(){
    $('#clubSelect').load("vistas/contactos/selectClub.php");
  });
</script>