<?php
    include '../libs/CONEXION.PHP';
    $id=$_POST['id'];
	$delete="DELETE FROM usuarios WHERE idUsuario=$id";
	$respuesta=mysqli_query($conexionDB,$delete);
	if($respuesta){
	echo '<script>
            alert ("Eliminado Correctaamente");
            location.href="../index.php";
    </script>';
	}
    include '../libs/CERRAR_CONEXION.PHP';
?>