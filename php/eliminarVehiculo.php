<?php

include("../conexion.php");

$matricula = $_REQUEST['id'];

$eliminar = "DELETE FROM vehiculo WHERE matricula='$matricula' "; 

if ($mysqli->query($eliminar)) {
    echo '<script language="javascript"> alert("Se ha eliminado el vehiculo correctamente"); window.location="administracion.php"; </script>';
    

    } else {
    echo '<script language="javascript"> alert("No se ha podido eliminar el vehiculo debido a que se encuentra en prestamo"); window.location="administracion.php"; </script>';
}

$mysqli->close();

?>