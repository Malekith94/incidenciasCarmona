<?php

include("../conexion.php");

$id = $_REQUEST['id'];
$fecha = date("Y-m-d");

$actualizar = "UPDATE incidencia SET estado=2, fechaResolucion='$fecha' where idIncidencia=$id ";

if ($mysqli->query($actualizar)) {
    echo '<script language="javascript"> alert("Se ha terminado la incidencia correctamente"); window.location="../indexEmpleado.php"; </script>';
    

    } else {
    echo "Error: " . $actualizar . "<br>" . $mysqli->error;
}

$mysqli->close();

?>