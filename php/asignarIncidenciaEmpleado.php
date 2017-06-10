<?php

include ("../conexion.php");

//session_start();


$id = $_REQUEST['idInci'];
$empleado =  $_REQUEST['dniEmpleado'];


$actualizar = "UPDATE incidencia set dni='$empleado', estado=1 where idIncidencia=$id";

if ($mysqli->query($actualizar)) {
    echo '<script language="javascript"> alert("Se ha asignado la incidencia correctamente"); window.location="../indexAdmin.php"; </script>';
   
} else {
    echo "Error: " . $actualizar . "<br>" . $mysqli->error;
}

$mysqli->close();

?>