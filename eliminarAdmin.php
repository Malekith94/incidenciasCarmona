<?php
    
    
    include("conexion.php");

    $dni = $_REQUEST['id'];
    
    $query="DELETE FROM usuario WHERE dni = '$dni'";
    $resultado = $mysqli->query($query);

    if($resultado){
        header("Location:usuarios.php");
    }else{
        echo "<html><body><script language='javascript'>alert('No se puede eliminar por que tiene incidencias asociadas'); window.location='usuarios.php'</script></body></html>";
    }

?>