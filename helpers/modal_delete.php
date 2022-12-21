<!-- Modal -->
<div class="modal fade" id="exampleModalD<?php echo $datos["idUsuario"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="POST" class="row g-3 needs-validation" action="usuarios/delete.php" novalidate>
      <input name="id" type="hidden" class="form-control" id="validationCustom02" value="<?php echo $datos["idUsuario"]; ?>" required >
      <div class="modal-body">
      <div class="mb-3">
          <p class="text-center">¿Deseas Eliminar a <?php echo $datos["Nombre"]," ",$datos["Apellido"]; ?>?</p>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-danger">Eliminar</button>
      </div>
      </form>
    </div>
  </div>
</div>