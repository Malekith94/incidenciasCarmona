<?php
    
    
    include("../conexion.php");

    $dni = $_REQUEST['id'];
    
    $query="DELETE FROM usuarioVehiculo WHERE dni = '$dni'";
    $resultado = $mysqli->query($query);

    if($resultado){
        header("Location:prestadoUsuario.php");
    }else{
        echo "<html><body><script language='javascript'>alert('Se ha eliminado el vehiculo del inventario del usuario'); window.location='prestadoUsuario.php'</script></body></html>";
    }

?>