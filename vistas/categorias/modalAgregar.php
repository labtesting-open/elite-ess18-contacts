

<!-- Modal -->
<div class="modal fade" id="modalAgregarCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar nueva categoría</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form id="frmAgregarCategoria">

        <div id="selectCountry"></div>

          <label for="name">Nombre</label>
          <input type="text" class="form-control" id="name" name="name">

          <label for="tel1">orden</label>
          <input type="number" class="form-control" id="order_show" name="order_show" min="1" max="100" value=1> 
          

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="btnAgregarCategoria">Guardar</button>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
  $(document).ready(function(){
    //console.log("modalAgregar open");
    obtenerDatos();   
  });  

</script>