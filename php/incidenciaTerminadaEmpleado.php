<?php

include("conexion.php");

$fecha = date('Y-m-d');

$actualizar = "UPDATE incidencia SET estado=2, fechaResolucion='$fecha'"; 

?>