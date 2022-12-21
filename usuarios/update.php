<?php
 include '../libs/CONEXION.PHP';
 $id=$_POST['id'];
 $nombre=$_POST['Nombre'];
 $apellido=$_POST['Apellido'];
 $correo=$_POST['Correo'];
 $provincia=$_POST['Pro'];
 $numero=$_POST['Numero'];
 $update_u="UPDATE usuarios SET Nombre='$nombre',Apellido='$apellido',Correo='$correo',Numero=$numero,idProvincia=$provincia
 WHERE idUsuario=$id";
 $resultado_4=mysqli_query($conexionDB,$update_u);
 if($resultado_4){
    echo '<script>
    alert ("Actualizado Correctamente");
    location.href="../index.php";
    </script>';
 }
 include '../libs/CERRAR_CONEXION.PHP';
?>