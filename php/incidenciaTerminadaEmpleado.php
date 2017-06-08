<?php

$mysqli = mysql_connect("localhost", "root");
mysql_select_db("incidencias", $mysqli);

$id = $_REQUEST['id'];
$fecha = date("Y-m-d");

$actualizar = "UPDATE incidencia SET estado=2, fechaResolucion='$fecha' where idIncidencia=$id ";
$mostrar = mysql_query("select * from incidencia where idIncidencia=$id ");
$row = mysql_fetch_row($mostrar);
$insertar = mysql_query("INSERT INTO historial set dni='$row[1]', idIncidencia='$row[0]', nombre='$row[2]', descripcion='$row[3]', estado=2, logo='$row[5]', localizacion='$row[7]', fechaSuceso='$row[8]', fechaResolucion='$fecha' ");

if (mysql_query($actualizar)) {
    echo '<script language="javascript"> alert("Se ha terminado la incidencia correctamente"); window.location="../indexEmpleado.php"; </script>';
    

    } else {
    //echo "Error: " . $actualizar . "<br>" . $mysqli->error;
}


?>