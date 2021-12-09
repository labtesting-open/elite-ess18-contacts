

<!-- Modal -->
<div class="modal fade" id="modalActualizarCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar categoría</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmActualizarCategoria"> 

          <input type="hidden" id="categoriaId" name="categoriaId">
          
          <div id="selectCountryU"></div>  

          <label for="nameU">Nombre</label>
          <input type="text" class="form-control" id="nameU" name="nameU">         
                 

          <label for="order_showU">Orden</label>
          <input type="text" class="form-control" id="order_showU" name="order_showU" >             
              
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-warning" id="btnActualizarCategoria">Actualizar</button>
      </div>
    </div>
  </div>
</div>

</script>