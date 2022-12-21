<?php
include 'libs/CONEXION.PHP';
include 'provincias/provincias.php';
include 'usuarios/read.php'
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css"/>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <title>Infocontrol</title>
  </head>
  <body>
  <div class="container">
        <div class="titulo my-5">
            <h1 class="text-center">INFOCONTROL</h1>
        </div>
        <div class="Formulario py-5">
           <form method="POST" class="row g-3 needs-validation" action="usuarios/create.php" novalidate>
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label"><b>Nombre (*)</b></label>
                <input name="Nombre" type="text" class="form-control" id="validationCustom01" placeholder="Ingrese su Nombre..." required>
                <div class="valid-feedback">
                Looks good!
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label"><b>Apellido (*)</b></label>
                <input name="Apellido" type="text" class="form-control" id="validationCustom02" placeholder="Ingrese su Apellido..." required>
                <div class="valid-feedback">
                Looks good!
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label"><b>Correo (*)</b></label>
                <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input name="Correo" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="name@example.com" required>
                <div class="invalid-feedback">
                    Please choose a username.
                </div>
                </div>
            </div>
            <div class="col-md-4">
            <label for="exampleInputPassword1" class="form-label"><b>Contraseña (*)</b></label>
            <input name="Clave" type="password" class="form-control" id="exampleInputPassword1" required>
                <div class="invalid-feedback">
                Please provide a valid city.
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom04" class="form-label"><b>Provincia</b></label>
                <select name="Pro" class="form-select" id="validationCustom04" required>
                <option selected disabled>Provincias</option>
                <?php
                foreach($resultado_1 as $dato){
                ?>
                <option value="<?php echo $dato["idProvincia"]; ?>"><?php echo $dato["Nombre"]; ?></option>
                <?php
                }
                ?>
                </select>
                <div class="invalid-feedback">
                Please select a valid state.
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom04" class="form-label"><b>Numero</b></label>
                <select name="Numero" class="form-select" id="validationCustom04" required>
                <option selected disabled>Numero</option>
                <?php
                for($i=1;$i<=100;$i++){
                ?>
                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                <?php
                }
                ?>
                </select>
                <div class="invalid-feedback">
                Please select a valid state.
                </div>
            </div>
            <div class="col-md-12">
                <?php 
                $date = date("d-m-Y");
                $mod_date = strtotime($date."+ 1 days");
                ?>
                <label for="validationCustom04" class="form-label"><b>Fecha (*)</b></label>
                <input name="Fecha" type="date" class="form-control" id="exampleInputPassword1" min="<?php echo date("d-m-Y",$mod_date);?>" required>
                <div class="invalid-feedback">
                Please select a valid state.
                </div>
            </div>
            <div class="col-12">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                    Acepta los terminos y condiciones.
                </label>
                <div class="invalid-feedback">
                    You must agree before submitting.
                </div>
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary px-3 py-2" type="submit">Enviar</button>
            </div>
          </form>
        </div>
        <div class="Tabla">
        <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>idUsuario</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Provincia</th>
                <th>Numero</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            foreach($resultado_3 as $datos){
        ?>
            <tr>
                <td><?php echo $datos["idUsuario"]; ?></td>
                <td><?php echo $datos["Nombre"]; ?></td>
                <td><?php echo $datos["Apellido"]; ?></td>
                <td><?php echo $datos["Correo"]; ?></td>
                <td><?php echo $datos["Provincia"]; ?></td>
                <td><?php echo $datos["Numero"]; ?></td>
                <td><?php echo $datos["FechaDeAlta"]; ?></td>
                <td>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $datos["idUsuario"];?>">
                <i class="las la-edit"></i>
                </button>
                <?php
                include ('helpers/modal_update.php'); 
                ?>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModalD<?php echo $datos["idUsuario"];?>"><i class="las la-trash"></i>
                </button>
                <?php
                include ('helpers/modal_delete.php'); 
                ?>
                </td>
            </tr>
        <?php 
            }
        ?>
        </tbody>
        </table>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>