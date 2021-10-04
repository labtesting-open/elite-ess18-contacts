

<!-- Modal -->
<div class="modal fade" id="modalAgregarClub" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo club</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form id="frmAgregarClub">

          <label for="name">Nombre</label>
          <input type="text" class="form-control" id="name" name="name">
          
          <div id="selectCountry"></div>

          <div id="SelectCategory"></div>

          <div id="SelectGroup"></div>

          <label for="tel1">Telefono 1</label>
          <input type="text" class="form-control" id="tel1" name="tel1">

          <label for="tel2">Telefono 2</label>
          <input type="text" class="form-control" id="tel2" name="tel2">

          <label for="mail">Correos de contacto</label>
          <textarea class="form-control" id="mail" name="mail" rows="2"></textarea>                  

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="btnAgregarClub">Guardar</button>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
  $(document).ready(function(){
    //console.log("modalAgregar open");
    obtenerPaises();   
  });  

</script>