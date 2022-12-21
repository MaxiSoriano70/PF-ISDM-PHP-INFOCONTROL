<?php
 $consulta_3="SELECT u.idUsuario,u.Nombre,u.Apellido,u.Correo,u.Numero,u.FechaDeAlta,p.Nombre as Provincia,p.idProvincia FROM usuarios as u 
 INNER JOIN provincias as p
 ON u.idProvincia=p.idProvincia";
 $resultado_3=mysqli_query($conexionDB,$consulta_3);
?>