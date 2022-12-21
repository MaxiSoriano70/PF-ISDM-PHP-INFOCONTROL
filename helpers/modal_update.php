<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $datos["idUsuario"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Datos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="POST" class="row g-3 needs-validation" action="usuarios/update.php" novalidate>
      <div class="modal-body">
      <div class="mb-3">
            <input name="id" type="hidden" class="form-control" id="validationCustom02" value="<?php echo $datos["idUsuario"]; ?>" required >
            <label for="validationCustom02" class="form-label"><b>Nombre (*)</b></label>
            <input name="Nombre" type="text" class="form-control" id="validationCustom02" value="<?php echo $datos["Nombre"]; ?>" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
      <div class="mb-3">
            <label for="validationCustom02" class="form-label"><b>Apellido (*)</b></label>
            <input name="Apellido" type="text" class="form-control" id="validationCustom02" value="<?php echo $datos["Apellido"]; ?>" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <div class="mb-3">
            <label for="validationCustomUsername" class="form-label"><b>Correo (*)</b></label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input name="Correo" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" value="<?php echo $datos["Correo"]; ?>" required>
                <div class="invalid-feedback">
                    Please choose a username.
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="validationCustom04" class="form-label"><b>Provincia</b></label>
                <select name="Pro" class="form-select" id="validationCustom04" required>
                <option value="<?php echo $dato["idProvincia"]; ?>"><?php echo $datos["Provincia"]; ?></option>
                <?php
                foreach($resultado_1 as $dato){
                    if($datos["Provincia"]!=$dato["Nombre"]){
                ?>
                    <option value="<?php echo $dato["idProvincia"]; ?>"><?php echo $dato["Nombre"]; ?></option>
                <?php
                    }
                }
                ?>
                </select>
                <div class="invalid-feedback">
                Please select a valid state.
                </div>
        </div>
        <div class="mb-3">
              <label for="validationCustom04" class="form-label"><b>Numero</b></label>
              <select name="Numero" class="form-select" id="validationCustom04" required>
              <option value="<?php if($dato["Numero"]==NULL){echo "0";}else{echo $dato["Numero"];}?>?>"><?php if($dato["Numero"]==NULL){echo "Elija un numero";
              }else{echo $dato["Numero"];} ?></option>
                <?php
                for($i=1;$i<=100;$i++){
                  if($dato["Numero"]!=$i){
                ?>
                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                <?php
                  }
                }
                ?>
                </select>
                <div class="invalid-feedback">
                Please select a valid state.
                </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-success">Guardar Cambios</button>
      </div>
      </form>
    </div>
  </div>
</div>