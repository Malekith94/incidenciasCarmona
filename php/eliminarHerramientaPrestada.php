<?php
    
    
    include("conexion.php");

    $dni = $_REQUEST['id'];
    
    $query="DELETE FROM usuarioInventario WHERE dni = '$dni'";
    $resultado = $mysqli->query($query);

    if($resultado){
        header("Location:usuarios.php");
    }else{
        echo "<html><body><script language='javascript'>alert('Se ha eliminado una herramienta del inventario del usuario'); window.location='usuarios.php'</script></body></html>";
    }

?>