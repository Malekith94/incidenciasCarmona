<?php

include("../conexion.php");

$id = $_REQUEST['id'];

$eliminar = "DELETE FROM inventario WHERE idHerramienta=$id "; 

if ($mysqli->query($eliminar)) {
    echo '<script language="javascript"> alert("Se ha eliminado la herramienta correctamente"); window.location="administracion.php"; </script>';
    

    } else {
    echo '<script language="javascript"> alert("No se ha podido eliminar la herramienta debido a que se encuentra en prestamo"); window.location="administracion.php"; </script>';
}

$mysqli->close();

?>