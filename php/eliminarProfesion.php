<?php

include("../conexion.php");

$id = $_REQUEST['id'];

$eliminar = "DELETE FROM profesion WHERE idProfesion=$id "; 

if ($mysqli->query($eliminar)) {
    echo '<script language="javascript"> alert("Se ha eliminado la profesion correctamente"); window.location="administracion.php"; </script>';
    

    } else {
    echo "Error: " . $eliminar . "<br>" . $mysqli->error;
}

$mysqli->close();

?>