<?php

include("../conexion.php");

$id = $_REQUEST['id'];

$finalizar = "DELETE FROM incidencia WHERE idIncidencia=$id "; 

if ($mysqli->query($finalizar)) {
    echo '<script language="javascript"> alert("Se ha finalizado la incidencia correctamente"); window.location="../indexAdmin.php"; </script>';
    

    } else {
    echo "Error: " . $finalizar . "<br>" . $mysqli->error;
}

$mysqli->close();

?>