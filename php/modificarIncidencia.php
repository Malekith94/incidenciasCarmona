<?php

include("../conexion.php");


$idIncidencia = $_POST["idIncidenci"];
$nombreIncidencia = $_POST["nomIncid"];
$localizacion = $_POST["localIncid"];
$descripcion = $_POST["descIncid"];

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 

$modificar = "UPDATE incidencia SET nombre='$nombreIncidencia', descripcion='$descripcion', localizacion='$localizacion' Where idIncidencia='$idIncidencia'";

if ($mysqli->query($modificar)) {
    echo '<script language="javascript"> alert("Se ha modificado la incidencia correctamente"); window.location="../indexAdmin.php"; </script>';
    //header('location: indexAdmin.php');
	
    //echo "New record created successfully";
    //echo '<p> nombre es: '.$nom.'</p>';
} else {
    
}

$mysqli->close();
?>