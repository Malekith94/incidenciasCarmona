<?php

include("../conexion.php");

$id = $_REQUEST['id'];

$eliminar = "DELETE FROM incidencia WHERE idIncidencia=$id "; 

if ($mysqli->query($eliminar)) {
    echo '<script language="javascript"> alert("Se ha eliminado la incidencia correctamente"); window.location="../indexAdmin.php"; </script>';
    

    } else {
    echo "Error: " . $eliminar . "<br>" . $mysqli->error;
}

$mysqli->close();

?>