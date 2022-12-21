<?php
 include '../libs/CONEXION.PHP';
 $nombre=$_POST['Nombre'];
 $apellido=$_POST['Apellido'];
 $correo=$_POST['Correo'];
 $c=$_POST['Clave'];
 $provincia=$_POST['Pro'];
 $clave=hash('sha512',$c);
 $fecha=$_POST['Fecha'];
 $numero=$_POST['Numero'];
 $insertar_u="INSERT INTO usuarios (Nombre,Apellido,Correo,Clave,FechaDeAlta,Numero,idProvincia)
 VALUES ('$nombre','$apellido','$correo','$clave','$fecha',$numero,$provincia)";
 $resultado_2=mysqli_query($conexionDB,$insertar_u);
 if($resultado_2){
    echo '<script>
    alert ("Guardado Correctaamente");
    location.href="../index.php";
    </script>';
 }
 include '../libs/CERRAR_CONEXION.PHP';
?>