

<!-- Modal -->
<div class="modal fade" id="modalActualizarClub" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar club</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmActualizarClub"> 

          <input type="hidden" id="clubId" name="clubId">       

          <label for="nameU">Nombre</label>
          <input type="text" class="form-control" id="nameU" name="nameU">
          
          <div id="selectCountryU"></div>

          <div id="SelectCategoryU"></div>

          <div id="SelectGroupU"></div>

          <label for="prefixU">Prefijo</label>
          <input type="text" class="form-control" id="prefixU" name="prefixU" readonly>

          <label for="tel1U">Telefono 1</label>
          <input type="text" class="form-control" id="tel1U" name="tel1U">

          <label for="tel2U">Telefono 2</label>
          <input type="text" class="form-control" id="tel2U" name="tel2U">

          <label for="mailsU">Correos de contacto</label>
          <input type="text" class="form-control" id="mailsU" name="mailsU">    
              
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-warning" id="btnActualizarClub">Actualizar</button>
      </div>
    </div>
  </div>
</div>

</script>